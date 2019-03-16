<?php 

require WYMD_PATH . DIRECTORY_SEPARATOR . "libs"
				  . DIRECTORY_SEPARATOR . "wikini_callback.php";

$text = str_replace("\r", "", $raw_text);
$text = chop($text)."\n";
	
$text = preg_replace_callback(
		"/(\%\%.*?\%\%|".
		"\"\".*?\"\"|".
		"\[\[.*?\]\]|".
		"\b[a-z]+:\/\/\S+|".
		"\*\*|\#\#|@@|££|__|<|>|\/\/|".
		"======|=====|====|===|==|".
		"-{4,}|---|".
		"\n(\t+|([ ]{1})+)([-+.]|[0-9,a-z,A-Z]+\))?|".
		"^(\t+|([ ]{1})+)([-+.]|[0-9,a-z,A-Z]+\))?|".
		"\{\{.*?\}\}|".
		"\b[A-Z][A-Z,a-z]+[:]([A-Z,a-z,0-9]*)\b|".
		"\b([A-Z][a-z]+[A-Z,0-9][A-Z,a-z,0-9]*)\b|".
		"\n)/ms", "wikini_callback", $text);
	
$this->formated_text = $text;
