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

<link rel="stylesheet" type="text/css" href="css/component-sinform.css" />
	<form id="theForm" class="simform" autocomplete="off">
		<div class="simform-inner">
			<ol class="questions">
				<li>
					<span><label for="q1">What's your favorite movie?</label></span>
					<input id="q1" name="q1" type="text"/>
				</li>
				<li>
					<span><label for="q2">Where do you live?</label></span>
					<input id="q2" name="q2" type="text"/>
				</li>
				<li>
					<span><label for="q3">What time do you got to work?</label></span>
					<input id="q3" name="q3" type="text"/>
				</li>
				<li>
					<span><label for="q4">How do you like your veggies?</label></span>
					<input id="q4" name="q4" type="text"/>
				</li>
				<li>
					<span><label for="q5">What book inspires you?</label></span>
					<input id="q5" name="q5" type="text"/>
				</li>
				<li>
					<span><label for="q6">What's your profession?</label></span>
					<input id="q6" name="q6" type="text"/>
				</li>
			</ol><!-- /questions -->
			<button class="submit" type="submit">Send answers</button>
			<div class="controls">
				<button class="next"></button>
				<div class="progress"></div>
				<span class="number">
					<span class="number-current"></span>
					<span class="number-total"></span>
				</span>
				<span class="error-message"></span>
			</div><!-- / controls -->
		</div><!-- /simform-inner -->
		<span class="final-message"></span>
	</form><!-- /simform -->	
<script src="js/stepsForm.js"></script>
<script>
	var theForm = document.getElementById( 'theForm' );

	new stepsForm( theForm, {
		onSubmit : function( form ) {
			// hide form
			classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

			/*
			form.submit()
			or
			AJAX request (maybe show loading indicator while we don't have an answer..)
			*/

			// let's just simulate something...
			var messageEl = theForm.querySelector( '.final-message' );
			messageEl.innerHTML = 'Thank you! We\'ll be in touch.';
			classie.addClass( messageEl, 'show' );
		}
	} );
</script>
EOD;
