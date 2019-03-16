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

<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet/less" type="text/css" href="/less/calendarB25_styles.less" />
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
		
<br /><br />
<div class="planner">
    <div class="calendar">
        <div class="calendar-header">
            <a class="btn btn-prev">
        <i class="icon-angle-left"></i>
            </a>
            <span>July</span>
            <a class="btn btn-next">
                <i class="icon-angle-right"></i>
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>SUN</th>
                    <th>MON</th>
                    <th>TUE</th>
                    <th>WED</th>
                    <th>THU</th>
                    <th>FRI</th>
                    <th>SAT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span>30</span></td>
                    <td><span>1</span></td>
                    <td><span class="active">2</span></td>
                    <td><span>3</span></td>
                    <td><span>4</span></td>
                    <td><span>5</span></td>
                    <td><span>6</span></td>
                </tr>
                <tr>
                    <td><span>7</span></td>
                    <td><span>8</span></td>
                    <td><span class="active">9</span></td>
                    <td><span>10</span></td>
                    <td><span>11</span></td>
                    <td><span>12</span></td>
                    <td><span>13</span></td>
                </tr>
                <tr>
                    <td><span class="active">14</span></td>
                    <td><span>15</span></td>
                    <td><span>16</span></td>
                    <td><span>17</span></td>
                    <td><span class="active">18</span></td>
                    <td><span>19</span></td>
                    <td><span>20</span></td>
                </tr>
                <tr>
                    <td><span>21</span></td>
                    <td><span>22</span></td>
                    <td><span>23</span></td>
                    <td><span>24</span></td>
                    <td><span>25</span></td>
                    <td><span>27</span></td>
                    <td><span>27</span></td>
                </tr>
                <tr>
                    <td><span>28</span></td>
                    <td><span>29</span></td>
                    <td><span>31</span></td>
                    <td><span>1</span></td>
                    <td><span>2</span></td>
                    <td><span>3</span></td>
                    <td><span>4</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="schedule">
            <ul class="tabs">
            <li class="tab active"><a href="#">Meetings</a></li>
            <li class="tab"><a href="#">Reminders</a></li>
            <li class="tab"><a href="#">Notes</a></li>
            </ul>
            
        <div class="tab-pane">
            <div class="schedule-list">
                
                <div class="schedule-item">
                    <div class="time">
                        <span>9</span>
                        <span>am</span>
                    </div>
                    <div class="description">
                        <div class="description-header">Brainstorm on User Stories</div>
                        <div class="description-content">
                            <p>Lorem Ipsum dolor sit amet.</p>
                            <ul class="contact-list">
                                <li class="contact">
                                    <a href="#"><img src="http://gravatar.com/avatar/8b1d44e3b2310823bd41d609003b70a9?s=80" alt="" /></a>
                                </li>
                                <li class="contact">
                                    <a href="#"><img src="http://gravatar.com/avatar/8b1d44e3b2310823bd41d609003b70a9?s=80" alt="" /></a>
                                </li>
                                <li class="contact add-contact">
                                    <a href="#"><i class="icon-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <div class="schedule-item free">
                    <div class="time">
                        <span>10</span>
                        <span>am</span>
                    </div>
                    <div class="description">
            <div class="description-header">No Schedule</div>
                        <div class="description-content">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
				
EOD;
