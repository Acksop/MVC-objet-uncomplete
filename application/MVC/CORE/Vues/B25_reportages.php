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
echo <<<EOD

<script src="js/modernizr-custom.js"></script>
<!-- SVG symbol used for navigation arrows -->
		<svg class="hidden">
			<defs>
				<symbol id="icon-arrow" viewBox="0 0 39 51.43">
					<title>Arrow Left</title>
					<polygon points="7 25.71 36 45.71 36 26.08 36 5.71 7 25.71" stroke-miterlimit="10" stroke-width="6"/><line x1="3" y1="5.71" x2="3" y2="45.71" fill="none" stroke-miterlimit="10" stroke-width="6"/>
				</symbol>
			</defs>
		</svg>
			<div class="pages">
				<div class="page page--current"><!-- intro page -->
					<blockquote class="quote">
						<p>A good programmer say hello and put both AJAX here. </p>
						<footer>Emmanuel ROY</footer>
					</blockquote>
				</div><!-- /page -->
				<div class="page">
					<blockquote class="quote">
						<p>A good programmer is someone who always looks both ways before crossing a one-way street. </p>
						<footer>Doug Linder</footer>
					</blockquote>
				</div>
			</div><!-- /pages -->
			<nav class="pagenav">
				<button class="pagenav__button pagenav__button--top" aria-label="Navigate top"><svg class="icon icon--rtop"><use xlink:href="#icon-arrow"></use></svg></button>
				<button class="pagenav__button pagenav__button--left" aria-label="Navigate left"><svg class="icon"><use xlink:href="#icon-arrow"></use></svg></button>
				<button class="pagenav__button pagenav__button--right" aria-label="Navigate right"><svg class="icon icon--rright"><use xlink:href="#icon-arrow"></use></svg></button>
				<button class="pagenav__button pagenav__button--bottom" aria-label="Navigate bottom"><svg class="icon icon--rbottom"><use xlink:href="#icon-arrow"></use></svg></button>
				<button class="pagenav__button pagenav__button--cornertopleft" aria-label="Navigate top left"><svg class="icon icon--rtopleft"><use xlink:href="#icon-arrow"></use></svg></button>
				<button class="pagenav__button pagenav__button--cornertopright" aria-label="Navigate top right"><svg class="icon icon--rtopright"><use xlink:href="#icon-arrow"></use></svg></button>
				<button class="pagenav__button pagenav__button--cornerbottomleft" aria-label="Navigate bottom left"><svg class="icon icon--rbottomleft"><use xlink:href="#icon-arrow"></use></svg></button>
				<button class="pagenav__button pagenav__button--cornerbottomright" aria-label="Navigate bottom right"><svg class="icon icon--rbottomright"><use xlink:href="#icon-arrow"></use></svg></button>
			</nav>
EOD;

