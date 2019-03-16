'use strict';

myApp.controller("MyCtrl1" ,function ($scope, UtilSrvc) {
	$scope.sendName = function(){
		$scope.helloNom = UtilSrvc.helloWorld($scope.nom);
	}    
});

myApp.controller("MyCtrl2" ,function ($scope) {
	$scope.monEntierFoisDeux = 0;

	$scope.calculer = function(){
		$scope.monEntierFoisDeux =  parseInt($scope.monEntier)*2;
	}
});

// you may add more controllers below