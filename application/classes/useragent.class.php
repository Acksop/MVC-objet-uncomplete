<?php
namespace Classes;

/*
 * une alternative pourrait être d'utiliser la methode getbrowser() de php7.0
 * ou de son alternative en version 2.0 de 2014 par Jonathan Stoppani
 *  https://github.com/GaretJax/phpbrowscap
 *
 **/


class UserAgent
{
	public $device;
	public $orientation;
	public $information;

	public function __construct(){
		/*if (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']))
			return true;
	
		if (isset ($_SERVER['HTTP_ACCEPT']))
		{
			$accept = strtolower($_SERVER['HTTP_ACCEPT']);
			if (strpos($accept, 'wap') !== false)
				return true;
		}*/
		
		if ( isset($_SERVER['HTTP_USER_AGENT']) )
		{
			/*Test des useragents-mobiles en fonction d'un fichier de collecte XML crée pour un module firefox*/
			$this->device = "CORE";
				
			if (strpos ($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false)
				$this->device = "Mobile";
			
			$userAgent = simplexml_load_file( dirname(__FILE__) 
					. '/userAgent/useragentswitcher-v2.0.xml' , "SimpleXMLElement" , LIBXML_NOCDATA );
			foreach( $userAgent->xpath("/useragentswitcher/folder[@description='Mobile Devices']/folder[@description='WAP Phones']/useragent") as $userAgentNode){
			    // Récupération des attributs comme indices d'éléments
			    if( (string) $userAgentNode['useragent'] == $_SERVER['HTTP_USER_AGENT'] ) { 
			        $this->device = "WAP";
			    }
			    
			}
			foreach( $userAgent->xpath("/useragentswitcher/folder[@description='Mobile Devices']/folder[@description='Browsers']/useragent") as $userAgentNode){
			    // Récupération des attributs comme indices d'éléments
			    if( (string) $userAgentNode['useragent'] == $_SERVER['HTTP_USER_AGENT'] ) { 
			        $this->device = "Mobile";
			    }
			    
			}
			foreach( $userAgent->xpath("/useragentswitcher/folder[@description='Mobile Devices']/folder[@description='Devices']/folder/useragent") as $userAgentNode){
			    // Récupération des attributs comme indices d'éléments
			    if( (string) $userAgentNode['useragent'] == $_SERVER['HTTP_USER_AGENT'] ) { 
			        $this->device = "Tablet";
			    }
			    
			}
			foreach( $userAgent->xpath("/useragentswitcher/folder/folder[@description='Legacy Browsers']/useragent") as $userAgentNode){
			    // Récupération des attributs comme indices d'éléments
			    if( (string) $userAgentNode['useragent'] == $_SERVER['HTTP_USER_AGENT'] ) { 
			        $this->device = "Poste";
			    }
			    
			}
			foreach( $userAgent->xpath("/useragentswitcher/folder/folder[@description='Console Browsers']/useragent") as $mobileUserAgentNode){
			    // Récupération des attributs comme indices d'éléments
			    if( (string) $mobileUserAgentNode['useragent'] == $_SERVER['HTTP_USER_AGENT'] ) { 
			        $this->device = "Console";
			    }
			    
			}
			
			
			
		}else{
	
			$this->device = "CORE";
			
		}
		
		if($this->device == "CORE"){
			$this->addNewUserAgent();
			$this->orientionOfScreen();
		}else if($this->device == "WAP" ){
			$this->orientation = "WAP-smallScreen";
		}else{
			$this->orientionOfScreen();
		}
		
		$this->collapseDynamicInformationOnDevice();
		
	}

	private function addNewUserAgent(){
		//AddNode yo a Spécific xml
			
		$xml = new \DOMDocument();
		$xml->Load(dirname(__FILE__)
					. '/userAgent/new_core_useragentswitcher.xml');
		$newUserAgentElement = $xml->documentElement;
		$xpath = new \DOMXpath($xml);
		$elements = $xpath->query("/newuseragent/useragent");
			
		$flagFind = FALSE;
			
		if (!is_null($elements)) {
			foreach ($elements as $element) {
				$nodes = $element->childNodes;
				foreach ($nodes as $node) {
					if( $node->nodeValue == $_SERVER['HTTP_USER_AGENT'] ){
						$flagFind = TRUE;
					}
				}
			}
		}
			
		if(!$flagFind){
			$userAgentNode = new \DOMNode();
			$userAgentNode = $xml->createElement("useragent");
			$userAgentNode_TN = $xml->createTextNode($_SERVER['HTTP_USER_AGENT']);
			$userAgentNode->appendChild($userAgentNode_TN);
			$newUserAgentElement->appendChild($userAgentNode);
		}
		
		$xml->save(dirname(__FILE__)
					. '/userAgent/new_core_useragentswitcher.xml');
		
	}
	
	private function orientionOfScreen(){
		if(isset($_COOKIE['Display'])){
			$this->orientation = $_COOKIE['Display'];
		}else{
			$this->orientation = "Paysage";
		}
	}
	
	private function collapseDynamicInformationOnDevice(){
		$this->information = "";
		return;
	}
}


