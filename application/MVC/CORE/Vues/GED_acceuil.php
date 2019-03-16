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
 * De mêmes une séparations entre différentes parties de la pages 
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

 ?>
 <div class="title-header">
 BASICAL HOMEPAGE - Une gestion de documents Simplissime
 </div>
  <div class="col-md-12 menu-header">
    <div class="col-md-offset-3 col-md-9">
      <ul>
        <li><a href="#/accueil1">Site de 2AS</a></li>
        <li><a href="#/accueil2">Mentions légales 2AS</a></li>
        <li><a href="#/accueil3">Interface de connection 2AS</a></li>
      </ul>
    </div>
 </div>

<div ng-view></div>
  
  
