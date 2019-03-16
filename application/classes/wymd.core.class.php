<?php 

define("WYMD_PATH" , CLASSES_PATH . DIRECTORY_SEPARATOR . "WYMD" );
define("WYMD_DATA_PATH" , DATA_PATH . DIRECTORY_SEPARATOR . "WYMD" );

class wmdCoreFormatter {

	public $formated_text;
	
	function __construct( $thing , $formateur , $handleur = 'show' ){
		
		/* INITIALISATION DU TEXTE A FORMATTER EN HTML */
		
		$raw_text = '';
		
		if( strlen($thing) < 73 ){
			
			$fileWMD = WYMD_DATA_PATH . DIRECTORY_SEPARATOR
						. $formateur . DIRECTORY_SEPARATOR
						. $thing . ".wym";
			
			if( file_exists( $fileWMD ) ){
				ob_start();
				$data = file( $fileWMD );
				foreach ($data as $line_num => $line) {
					$raw_text .= $line;
				} 
			}else{
				$raw_text = $thing;
			}
			
		}else{
			$raw_text = $thing;
		}
		
		/*
		 * APPEL EN CASCADE DE L'HANDLER PUIS DU FORMATTER CORRESPONDANT
		 */
		
		require WYMD_PATH . DIRECTORY_SEPARATOR . "handler" . DIRECTORY_SEPARATOR . $handleur . ".php";
		
	}
	
}


