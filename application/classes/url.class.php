<?php
namespace Classes;

class Url
{
	const PHP_ACTION_VARIABLE ='%20--%20';
	
	public $page;
	public $compteurParams;
	public $url;
	
	public function __construct()
	{

		$this->page['name'] = '';
		
		$this->page['action'] = '';
		
		$this->page['getParams'] = array();
		$this->page['slashParams'] = array();
		$this->page['multipleGetParams'] = array();
		$this->page['appParams'] = array();
		$this->page['idParams'] = array();
		
		$url = $_SERVER['REQUEST_URI'];
		$urlTrim = trim( $url , '/' );
		$urlParts = explode('/' , $urlTrim );
		$urlParts = explode('?' , $urlParts[0] );
		
		//Début -------------------------------------Récupération du nom de la page
		
		($urlParts[0] == 'CV_Mm' ||
		  $urlParts[0] == 'index' ||
		   $urlParts[0] == '' ) ? $this->page['name']='home' : $this->page['name']=$urlParts[0];
		
	
		//Début -------------------------------------Récupération de l'action
		$action_PhpVariables = explode( self::PHP_ACTION_VARIABLE,$urlTrim );
		if(isset($action_PhpVariables[1])){
			$this->page['action'] = $action_PhpVariables[1];
			$url = $action_PhpVariables[0];
		}
		
		
		$this->page['slashParams'] = self::get_slashParam_from_url($url);

		$this->page['getParams'] = self::get_queryParam_from_url($url);
		
		$this->page['multipleGetParams'] = self::get_multipleQueryParam_from_url($url);
		
		$this->page['appParams'] = self::get_appParam_from_url($url);
		
		$this->page['idParams'] = self::get_slashID_from_url($url);
	
		//verification de l'existence de la page dans les controlleurs
		
		$pageFile = MULTIDEVICE_MVC_PATH . DIRECTORY_SEPARATOR
					 . "CORE" . DIRECTORY_SEPARATOR
					 . "Controlleurs" . DIRECTORY_SEPARATOR
					 . $this->page['name'] . ".php";
		
		
		if(!file_exists($pageFile)){
			$this->page['name'] = '404';
		}
	
	}
	/**
	 *		IMPLEMENTATION 	DE BASE			(par les SLASHS)
	 *
	 *	EXEMPLE: www.domain.tld/page/param1/value1/param2/value2
	 *
	 *
	 **/
	private function get_slashParam_from_url($url){
	
		$page['slashParams'] = array();
	
		$urlTrim = trim( $url , '/' );
		$urlParts = explode('/' , $urlTrim );
	
		array_shift($urlParts);
	
		$nbFullUrlParts = count($urlParts);
		$first_newSlashVar_Parts = array();
		$it_slash = 0;
	
		foreach($urlParts as $value){
			$first_newSlashVar_Parts[] = $value;
		}
	
		for($i=0 ; $i < ($nbFullUrlParts/2) ; $i++){
			$key = $i*2;
			$key = $first_newSlashVar_Parts[$key];
			if(isset($first_newSlashVar_Parts[($i*2+1)])){
				$value = $first_newSlashVar_Parts[($i*2+1)];
			}else{
				$value = '';
			}
			$page['slashParams'][$key] = $value;
			$it_slash++;
		}
			
		return $page['slashParams'];
	
	}
	/**
	 *			IMPLEMENTATION
	 *	de l'ancienne manière de passer des paramètres dans
	 *			 l'urlParts[0]
	 *
	 *	EXEMPLE: www.domain.tld/page?param1=value1&param2=value2
	 *
	 **/
	private function get_queryParam_from_url($url){
	
		$page['getParams'] = array();
	
		$fullUrlTrim = trim( $url , '/' );
		$fullUrlParts = explode('/' , $fullUrlTrim );
	
		$oldGet_PhpVariables = explode("?",$fullUrlParts[0]);
	
		$tempParams = array();
		if(isset($oldGet_PhpVariables[1])){
			$oldGetVar_Parts = explode("&",$oldGet_PhpVariables[1]);
			$allOldGetVar_Parts = array();
			$first_oldGetVar_Parts = array();
			foreach($oldGetVar_Parts as $value){
				$allOldGetVar_Parts[] = explode("=",$value);
			}
			foreach($allOldGetVar_Parts as $value){
				foreach($value as $values){
					$first_oldGetVar_Parts[] = $values;
				}
			}
			$tempParams = Url::params_rewrite($first_oldGetVar_Parts);
				
			$page['getParams'] = $tempParams[1];
				
	
		}
	
		return $page['getParams'];
	
	}
	/**
	 *			IMPLEMENTATION
	 *	de l'ancienne manière de passer des paramètres dans
	 *			 l'urlParts[N][N+1]
	 *
	 *	Cette implémentation permet d'utiliser un slash
	 *	entre différentes catégories de variables de type
	 *	GET séparée par un SLASH de facon itératives
	 *	Exemple: new.emmanuelroy.name/contact?page=2&zone=B25/catégorie1?new=3&get=true/categorie2
	 *
	 **/
	private function get_multipleQueryParam_from_url($url){
	
		$page['multipleGetParams'] = array();
	
		$fullUrlTrim = trim( $url , '/' );
		$fullUrlParts = explode('/' , $fullUrlTrim );
		$it_get = 0;
		foreach($fullUrlParts as $value){
	
			$next_oldGet_PhpVariables = explode("?",$value);
			$tempParams = array();
			if(isset($next_oldGet_PhpVariables[1])){
				$next_GetVar_Parts = explode("&",$next_oldGet_PhpVariables[1]);
				$next_allOldGetVar_Parts = array();
				$next_oldGetVar_Parts = array();
				foreach($next_GetVar_Parts as $values){
					$next_allOldGetVar_Parts[] = explode("=",$values);
				}
				foreach($next_allOldGetVar_Parts as $value){
					foreach($value as $values){
						$next_oldGetVar_Parts[] = $values;
					}
				}
	
				$tempParams = Url::params_rewrite($next_oldGetVar_Parts);
	
				$page['multipleGetParams'][$it_get]['name'] = $next_oldGet_PhpVariables[0];
				$page['multipleGetParams'][$it_get]['params'] = $tempParams[1];
	
				++$it_get;
					
			}
	
		}
	
		return $page['multipleGetParams'];
	}
	/**
	 *		IMPLEMENTATION SPÉCIFIQUE POUR
	 *	 récuperer le nom d'une application et son action
	 *	 ainsi que les variable nommé dans les slash de l'url
	 *
	 *  EXEMPLE:
	 *  www.domain.tld/param1/value1/param2/value2/application --> action
	 * 
	 * 																
	 **/
	
	private function get_appParam_from_url($url){
	
		$page['appParams'] = array();
	
		$it_app = 0;
		$fullUrlTrim = trim( $url , '/' );
		$fullUrlParts = explode('/' , $fullUrlTrim );
		$lastUrlParts = array_pop($fullUrlParts);
		$lastPartUrl = explode(self::PHP_ACTION_VARIABLE,$lastUrlParts);
		$page['appParams']['appName'] = $lastPartUrl[0];
		if(isset($lastPartUrl[1])){
			$page['appParams']['appAction'] = $lastPartUrl[1];
		}else{
			$page['appParams']['appAction'] = 'default';
		}
		$nbFullUrlParts = count($fullUrlParts);
		$first_itxSlashVar_Parts = array();
	
	
		foreach($fullUrlParts as $value){
			$first_itxSlashVar_Parts[] = $value;
		}
		for($i=0 ; $i< ($nbFullUrlParts/2) ; $i++){
			$key = $i*2;
			$key = $first_itxSlashVar_Parts[$key];
			$value = ($i*2)+1 ;
			if(isset($first_itxSlashVar_Parts[$value])){
				$value = $first_itxSlashVar_Parts[$value];
			}else{
				$value = '';
			}
			$page['appParams'][$key] = $value;
			$it_app++;
		}
	
		return $page['appParams'];
	
	}
	/**
	 *		IMPLEMENTATION SPÉCIFIQUE POUR
	 *	 récuperer les identifiants existants entre chaque
	 *	 slash de l'url
	 *
	 *  EXEMPLE:
	 *  www.domain.tld/categorie/type1/type2/type3/article
	 * 
	 * 																
	 **/
	private function get_slashID_from_url($url){
	
		$page['idParams'] = array();
	
		$fullUrlTrim = trim( $url , '/' );
		$typeUrlParts = explode('/' , $fullUrlTrim );
		$lastPartUrl = array_pop($typeUrlParts);
		$lastPartUrl = explode(self::PHP_ACTION_VARIABLE,$lastPartUrl);
		$lastPartUrl = array_shift($lastPartUrl);
	
		array_push($typeUrlParts,$lastPartUrl);
	
		$page['idParams']['categorie'] = array();
		$page['idParams']['type'] = array();
		$page['idParams']['article'] = array();
	
		$categories = array();
	
		foreach($typeUrlParts as $value){
			$categories[] = $value;
		}
		if(isset($typeUrlParts[1])){
			$page['idParams']['categorie'] = array_shift($categories);
			$page['idParams']['article'] = array_pop($categories);
			$page['idParams']['type'] = $categories;
		}
	
		return $page['idParams'];
	}
	
	
	static function params_rewrite($listOfParams, $type){
	
		$page = array();
		$page['name'] = '';
		$page['params'] = array();
		
		//vérification du nombre de parametres: s'il n'existe pas autant de clé que
		// de valeurs on sort de la fonction et on renvoie une page d'erreur.
		$nbParams = count($listOfParams);
		if ( $nbParams%2 != 0 ) {
			$page['name'] = 'error';
			$page['params'] = array(type=>"misplaced or uncomprehensib' $type \$_GET Variables");
			return $page;
		}else if ( $listOfParams != 0 ){
			$values = array();
			$keys = array();
			foreach( $listOfParams as $key => $value ){
				if($key%2 != 0) {
					$values[] = $value;				
				} else {
					$keys[] = $value;
				}
			}
			$page['params'] = array_combine($keys, $values);
		}
		$arrayToReturn = array();
		$arrayToReturn[0] = $page['name'];
		$arrayToReturn[1] = $page['params'];
		return $arrayToReturn;
	}
	
	public static function getPageName(){
		return $this->page['name'];
	}
	
	public function __toString(){
	
		ob_start();
			print_r($this->page);
			$descriptionParamsPage = ob_get_contents();
		ob_end_clean();
		
        return "nom page : ".$this->page['name']."<br/>".
        	"description paramètres page : <br/><pre>".$descriptionParamsPage."</pre>";
        
	}
}
