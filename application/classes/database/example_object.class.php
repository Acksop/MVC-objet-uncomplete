<?php
namespace Classes\Database;

class example_object implements database_orm{

	public $bdd;
	
	//this is the name of the SQL table
	private $table_label = "example";
	//this is the name of all column in the table
	private $ordered_label = array("article_name","timestamp","raw_html");
	//this is the values of column
	public $title;
	public $date;
	public $text;
		
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
	
	function createDataIntoDataBase($values){
		$sql = 'INSERT INTO ' . $this->table_label . '(';
		$i = 0;
		$values = \Classes\Database::sanityseUploadDataFromDataBase($values);
		foreach($ordered_label as $val){
			$sql .= $ordered_label; 
			++$i;
			if($i < sizeof($ordered_label)) $sql .= "," ;
		}
		$sql .=') VALUES (';
		foreach($values as $val){
			$sql .= "'" . $val[$i] . "'";
			++$i;
			if($i < sizeof($values)) $sql .= "," ;
		}
		$sql .=')';
		$result = $this->bdd->make_sql_request($sql);
		
		return $result;
		
	}
	
	function readDataFromDataBase($clause){
		
		$sql = 'SELECT * FROM' . $this->table_label . ' WHERE ' . $clause .')';
		$result = $this->bdd->make_sql_query($sql);
		
		return $result;
	}
	
	function updateDataInDataBase($values,$clause){
		
		$sql = 'UPDATE ' . $this->table_label . ' SET ';
		$i = 0;
		$values = \Classes\Database::sanityseUploadDataFromDataBase($values);
		foreach($values as $val){
			$sql .= $ordered_label[$i] . '=' . "'" . $val . "'";
			++$i;
			if($i < sizeof($values)) $sql .= "," ;
		}
		$sql .=' WHERE ' . $clause . ')';
		$result = $this->bdd->make_sql_request($sql);
		
		return $result;
		
	}
	
	function deleteDataOnDataBase($clause){
		
		$sql = 'DELETE FROM' . $this->table_label . ' WHERE ' . $clause .')';
		$result = $this->bdd->make_sql_request($sql);
		
		return $result;
	}
	
	function receiveDataFromArray($tab){
		$this->$title = $tab[0];
		$this->$date = $tab[1];
		$this->$text = $tab[2];
		return $this;
	}
}