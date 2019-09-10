<?php
namespace Classes\Database;
	
// L'extention pdo est utilisée pour la gestion des requêtes mysql

class Setup
{
	private $_connection;

    // crée la chaine de connexion
    public function _load() 
    {
    	$options = array(
	        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	    );
	    try{
	       $lienBDD = new PDO(BD_PDO_DSN, BD_USER, BD_PASS, $options);
	    }catch(PDOException $e){
	        die("Erreur de connection à la base de données");
	    }
	    $this->_connection = $lienBDD;
    }
    
    // supprime la chaine de connexion
    public function _close()
    {
    	$this->_connection = null;
    }

    public function get_connection(){
    	return $this->_connection;
    }
    
}