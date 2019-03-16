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

<div class="row" style='position:relative;display:block;top:120px;'>
					<div class="one-half column">
						<p
							style='font-variant: small-caps; font-size: large; text-align: right;'>
							<b>BESANCON 25&nbsp;&nbsp;&nbsp;- le Ya-Ka-F&ocirc;-Kon</b>
						</p>
						<hr />
						<p style='text-align: justify; font-size: small;'>
							Cette Plate-Forme d'annuaire collaboratif s'adresse &agrave; tous
							les artistes et associations en mal de devenir ...<br />&Agrave;
							toutes celles et ceux qui se battent pour se faire
							conna&icirc;tre ou reconna&icirc;tre au sein de Besan&ccedil;on<br />Ici
							il y a la possiblit&eacute; de laisser un contact permettant de
							se faire appeler pour peu que l'on veuille bien <a
								href='index.php?page=inscription'>s'incrire</a>.<br />Car si
							certains peuvent essayer de passer par le systeme du bouche
							&agrave; oreille, il est quelques-fois plus simple de laisser des
							coordonn&eacute;es au milieu de toutes les autres, car cela
							permet de tisser des liens que l'on aurait p&ucirc; peu imaginer.<br />Il
							ne reste plus qu'alors &agrave; attendre que le bouleversement
							des mentalit&eacute;s s'op&egrave;re et qu'il devienne un effet
							boule de neige pour ceux qui auront bien voulu croire aux
							possibles donn&eacute;s par ces pages.<br />
						</p>
					</div>
					<div class="one-half column">
						<p
							style='font-variant: small-caps; font-size: large; text-align: right;'>
							<b>BESANCON 25&nbsp;&nbsp;&nbsp;- le Pourquoi du Comment ?!?</b>
						</p>
						<hr />
						<p style='text-align: justify; font-size: small;'>
							<span style='display: block; text-align: center;'><i>Pourquoi
									avoir fait cet annuaire ?</i></span>La premi&egrave;re et la
							moins couteuse de toutes les communications provient du web car,
							sur Internet, la culture du libre et du gratuit y est incrite
							depuis toujours dans les plus anciennes et charmantes
							m&eacute;moires de nos programmeurs. Aujourd'hui tout coute le
							moindre &euro;uros que la plupart des artistes n'ont la
							possibilit&eacute; de payer pour une communication qui ne leurs
							semblent pas famili&egrave;re ou n&eacute;cessaire. Cet annuaire
							est un lien gratuit pour toutes et ceux qui veulent avoir une
							place sur ce site.<br /> <br /> <span
								style='display: block; text-align: center;'><i>Comment
									participer ?</i></span>Il suffit de s'incrire via le bouton <a
								href='index.php?page=inscription'>Mon Compte</a> en haut du site
							puis de remplir vos noms, prenoms, pseudos, num&eacute;ro de
							t&eacute;l&eacute;phone, et adresse de courriel ainsi que la
							description de votre art pr&eacute;f&eacute;r&eacute; pour
							pourvoir appara&icirc;tre sur ce site. Attention tout compte
							mal-rempli ne sera pas valid&eacute; par l'administrateur...<br />
						</p>
					</div>
				</div>
				
EOD;
