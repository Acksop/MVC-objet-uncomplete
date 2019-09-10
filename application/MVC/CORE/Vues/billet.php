<?php
/**
 * VUE STRUCTURELLE PRINCIPALE
*
* Nom Fichier: Accueil
* Auteur:	acksop <acksop@yahoo.fr>
*
*
* Description developpeur:
*
*C'est dans cette partie que l'on écrit la page centrale du body
* contenu entre le <header>l'en-tête HTML5 de la page</header>
* et le <footer>le pied de page HTML5</footer>
* qui sont normalement communes a toutes les pages
*
* Il est possible que cette partie soit traiter en AJAX afin que les chargements
* entre les pages soient plus fluides
*
* De mêmes une séparation entre différentes parties de la pages
* peuvent être mise en place en instanciant un routeur sur un dossiers local
* afin de clarifier par exemples différents chapitres de pages, ceci dans
* le cas ou la page serait plus longues que trois écrans standart
*
*
*
* Description utilisateur:
*
*
*
*
*
*
*/

include dirname(__FILE__) . DIRECTORY_SEPARATOR .
"_layout" . DIRECTORY_SEPARATOR .
$this->page['name'] . DIRECTORY_SEPARATOR .
"embed1.pcss";


class billet{

	public $page;
	public $ctr;
	
	public function __construct($ctr){
		$this->ctr = $ctr;
	}
	
	
public function article1(){
	
	$ctr = $this->ctr;
	
	include dirname(__FILE__) . DIRECTORY_SEPARATOR .
	"_blocks" . DIRECTORY_SEPARATOR .
	"acceuil" . DIRECTORY_SEPARATOR .
	"article1.phtml";
}
public function article2(){
	
	$ctr = $this->ctr;
	
	if(isset($this->ctr->modele->page['slashParams']['WYMD'])){
		$handler = $this->ctr->modele->page['slashParams']['WYMD'];
	}else{
		$handler = 'show';
	}
	$this->page['Wikinitext'] = new wmdCoreFormatter("example",'wikini',$handler);
	
	include dirname(__FILE__) . DIRECTORY_SEPARATOR .
	"_blocks" . DIRECTORY_SEPARATOR .
	"acceuil" . DIRECTORY_SEPARATOR .
	"article2.phtml";

	
}
public function article3(){
	
	$ctr = $this->ctr;
	
	include dirname(__FILE__) . DIRECTORY_SEPARATOR .
	"_blocks" . DIRECTORY_SEPARATOR .
	"acceuil" . DIRECTORY_SEPARATOR .
	"article3.phtml";
}
public function article4(){
	
	$ctr = $this->ctr;
	
	if(isset($this->ctr->modele->page['slashParams']['WYMD'])){
		$handler = $this->ctr->modele->page['slashParams']['WYMD'];
	}else{
		$handler = 'show';
	}
	$this->page['MarkDowntext'] = new wmdCoreFormatter("example",'markdown',$handler);
	
	include dirname(__FILE__) . DIRECTORY_SEPARATOR .
	"_blocks" . DIRECTORY_SEPARATOR .
	"acceuil" . DIRECTORY_SEPARATOR .
	"article4.phtml";
	
}
public function article5(){
	
	$ctr = $this->ctr;
	
	if(isset($this->ctr->modele->page['slashParams']['WYMD'])){
		$handler = $this->ctr->modele->page['slashParams']['WYMD'];
	}else{
		$handler = 'show';
	}
	$this->page['YAMLtext'] = new wmdCoreFormatter("example",'yaml',$handler);
	
	include dirname(__FILE__) . DIRECTORY_SEPARATOR .
	"_blocks" . DIRECTORY_SEPARATOR .
	"acceuil" . DIRECTORY_SEPARATOR .
	"article5.phtml";
	
	
}

}