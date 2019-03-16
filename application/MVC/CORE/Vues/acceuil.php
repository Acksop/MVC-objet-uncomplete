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


for($i = 5 ; $i > 0 ; --$i){
	include dirname(__FILE__) . DIRECTORY_SEPARATOR .
			"_blocks" . DIRECTORY_SEPARATOR .
			$this->page['name'] . DIRECTORY_SEPARATOR .
			"article" . $i . ".phtml";
} 
