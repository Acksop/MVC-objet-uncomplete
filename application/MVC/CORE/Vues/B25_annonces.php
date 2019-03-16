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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
      <!-- CSS code from Bootply.com editor -->
        
<style type="text/css">
            /*
A custom Bootstrap 3.3 theme from http://bootply.com
This CSS code should follow the 'bootstrap.css'
in your HTML file.

license: MIT
author: bootply.com
*/

body {
 padding-top:70px;
}

.productsrow {
 -moz-column-width: 18em;
 -webkit-column-width: 18em;
 -moz-column-gap: 1em;
 -webkit-column-gap: 1em;
}
  
.menu-category {
 display: inline-block;
 margin-bottom:  0.25rem;
 padding:  1rem;
 width:  100%; 
}

.product-image {
 max-width: 100%;
}

.product {
 padding-top:22px;  
}

.btn-product {
 background-color:#222;
 color:#eee;
 border-radius:0;
}

.yellow {
 color:yellow;
 text-shadow:#ccc 1px 1px 0;
}

/* end custom CSS */
        </style>
		
<div class="container">
    <div class="col-md-12">
        <div class="container">
                <div class="product col-sm-6">
                  	<a href="#"><img class="img-responsive" src="/img/B25/feeracine_1.jpg">
						<i class="btn btn-product fa fa-star"></i>
				  	</a>
					<hr>
                    <h2>Fée et Racine - tome 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.</p>
                    <hr>
                  	<h2 class="text-right">$39</h2>
                    <button class="btn btn-primary btn-lg ">Add to Cart</button>
                    <hr>
                   
                    
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#reviews">Commentaires</a></li>
                        <li><a data-toggle="tab" href="#details">Details</a></li>
                        <li><a data-toggle="tab" href="#sizing">Formats</a></li>
                    </ul>
                  
                  	<div class="tab-content">
                      <div class="tab-pane active" id="reviews">
                      
                        <h4>Buyer Reviews</h4>
                        <ul class="list-unstyled">
                          <li class="clearfix">(Mike R.) I bought this last month before a.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                          <li class="clearfix">(Karen) The size of this jacket was a little larger.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                          <li class="clearfix">(CAS) I love this jacket. I purchased this as part..  <i class="fa fa-star fa-2x yellow pull-right"></i><i class="fa fa-star fa-2x yellow pull-right"></i></li>
                          <li class="clearfix">(William D.) Great value with cool style. If you want.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                        </ul>
                      
                      </div>
                      <div class="tab-pane" id="details"><h4>Product Information</h4></div>
                      <div class="tab-pane" id="sizing"><h4>Size Chart</h4></div>
                     </div>
                  
                    
                </div>
                <div class="col-sm-6">
                    <div class="productsrow">
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Illustration</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/img/VDD/intro-10.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Belt<span class="badge">£28</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Illustration</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/img/VDD/intro-4.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Dark Blue Jeans<span class="badge">$80</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Illustration</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/img/VDD/intro-5.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Light Grean Chinos<span class="badge">$59</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Illustration</div>
                            <div class="div-image">
                                <img class="product-image menu-item list-group-item" src="/img/VDD/intro-7.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Denim Jacket<span class="badge">$56</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Illustration</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/img/VDD/intro-4.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Socks<span class="badge">$56</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Illustration</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/img/VDD/intro-11.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Brown Belt<span class="badge">£18</span></a>

                        </div>
                    </div>
                </div>
            <!--/row-->
        </div>
        <!--/container-->
    </div>
</div>

<hr>
		
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
EOD;
