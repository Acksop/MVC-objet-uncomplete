angular.module('HelloWorldTodoApp', ["ngRoute"])
      .controller('TodoListController', function() {
        var todoList = this;
        todoList.todos = [
          {text:'learn AngularJS', done:true},
          {text:'build an AngularJS app', done:false}];
     
        todoList.addTodo = function() {
          todoList.todos.push({text:todoList.todoText, done:false});
          todoList.todoText = '';
        };
     
        todoList.remaining = function() {
          var count = 0;
          angular.forEach(todoList.todos, function(todo) {
            count += todo.done ? 0 : 1;
          });
          return count;
        };
     
        todoList.archive = function() {
          var oldTodos = todoList.todos;
          todoList.todos = [];
          angular.forEach(oldTodos, function(todo) {
            if (!todo.done) todoList.todos.push(todo);
          });
        };
      })
     .config(function($routeProvider) {
		 $routeProvider
		 .when('/', {
	    		template: "<h1>London</h1><h3>London is the capital city of England.</h3><p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p><p>{{msg}}</p>",
	    	    controller : "londonCtrl"
	    	})
	     .when('/Accueil_view1', {
	    		templateUrl: 'lib/angularPitLeo/partials/exemplePitLeo_Accueil1.html', 
	    		controller: 'MyCtrl1'
	    	})
	     .when('/Accueil_view2', {
	    		templateUrl: 'lib/angularPitLeo/partials/exemplePitLeo_Accueil2.html', 
	    		controller: 'MyCtrl2'
	    	})
	     .when('/Accueil_view3', {
	    		templateUrl: 'lib/angularPitLeo/partials/exemplePitLeo_Accueil3.html'
	    	})
	     .when('/404', {
	    		templateUrl: 'lib/angularPitLeo/partials/exemplePitLeo_error_404.html', 
	    		controller: 'MyCtrl4'
	    	})
	     .otherwise({
	            redirectTo: '/404'
	        });
     })
     .controller('MainController', function($scope, $route, $routeParams, $location) {
    	 $scope.$route = $route;
    	 $scope.$location = $location;
    	 $scope.$routeParams = $routeParams;
     })
     .controller("londonCtrl", function ($scope) {
 	    $scope.msg = "I love London";
     })
     .controller("MyCtrl1" ,function ($scope) {
    	 $scope.helloNom = '';
    	 $scope.sendName = function(){
    			$scope.helloNom = "Hello from " + $scope.nom +" to everybody around me!";
    	 }
     })
     .controller("MyCtrl2" ,function ($scope) {
    	 $scope.monEntierFoisDeux = 0;
    	 $scope.calculer = function(){
    			$scope.monEntierFoisDeux =  parseInt($scope.monEntier)*2;
    	 }
     })
     .controller("MyCtrl4" ,function ($scope) {
    	 $scope.version = '0.1';
    	 $scope.versionAngular = '1.6.4';
     });


