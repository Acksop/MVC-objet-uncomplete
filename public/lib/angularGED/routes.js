'use strict';

var myApp = angular.module('GED-2AS', ["ngRoute"]);

myApp.config(function($routeProvider) {
    $routeProvider.when(
    	'/accueil1', 
    	{
    		templateUrl: 'lib/angularGED/partials/GED_accueil1.html', 
    		controller: ''
    	});
    $routeProvider.when(
    	'/accueil2', 
    	{
    		templateUrl: 'lib/angularGED/partials/GED_accueil2.html', 
    		controller: ''
    	});
    $routeProvider.when(
    	'/accueil3', 
    	{
    		templateUrl: 'lib/angularGED/partials/GED_accueil3.html', 
    		controller: ''
    	});
    $routeProvider.when(
        	'/admin1', 
        	{
        		templateUrl: 'lib/angularGED/partials/GED_admin1.html', 
        		controller: ''
        	});
    $routeProvider.when(
        	'/admin2', 
        	{
        		templateUrl: 'lib/angularGED/partials/GED_admin2.html', 
        		controller: ''
        	});
    $routeProvider.when(
        	'/admin3', 
        	{
        		templateUrl: 'lib/angularGED/partials/GED_admin3.html', 
        		controller: ''
        	});
    $routeProvider.when(
        	'/no-admin1', 
        	{
        		templateUrl: 'lib/angularGED/partials/GED_no-admin1.html', 
        		controller: ''
        	});
    $routeProvider.when(
        	'/no-admin2', 
        	{
        		templateUrl: 'lib/angularGED/partials/GED_no-admin2.html', 
        		controller: ''
        	});
    $routeProvider.when(
        	'/no-admin3', 
        	{
        		templateUrl: 'lib/angularGED/partials/GED_no-admin3.html', 
        		controller: ''
        	});
    $routeProvider.when(
        	'/404', 
        	{
        		templateUrl: 'lib/angularGED/partials/GED_404.html', 
        		controller: ''
        	});
    $routeProvider.when(
        	'/', 
        	{
        		templateUrl: 'lib/angularGED/partials/GED_blank.html', 
        		controller: ''
        	});
    $routeProvider.when(
        	'/tilt', 
        	{
        		templateUrl: '', 
        		controller: ''
        	});
    $routeProvider.otherwise(
        {
            redirectTo: '/404'
        });
});
