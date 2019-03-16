<?php 

require WYMD_PATH . DIRECTORY_SEPARATOR . "libs"
				  . DIRECTORY_SEPARATOR . "parsedown-master"
				  . DIRECTORY_SEPARATOR . "Parsedown.php";

  $text = str_replace("\r", "", $raw_text);
  $text = chop($text)."\n";
  
  $parsedown = new ParseDown();
  
  $this->formated_text = $parsedown->text($text);