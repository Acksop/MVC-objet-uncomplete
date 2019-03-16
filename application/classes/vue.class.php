<?php
namespace Classes;

class Vue{
	
	public $ecran;
	public $block_body;
	public $page;
	
	public function __construct($ctr){
		
		//on copie les parametres recupérer dans l'url et le fichier Modele
		//afin de rendre plus lisible la page d'affichage (la VUE)
		$this->page = $ctr->modele->page;
		
		/*START - Chargement, dans le tampon de sortie, de la vue principale	*/

		ob_start();
		
		
			/*ON COMMENCE PAR CHARGER LES FONCTIONS PHP DU CONTROLLEUR*/
			
		$fichier_controlleur = MULTIDEVICE_MVC_PATH . DIRECTORY_SEPARATOR
				 . $ctr->modele->getDeviceName() . DIRECTORY_SEPARATOR
				 . "Controlleurs" . DIRECTORY_SEPARATOR
				 . $ctr->modele->getPageName() . ".php";
		
		$fichier_core_controlleur = MULTIDEVICE_MVC_PATH . DIRECTORY_SEPARATOR
		. $ctr->modele->getCoreName() . DIRECTORY_SEPARATOR
		. "Controlleurs" . DIRECTORY_SEPARATOR
		. $ctr->modele->getPageName() . ".php";
		
		if( file_exists( $fichier_controlleur ) ){
			
			include $fichier_controlleur;
				 
		}else if(file_exists($fichier_core_controlleur)){
			
			include $fichier_core_controlleur;
				 
		}else if( $ctr->modele->page['name'] != ''
			 && $ctr->modele->getPageName() != $ctr->modele->page['name'] ){
			// Erreur Impossible !
			// c'est l'index-404 du modèle
			// de plus le fichier est sensé être labellé vide 
			// ce qui n'est pas possible dans un systeme de fichier actuel
			echo "Le Controlleur " .$ctr->modele->getPageName()." spécifiée ne correspond pas au nom : "
				. $ctr->modele->page['name']
				. " ";
		}else{
			echo "Le Controlleur correspondant de la page : "
				. $ctr->modele->getPageName()
				. " n'existe pas ..."
				." Veuillez le créer dans le répertoire CORE correspondant !";
		}
			/*PUIS ON CHARGE LES ELEMENTS HTML DE LA VUE*/
		$fichier_vue = MULTIDEVICE_MVC_PATH . DIRECTORY_SEPARATOR
				 . $ctr->modele->getDeviceName() . DIRECTORY_SEPARATOR
				 . "Vues" . DIRECTORY_SEPARATOR
				 . $ctr->modele->getPageName() . ".php";
		
		$fichier_vue = MULTIDEVICE_MVC_PATH . DIRECTORY_SEPARATOR
		. $ctr->modele->getCoreName() . DIRECTORY_SEPARATOR
		. "Vues" . DIRECTORY_SEPARATOR
		. $ctr->modele->getPageName() . ".php";
		
		if( file_exists( $fichier_vue ) ){
			
			include $fichier_vue;
				 
		}else if( file_exists( $fichier_core_vue ) ){
			
			include $fichier_core_vue;
				 
		}else if( $ctr->modele->page['name'] != ''
			 && $ctr->modele->getPageName() != $ctr->modele->page['name'] ){
			// Erreur Impossible !
			// c'est l'index-404 du modèle
			// de plus le fichier est sensé être labellé vide 
			// ce qui n'est pas possible dans un systeme de fichier actuel
			
			echo "La vue " .$ctr->modele->getPageName()." spécifiée ne correspond pas au nom : "
				. $ctr->modele->page['name']
				. " ";
		}else{
			echo "La vue correspondante de la page : "
				. $ctr->modele->getPageName()
				. " n'existe pas ..."
				." Veuillez la créer dans le répertoire CORE correspondant !";
		}
		
			/*ENFIN ON MET LE TOUT DANS UNE VARIABLE QUI SERA APPELLEE PAR LE TEMPLATE*/
		$this->block_body = ob_get_contents();
		
		ob_end_clean();
		
		/*END 	*	*	*	*	*	*	*	*	*/
		
		
		/*START - Chargement, dans le tampon de sortie, du template	*	*/
		
		ob_start();
		
		$fichier_template = TEMPLATE_PATH . DIRECTORY_SEPARATOR . $ctr->modele->page['template'] . ".phtml";
		if(file_exists($fichier_template)){
			include TEMPLATE_PATH . DIRECTORY_SEPARATOR . $ctr->modele->page['template'] . ".phtml";
		}else{
			echo "Le template spécifiée : " . $ctr->modele->page['template'] . " n'existe pas ..."
				." Veuillez le créer dans le répertoire correspondant !";
		}

		$this->ecran = ob_get_contents();
		
		ob_end_clean();
		
		/*	*	*	*	*	*	*	*	*	*/
	}
	
}
