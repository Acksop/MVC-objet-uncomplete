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
 
 <div>
	<div ng-app="HelloWorldTodoApp">
	 <hr>
	 <h2>Todo</h2>
	    <div ng-controller="TodoListController as todoList">
	      <span>{{todoList.remaining()}} of {{todoList.todos.length}} remaining</span>
	      [ <a href="" ng-click="todoList.archive()">archive</a> ]
	      <ul class="unstyled">
	        <li ng-repeat="todo in todoList.todos">
	          <label class="checkbox">
	            <input type="checkbox" ng-model="todo.done">
	            <span class="done-{{todo.done}}">{{todo.text}}</span>
	          </label>
	        </li>
	      </ul>
	      <form ng-submit="todoList.addTodo()">
	        <input type="text" ng-model="todoList.todoText"  size="30"
	               placeholder="add new todo here">
	        <input class="btn-primary" type="submit" value="add">
	      </form>
	    </div>
		<hr>
		<div ng-controller="MainController">
			<ul class="menu">
        		<li><a href="#!/Accueil_view1">Angular view1</a></li>
        		<li><a href="#!/Accueil_view2">Angular view2</a></li>
        		<li><a href="#!/Accueil_view3">Angular view3</a></li>
      		</ul>
			<hr>
			<ng-view>Loading page template js</ng-view>
		</div>
	</div>
</div>
