<?php
namespace Classes\Database;

class example_object implements database_orm{

	// properties
	
	private $id;
	private $nom;
	private $nb_vendu;
		
	public function __construct(){
		$this->$title = '';
		$this->$date = '';
		$this->$text = '';
		$this->bdd = new \Classes\Database();
		return $this;
		
	}
	
	public function __construct($tab){
		return receiveDataFromArray($tab);
	}
	
	// getters
	
	public function get_id(){ return $this->id; }
	public function get_nom(){ return $this->nom; }
	public function get_nb_vendu(){ return $this->nb_vendu; }
	
	// setters
	
	public function set_id($value){ $this->id = $value; }
	public function set_nom($value){ $this->nom = $value; }
	public function set_nb_vendu($value){ $this->nb_vendu = $value; }
	
	// methods
	
	public function properties(){ return get_object_vars($this); }
	public function properties_names(){ return array_keys(get_object_vars($this)); }
	public function to_string() { return "id : $this->id, nom : $this->nom, nb_vendu : $this->nb_vendu"; }
	
	function createDataIntoDataBase(){
		//entity need to be fullfilled to be created
		$database = new Classes\Database\Factory();
		return $database->create($this);
	}
	function readDataFromDataBase(){
		$database = new Classes\Database\Factory();
		//entity need an id to get read
		return $database->read($this);
		
	}
	function updateDataInDataBase(){
		$database = new Classes\Database\Factory();
		//entity need to be fullfilled to be updated
		return $database->update($this);
		
	}
	function deleteDataOnDataBase(){
		$database = new Classes\Database\Factory();
		//entity need an id to get deleted
		return $database->delete($this);
		
	}
	function searchDataOnDataBase($whereClause){
		$database = new Classes\Database\Factory();
		//entity need an id to get read
		return $database->create($this,$whereClause);
		
	}
	
	function receiveDataFromArray($properties){
		// initialiser les propriétés de l'objet avec les valeurs
		$index = 0;
		foreach ($properties as $key => $value) {
			$method = "set_".$key;
			$this->$method($values[$index ++]);
		}
		return $this;
	}
}