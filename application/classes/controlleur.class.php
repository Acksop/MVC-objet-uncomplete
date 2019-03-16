<?php
namespace Classes;

class Controlleur{
	
	public $modele;
	public $vue;
	public $dataControl;
	
	public function __construct( $application ){
		
		$this->dataControl = FALSE;
		//condition permettant de savoir si c'est une page de traitement de données
		if( $application->url->page['idParams']['categorie'] == "traitements" ){
			
			$fichier_controlleur = APPLICATION_PATH . DIRECTORY_SEPARATOR
				 . $application->url->page['idParams']['categorie'] . DIRECTORY_SEPARATOR;
			
			foreach($application->url->page['idParams']['type'] as $folder){
				$fichier_controlleur .= $folder . DIRECTORY_SEPARATOR;
			}
				 
			$fichier_controlleur .= $application->url->page['idParams']['article'] . ".php";
			$this->dataControl = TRUE;
			require $fichier_controlleur;
			
		}else{
		
			$this->modele = new Modele( $application );
			
			$this->vue = new Vue( $this );
			
		}
		
	}
	
}
