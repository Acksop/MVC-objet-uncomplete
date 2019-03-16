<?php
//initialisation des variables
$modified_RawText = $_POST['new_raw_text'];
$rawTextFile = WYMD_DATA_PATH . DIRECTORY_SEPARATOR . $formateur
				. DIRECTORY_SEPARATOR . $_POST['WYMfile'] . ".wym";
//ecriture du fichier en DATA
$handle = fopen($rawTextFile,'w');
fwrite($handle, $modified_RawText);
fclose($handle);

//Affichage du résultat

$raw_text = $modified_RawText;

require WYMD_PATH . DIRECTORY_SEPARATOR . "handler" . DIRECTORY_SEPARATOR . "show.php";
