<?php

namespace Classes\Database;
use Classes\Database\Setup;

// liste des actions possibles
define('ACTION_SEARCH', 'search');
define('ACTION_CREATE', 'create');
define('ACTION_READ', 'read');
define('ACTION_UPDATE', 'update');
define('ACTION_DELETE', 'delete');
define('ACTION_SELECT', 'select');

class Factory
{
	private $_database;
	private $_object;

	public function __construct()
	{
		$this->_database = new Setup();
		$this->_database->load();
	}

	public function search($object, $criteria)
	{	
		$this->_object = $object;
		$query = $this->_generate_query(ACTION_SEARCH, $criteria);
		return $this->_execute_query($query, ACTION_SEARCH);
	}

	public function create($object)
	{
		$this->_object = $object;
		$query = $this->_generate_query(ACTION_CREATE, null);
		return $this->_execute_query($query, ACTION_CREATE);
	}

	public function read($object)
	{
		$this->_object = $object;
		$query = $this->_generate_query(ACTION_READ, null);
		return $this->_execute_query($query, ACTION_READ);
	}

	public function update($object)
	{
		$this->_object = $object;
		$query = $this->_generate_query(ACTION_UPDATE, null);
		$this->_execute_query($query, ACTION_UPDATE);
	}

	public function delete($object)
	{
		$this->_object = $object;
		$query = $this->_generate_query(ACTION_DELETE, null);
		$this->_execute_query($query, ACTION_DELETE);
	}
	
	public function select($object,$whereClause)
	{
		$this->_object = $object;
		$query = $this->_generate_query(ACTION_SELECT, $whereClause);
		$this->_execute_query($query, ACTION_SELECT);
	}

	/* 
		créer la requête en fonction de l'entité (modèle), des propriétés, 
		de l'objet et du type de transaction
	*/
	private function _generate_query($action, $criteria)
	{
		/*
			récupérer le nom de la classe de l'objet,
			supprimer le namespace,
			convertir le nom en minuscule
		*/
		$entity = strtolower(end(explode('\\',get_class($this->_object))));

		$attributes = ""; // liste des colonnes
	
		// lister les propriétés de l'objet
		$properties = $this->_object->properties();
	
		// lister le nom des propriétés
		$properties_names = $this->_object->properties_names();

		// récupérer le nombre d'attributs
		$nb_attribute = count($properties_names); 

		foreach ($properties_names as $key => $value) 
		{
			if($key != 'id')
				// créer la chaine de colonnes à partir des attributs
				$attributes .= ($key < $nb_attribute - 1) ? $value . ", " : $value;
		}
		
		$values = "";
		$settings = "";
		$where = "";
		$object_id = "";

		foreach ($properties as $key => $value) 
		{
			// récupérer l'id
			if($key == 'id') $object_id = $value;

			if($key != 'id')
			{
				// lister les valeurs
				$values .= ($key != end($properties_names)) 
				? "'".$value."', " : "'".$value."'";
				
				// lister les assignations
				$settings .= ($key != end($properties_names)) 
				? $key."='".$value."', " : $key."='".$value."'";
				
				// lister les éléments de la clause WHERE
				$where .= ($key != end($properties_names)) 
				? $key." LIKE '%".$criteria."%' OR " : $key." LIKE '%".$criteria."%' ";
			}
		}

		// construire la requête en fonction de l'action
		switch ($action) 
		{
			case ACTION_CREATE:
				return 	"INSERT INTO $entity ($attributes) VALUES ($values) ";
				break;
			
			case ACTION_READ:
				return 	"SELECT * FROM $entity WHERE id = '$object_id' ";
				break; 			

			case ACTION_UPDATE:
				return 	"UPDATE $entity SET $settings WHERE id = '$object_id' ";
				break; 	

			case ACTION_DELETE:
				return 	"DELETE FROM $entity WHERE id = $object_id ";
				break;

			case ACTION_SEARCH:
				return 	"SELECT * FROM $entity WHERE $where ";
				break;
				
			case ACTION_SELECT:
				return 	"SELECT * FROM $entity WHERE $criteria ";
				break;

			default:
				return "";
				break;
		}
	}

	/* 
		exécuter la requête, fermer la connection et 
		retourner l'id du nouvel enregistrement (si insert)
	*/
	private function _execute_query($query, $action)
	{
		// récupérer la chaîne de connection
		$lienBdd = $this->_database->get_connection();
		$result = null;

		if ($succes = $lienBdd->query($query)) 
		{
			
				$result = $this->_get_result($succes, $action);
		} 
		else 
		{
		    echo "Error: " . $query . "<br>";
		}	

		$this->_database->close();
		return $result;
	}

	private function _get_result($result, $action)
	{ 
		// lister le nom des propriétés
		$properties_names = $this->_object->properties_names();

		// récupérer le nombre d'attributs
		$nb_attribute = count($properties_names); 

		$list = array();
	    while($row = $result->fetch_assoc()) 
	    {	
			$object = null;
	    	// récupérer la valeur des champs
	    	$values = array(); 
	    	$index = 0;
	    	foreach ($row as $key => $value) 
	    	{
	    		array_push($values, $value);

	    		if($index ++ == $nb_attribute-1) 
	    		{
	    			$index = 0;
	    			$object = $this->_set_object($values);
	    		}
	    	}
	    			array_push($list, $object);

	    }
		//mysqli_free_result($result);
		
		if($action == ACTION_READ)
			// retourner l'objet
			return $object;
		else 
			return $list;
	}

	private function _set_object($values)
	{
		// identifier le nom de la classe de l'entity courante
		$class = get_class($this->_object);
		
		// intancier un nouvel objet
		$new = new $class(); 
			
		// lister les propriétés de l'objet
		$properties = $new->properties();

		// initialiser les propriétés de l'objet avec les valeurs
		$index = 0;
		foreach ($properties as $key => $value) {
			$method = "set_".$key;
			$new->$method($values[$index ++]);
		}

		return $new;
	}
}

?>

