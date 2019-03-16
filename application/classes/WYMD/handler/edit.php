<?php

$url = $_SERVER['REQUEST_URI'];
$tab_url = explode(DIRECTORY_SEPARATOR,$url);
$flag = FALSE;

for($itx = 0 ; $itx < count($tab_url) ; $itx++){
	if($flag == TRUE){
		$tab_url[$itx] = 'save';
		break;
	}
	if($tab_url[$itx] == 'WYMD'){
		$flag = TRUE;
	}
}
$save_url = implode(DIRECTORY_SEPARATOR,$tab_url);
//$save_url = DIRECTORY_SEPARATOR.$save_url;

$fileWMD = WYMD_DATA_PATH . DIRECTORY_SEPARATOR . $formateur 
			. DIRECTORY_SEPARATOR . $thing . ".wym";
	
if( file_exists( $fileWMD ) ){

$this->formated_text = 
<<<HEREDOC
	<form method='POST' action='$save_url'>
	<div style='display:inline;'>
	<textarea rows='13' cols='73' name='new_raw_text'>
$raw_text
	</textarea>
	</div>
	<div style='display:inline;'>
			<input type='hidden' name='WYMfile' value='$thing' />
			<input type='submit' value='enregistrer fichier WMD' />
	</div>
	</form>
HEREDOC;

}else{
	$this->formated_text =
<<<HEREDOC
	YOU CAN'T EDIT, this is not a file, it's a variable into the application!
	MAYBE YOU SHOULD ENCODE INTO A FILE
	
	SEE YOU NEXT TIMES !
HEREDOC;
}