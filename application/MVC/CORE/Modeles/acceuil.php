<?php 

/**
 * MODELE STRUCTUREL INITIALISATEUR
 *
 * Nom Fichier: Accueil
 * Auteur:	acksop <acksop@yahoo.fr>
 *
 *
 * Description developpeur:
 * 
 * C'est dans cette partie que l'on INSTANCIE LES VARIABLES qui seront appelées
 *  par la vue et son template (theme) ce qui créé de ce fait une instanciation
 *   des variables,
 *   
 *  <!> des variables communes à toutes les pages du site.
 *
 *
 *
 * Description utilisateur:
 *
 *
 *
 * 
 */

$this->page['name'] = 'acceuil';
$this->page['template'] = 'standart';

$this->page['title'] = 'Accueil MVC en (Acksop -- PHP-Avancé)  ---- Human Brain ';
$this->page['description'] = "adbracadadlabla - A New Version With-out IP-Formation & Evolutis - We\'re All Lovin\'";

if(isset($app->url->page['slashParams']['WYMD'])){
	$handler = $app->url->page['slashParams']['WYMD'];
}else{
	$handler = 'show';
}
if(isset($app->url->page['slashParams']['wikini'])){
	$handlerWikini = $handler;
}else{
	$handlerWikini = 'show';
}
if(isset($app->url->page['slashParams']['markdown'])){
	$handlerMarkdown = $handler;
}else{
	$handlerMarkdown = 'show';
}
if(isset($app->url->page['slashParams']['yaml'])){
	$handlerYaml = $handler;
}else{
	$handlerYaml = 'show';
}
$this->page['Wikinitext'] = new wmdCoreFormatter('example','wikini',$handlerWikini);
$this->page['MarkDowntext'] = new wmdCoreFormatter('example','markdown',$handlerMarkdown);
$this->page['YAMLtext'] = new wmdCoreFormatter('example','yaml',$handlerYaml);
