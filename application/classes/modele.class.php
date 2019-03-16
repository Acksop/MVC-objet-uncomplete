<?php
namespace Classes;

class Modele{
	
	protected $nomPage;
	protected $nomDevice;
	public $page;
	public $url;
	
	public function __construct( $app ){
		
		$this->page = $app->url->page;
		$this->url = $app->url;
		$this->nomPage = $app->url->page['name'];
		$this->nomDevice = $app->userAgent->device;
		
		$fichier_modele = MULTIDEVICE_MVC_PATH . DIRECTORY_SEPARATOR
				 . $app->userAgent->device . DIRECTORY_SEPARATOR
				 . "Modeles" . DIRECTORY_SEPARATOR
				 . $this->nomPage . ".php";
		
		$fichier_core_modele = MULTIDEVICE_MVC_PATH . DIRECTORY_SEPARATOR
		. "CORE" . DIRECTORY_SEPARATOR
		. "Modeles" . DIRECTORY_SEPARATOR
		. $this->nomPage . ".php";
		
		if( file_exists( $fichier_modele ) ){
			include $fichier_modele;
		}else if( file_exists( $fichier_core_modele ) ){
			include $fichier_core_modele;
		}else{

			$this->page['name'] = '404';
			$this->page['params'] = $app->url->page['params'];
		}
	}
	
	public function getPageName(){ return $this->nomPage; }
	public function getDeviceName(){ return $this->nomDevice; }
	public function getCoreName(){ return "CORE"; }
}
