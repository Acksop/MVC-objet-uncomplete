<?php

require WYMD_PATH . DIRECTORY_SEPARATOR . "libs"
		. DIRECTORY_SEPARATOR . "Yaml-master"
		. DIRECTORY_SEPARATOR . "src"
		. DIRECTORY_SEPARATOR . "Yampee"
		. DIRECTORY_SEPARATOR . "Yaml"
		. DIRECTORY_SEPARATOR . "Dumper.php";

require WYMD_PATH . DIRECTORY_SEPARATOR . "libs"
		. DIRECTORY_SEPARATOR . "Yaml-master"
		. DIRECTORY_SEPARATOR . "src"
		. DIRECTORY_SEPARATOR . "Yampee"
		. DIRECTORY_SEPARATOR . "Yaml"
		. DIRECTORY_SEPARATOR . "Parser.php";;

require WYMD_PATH . DIRECTORY_SEPARATOR . "libs"
		. DIRECTORY_SEPARATOR . "Yaml-master"
		. DIRECTORY_SEPARATOR . "src"
		. DIRECTORY_SEPARATOR . "Yampee"
		. DIRECTORY_SEPARATOR . "Yaml"
		. DIRECTORY_SEPARATOR . "Inline.php";  

require WYMD_PATH . DIRECTORY_SEPARATOR . "libs"
  		. DIRECTORY_SEPARATOR . "Yaml-master"
   		. DIRECTORY_SEPARATOR . "src"
    	. DIRECTORY_SEPARATOR . "Yampee"
   		. DIRECTORY_SEPARATOR . "Yaml"
  		. DIRECTORY_SEPARATOR . "Yaml.php";

/*require WYMD_PATH . DIRECTORY_SEPARATOR . "libs"
  		  		. DIRECTORY_SEPARATOR . "Yaml-master"
				. DIRECTORY_SEPARATOR . "autoloader.php";*/
  		  		  
 
  $yaml = new Yampee_Yaml_Yaml();
  
  try {
  	$this->formated_text = $yaml->load($raw_text);
  } catch (InvalidArgumentException $e) {
  	// an error occurred during parsing
  	echo 'Unable to parse the YAML string: '.$e->getMessage();
  }
