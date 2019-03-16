<?php
function wikini_callback($things)
{
	$thing = $things[1];
	$result='';

	static $oldIndentLevel = 0;
	static $oldIndentLength= 0;
	static $indentClosers = array();
	static $newIndentSpace= array();
	static $br = 1;
	static $li = 0;

	$brf=0;
	global $wiki;

	// convert HTML thingies
	if ($thing == "<")
		return "&lt;";
	else if ($thing == ">")
		return "&gt;";
	// bold
	else if ($thing == "**")
	{
		static $bold = 0;
		return (++$bold % 2 ? "<b>" : "</b>");
	}
	// italic
	else if ($thing == "//")
	{
		static $italic = 0;
		return (++$italic % 2 ? "<i>" : "</i>");
	}
	// underlinue
	else if ($thing == "__")
	{
		static $underline = 0;
		return (++$underline % 2 ? "<u>" : "</u>");
	}
	// monospace
	else if ($thing == "##")
	{
		static $monospace = 0;
		return (++$monospace % 2 ? "<tt>" : "</tt>");
	}
	// Deleted
	else if ($thing == "@@")
	{
		static $deleted = 0;
		return (++$deleted % 2 ? "<span class=\"del\">" : "</span>");
	}
	// Inserted
	else if ($thing == "££")
	{
		static $inserted = 0;
		return (++$inserted % 2 ? "<span class=\"add\">" : "</span>");
	}
	// urls
	else if (preg_match("/^([a-z]+:\/\/\S+?)([^[:alnum:]^\/])?$/", $thing, $matches)) {
		$url = $matches[1];
		if (!isset($matches[2])) $matches[2] = '';
		return "<a href=\"$url\">$url</a>".$matches[2];
	}
	// header level 5
	else if ($thing == "==")
	{
	static $l5 = 0;
	$br = 0;
	return (++$l5 % 2 ? "<h5>" : "</h5>");
	}
		// header level 4
	else if ($thing == "===")
	{
	static $l4 = 0;
		$br = 0;
		return (++$l4 % 2 ? "<h4>" : "</h4>");
		}
				// header level 3
	else if ($thing == "====")
	{
	static $l3 = 0;
		$br = 0;
		return (++$l3 % 2 ? "<h3>" : "</h3>");
	}
	// header level 2
	else if ($thing == "=====")
	{
		static $l2 = 0;
		$br = 0;
		return (++$l2 % 2 ? "<h2>" : "</h2>");
	}
		// header level 1
	else if ($thing == "======")
	{
		static $l1 = 0;
		$br = 0;
		return (++$l1 % 2 ? "<h1>" : "</h1>");
		}
		// forced line breaks
		else if ($thing == "---")
		{
		return "<br />";
		}
		// escaped text
		else if (preg_match("/^\"\"(.*)\"\"$/s", $thing, $matches))
		{
		return $matches[1];
		}
	// indented text
	else if (
		(preg_match("/\n(\t+|([ ]{1})+)([-+.]|([0-9,a-z,A-Z]+)\))?/s", $thing, $matches))
	 	||
	 	(preg_match("/^(\t+|([ ]{1})+)([-+.]|([0-9,a-z,A-Z]+)\))?/s", $thing, $matches) && $brf=1)
			)
			{
			// new line
			if ($brf) $br=0;
			$result .= ($br ? "<br />\n" : "");

			// we definitely want no line break in this one.
			$br = 0;

			// find out which indent type we want
			if (!isset($matches[3])) $matches[3] = '';
			$newIndentType = $matches[3];
			if (!$newIndentType) { $opener = "<div class=\"indent\">"; $closer = "</div>"; $br = 1; }
			else if ($newIndentType == ".") { $opener = "<ul style='list-style-type: none;'>\n"; $closer = "</li>\n</ul>"; $li++; }
			else if ($newIndentType == "+") { $opener = "<ul style='list-style-type: square;'>\n"; $closer = "</li>\n</ul>"; $li++; }
			else if ($newIndentType == "-") { $opener = "<ul style='list-style-type: circle;'>\n"; $closer = "</li>\n</ul>"; $li++; }
			else { $opener = "<ol type=\"".$matches[4]."\">\n"; $closer = "</li>\n</ol>"; $li++; }

			// get new indent level
				
			if (strpos($matches[1],"\t")) $newIndentLevel = strlen($matches[1]);
			else
			{
				$newIndentLevel=$oldIndentLevel;
				$newIndentLength = strlen($matches[1]);
				if ($newIndentLength>$oldIndentLength)
				{
					$newIndentLevel++;
					$newIndentSpace[$newIndentLength]=$newIndentLevel;
				}
				else if ($newIndentLength<$oldIndentLength)
					$newIndentLevel=$newIndentSpace[$newIndentLength];
			}
			$op=0;
			if ($newIndentLevel > $oldIndentLevel)
			{
				for ($i = 0; $i < $newIndentLevel - $oldIndentLevel; $i++)
				{
					$result .= $opener;
					$op=1;
					array_push($indentClosers, $closer);
			}
			}
			else if ($newIndentLevel < $oldIndentLevel)
				{
				for ($i = 0; $i < $oldIndentLevel - $newIndentLevel; $i++)
					{
						$op=1;
						$result .= array_pop($indentClosers);
						if ($oldIndentLevel && $li) $result .= "</li>";
			}
			}

			if (isset($li) && $op) $result .= "<li>";
			else if (isset($li))
			$result .= "</li>\n<li>";

			$oldIndentLevel = $newIndentLevel;
			$oldIndentLength= $newIndentLength;
			return $result;
			}
			// new lines
			else if ($thing == "\n")
				{
				// if we got here, there was no tab in the next line; this means that we can close all open indents.
				$c = count($indentClosers);
				for ($i = 0; $i < $c; $i++)
				{
				$result .= array_pop($indentClosers);
				$br = 0;
			}
			$oldIndentLevel = 0;
			$oldIndentLength= 0;
			$newIndentSpace=array();
				
			$result .= ($br ? "<br />\n" : "\n");
			$br = 1;
			return $result;
	}
	// events
	else if (preg_match("/^\{\{(.*?)\}\}$/s", $thing, $matches))
	{
		if ($matches[1])
			return LoadAction($matches[1]);
		else
			return "{{}}";
	}
	// separators
	else if (preg_match("/-{4,}/", $thing, $matches))
	{
	// TODO: This could probably be improved for situations where someone puts text on the same line as a separator.
	//       Which is a stupid thing to do anyway! HAW HAW! Ahem.
	$br = 0;
	return "<hr />";
	}
// if we reach this point, it must have been an accident.
return $thing;
}


/*
 * What is an Action here ?
 *
 * some code php that it will be loaded by a WMDY formatting
 * it generate some HTML with some option like
 *
 * {{img src="http://besancon25.fr/erreurs/erreur500.gif" style="display:inline;float:right;"}}
 * {{actionName option1="varA" option2="varB" ... }}
 *
 */


function LoadAction($ActionRef){

	$parameter = Array();
	
	preg_match("/([a-z]+)([ ]([a-z]+=[\W](.*)[\W]))+/", $ActionRef, $matches);
	$ActionName = $matches[1];
	
	$tab_option = explode(' ',$matches[2]);
	foreach($tab_option as $values){
		preg_match("/([a-z]+)=[\W](.*)[\W]/",$values,$matchs);
		if(isset($matchs[1])){
			$parameter[$matchs[1]] = $matchs[2];
		}
		//$paramTxt .= $matchs[1].":".$matchs[2]."__";
	}
	
	
	
	//return $ActionName."".$paramTxt;
	ob_start();

	$fichierAction = WYMD_PATH . DIRECTORY_SEPARATOR . "action" . DIRECTORY_SEPARATOR . $ActionName . ".php";

	if( file_exists( $fichierAction ) ){
		include WYMD_PATH . DIRECTORY_SEPARATOR . "action" . DIRECTORY_SEPARATOR . $ActionName . ".php";
	}

	$htmlTxt = ob_get_contents();
	
	ob_end_clean();
	
	return $htmlTxt;
}

/*
 * What is an Handler here ?
 *
 * some code php that it will be loaded by a WMDY formatting
 * it generate some HTML befor and after the WMDY formatting
 * in order to edit or do other stuff on the WYSIWYG Page
 *
 * The handler must be in the URL of the page, this is a special param
 *
 * The common use is to edit the text in DATA/thing.wmd
 *
 *
 */

function LoadHandler($name){

	/*ob_start();

	$fichierHandler = WYMD_PATH . DIRECTORY_SEPARATOR . "handler" . DIRECTORY_SEPARATOR . $name . ".php";

	if( file_exists( $fichierAction ) ){
		include WMD_PATH . DIRECTORY_SEPARATOR . "handler" . DIRECTORY_SEPARATOR . $name . ".php";
	}

	return ob_end_flush();*/
}

/*
 * What is an Formatter here ?
 *
 * some code php that it will be loaded by a WMDY formatting
 * it generate some HTML with more option that the actual WMDY formatting
 * in order respect pure BBCODE or MARKDOWN or YAML or WIKINI format
 *
 * The handler must be set the param of the page, this is a special param
 *
 * The common use is to respect the normal format of the file
 *
 * it could have a XML formatter and then could be connected
 * to the dal_bdd.class.php
 *
 *
 */

function LoadFormatter($name){

	/*ob_start();

	$fichierHandler = WYMD_PATH . DIRECTORY_SEPARATOR . "formatter" . DIRECTORY_SEPARATOR . $name . ".php";

	if( file_exists( $fichierAction ) ){
		include WMD_PATH . DIRECTORY_SEPARATOR . "formatter" . DIRECTORY_SEPARATOR . $name . ".php";
	}

	return ob_end_flush();*/
}
							