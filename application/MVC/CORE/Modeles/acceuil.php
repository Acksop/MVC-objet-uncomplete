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



//WYMD DEFAULT
/*Tous les WYMD de la page a afficher*/
$handler = 'show';
$this->page['Wikinitext'] = new wmdCoreFormatter('example','wikini',$handler);
$this->page['MarkDowntext'] = new wmdCoreFormatter('example','markdown',$handler);
$this->page['YAMLtext'] = new wmdCoreFormatter('example','yaml',$handler);

//WYMD ACTIFS
/*Le formateur pour les WYMD actifs*/
if(isset($app->url->page['slashParams']['WYMD'])){
	$handler = $app->url->page['slashParams']['WYMD'];
}else{
	$handler = 'show';
}
/*Les handlers des WYMD actifs*/
if(isset($app->url->page['slashParams']['wikini'])){
	$handlerWikini = $handler;
	$this->page['Wikinitext'] = new wmdCoreFormatter($app->url->page['slashParams']['wikini'],'wikini',$handlerWikini);
}

if(isset($app->url->page['slashParams']['markdown'])){
	$handlerMarkdown = $handler;
	$this->page['MarkDowntext'] = new wmdCoreFormatter($app->url->page['slashParams']['markdown'],'markdown',$handlerMarkdown);
}

if(isset($app->url->page['slashParams']['yaml'])){
	$handlerYaml = $handler;
	$this->page['YAMLtext'] = new wmdCoreFormatter($app->url->page['slashParams']['yaml'],'yaml',$handlerYaml);
}


