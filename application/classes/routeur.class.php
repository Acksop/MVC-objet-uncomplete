<?php

/**
 *  Cette classe permettra d'ajouter des actions aux controlleurs
 *  qui ne se chargeront que si l'url correspond a un pattern 
 *  prédéfini calqué sur les paramètres d'url
 *  $page['type']
 *  
 *  pourrait être utilisé dans le cas ou les page['type'][?]
 *  contiennent des variables numeriques
 *  nécessaires aux recherches en BDD,
 *  
 *  sert pour relier des appels de controlleurs et de modeles
 *  
 *  
 *  
 *  exemple: 
 *  Array
 *  (
 *   [0] => categorie ou 110
 *   [1] => type ou 115
 *   [2] => date ou 10-09-2016
 *   [3] => horaire ou 10-55
 *  )
 *  
 *  
 *   
 * @author acksop
 *
 */


class Routeur
{
	public $pattern;
	public $route;
	public $params;
	
	public function __construct()
	{
		$this->pattern = Array();
		$this->pattern['default'] = '#(.?)#';
		
		$this->route = Array();
		$this->route['default'] = 'show';
		
		return;
	}
	
	public function definePattern($label,$mypattern,$myroute)
	{	
		$this->pattern[$label] = $mypattern;
		$this->route[$label] = $myroute;
		
		return;
	}
	
	public function renderPattern($thing,$label)
	{

		$this->params[$label] = Array();
		
		preg_match( $this->pattern[$label], $thing, $matches );
		
		foreach($matches as $match){
			$this->params[$label][] = $match;
		}

		return;
	}
	
}