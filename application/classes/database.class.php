<?php
namespace Classes;

class database {
	
	private static $bdd;
	
	private function connect(){
		$options = array(
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		);
		try{
	       $lienBDD = new PDO(BD_PDO_DSN, BD_USER, BD_PASS, $options);
	    }catch(PDOException $e){
	        die("Erreur de connection à la base de données");
	    }
	    return $lienBDD;
	}
	private function quit(){
		$this::$bdd = NULL;
		return;
	}
	
	public function __construct(){
		$this::$bdd = $this->connect();
	}
	
	function verify_SQLstructure_from_yaml();
	function update_SQLstructure();
	
	function create_Database($name);
	function create_table($data);
	function alter_table($data);
	function drop_table($data);

	function insert_value_from_sql($sql_path);
	function insert_value_from_csv_into_table($csv_path,$table,$ordered_label){
		$csv_file = fopen($csv_path,'a+') or die('Fichier CSV innaccessible!');
		echo "<pre>";
		while($tab = fgetcsv($csv_file,1000)){
			print_r($tab);
		}
		echo "</pre>";
		return;
	}
	
	public function make_sql_request($sql){
		
		$statement = $this::$bdd->prepare($sql);
		$retour = $statement->execute();
		if($retour == FALSE){
			die('Erreur dans la requète');
		}else if($retour == 0){
			echo 'Aucune modification effectuée';
		}else{
			echo $retour . 'lignes ont été affectés';
		}
		return $retour;
		
	}
	public function make_sql_query($sql){
	
		$statement = $this::$bdd->prepare($sql);
		$retour = $statement->query();
		if($retour == FALSE){
			die('Erreur dans la requète');
		}
		return $statement;
	
	}
	public function collect_all_data($statement){
		
		$data = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($data as &$dataIndex){
			foreach($dataIndex as $key => &$value){
				$dataIndex[$key] = $this::sanityseDownloadDataFromDataBase($value);
			}
		}
		return $data;
		
	}
	function transform_all_data_into_xml($data);
	
	public function collect_one_line_data($statement){
		$data = $statement->fetch(PDO::FETCH_ASSOC);
		foreach($data as $key => &$value){
			$data[$key] = $this::sanityseDownloadDataFromDataBase($value);
		}
		return $data;
	}
	
	static function sanityseUploadDataFromDataBase($array_values){
		foreach($array_values as &$chaine){
			
			if (get_magic_quotes_gpc() == 0){
			 $chaine = addslashes($chaine);
			}
			$chaine = preg_replace('#[\x00-\x1F\x7F-\x9F/\\\\]#', '', $chaine);
			$chaine = htmlspecialchars($chaine,ENT_QUOTES,'UTF-8');
			$chaine = htmlentities($chaine);
			$encoding = mb_detect_encoding($chaine,"UTF-8, ISO-8859-1, ISO-8859-15, GBK");
			if( $encoding == "GBK" ){
				$chaine = iconv("gbk","utf-8",$chaine);
			}else if( $encoding == "ISO-8859-15" ){
				$chaine = iconv("ISO-8859-15","utf-8",$chaine);
			}else if( $encoding == "ISO-8859-1" ){
				$chaine = iconv("ISO-8859-1","utf-8",$chaine);
			}
			$chaine = preg_replace("#\r\n#", "", $chaine);
			$chaine = preg_replace("#\r#", "", $chaine);
			$chaine = preg_replace("#<p>&nbsp;</p>#", "", $chaine);
			
		}	
		return $array_values;
	}
	static function sanityseDownloadDataFromDataBase($chaine){
		if (get_magic_quotes_gpc() == 1){
			$chaine = stripslashes($chaine);
		}
		$chaine = preg_replace('#&lt;(p|a|span|u|b|i|em|strong|center|br|hr|ul|li|img)(.*?)&gt;#','<${1}${2}>',$chaine);
		$chaine = preg_replace('#&lt;\/(p|a|span|u|b|i|em|strong|center|br|hr|ul|li|img)(.*?)&gt;#','</${1}${2}>',$chaine);
		$chaine = preg_replace('#&lt?;php (.*?) ?&gt;#','<!--{? ${1} ?}-->',$chaine);
		$chaine = str_replace('é','&eacute;',$chaine);
		$chaine = str_replace('è','&egrave;',$chaine);
		$chaine = str_replace('ë','&euml;',$chaine);
		$chaine = str_replace('ê','&ecirc;',$chaine);
		$chaine = str_replace('ç','&ccedil;',$chaine);
		$chaine = str_replace('Ç','&Ccedil;',$chaine);
		$chaine = str_replace('à','&agrave;',$chaine);
		$chaine = str_replace('â','&circ;',$chaine);
		$chaine = str_replace('ä','&uml;',$chaine);
		$chaine = str_replace('î','&icirc;',$chaine);
		$chaine = str_replace('ï','&iuml;',$chaine);
		$chaine = str_replace('ù','&ugrave;',$chaine);
		$chaine = str_replace('û','&ucirc;',$chaine);
		$chaine = str_replace('ü','&uuml;',$chaine);
		$chaine = str_replace('É','&Eacute;',$chaine);
		$chaine = str_replace('Ê','&Ecirc;',$chaine);
		$chaine = str_replace('È','&Egrave;',$chaine);
		$chaine = str_replace('Ë','&Euml;',$chaine);
		$chaine = str_replace('À','&Agrave;',$chaine);
		$chaine = str_replace('Â','&Acirc;',$chaine);
		$chaine = str_replace('Ä','&Auml;',$chaine);
		$chaine = str_replace('Î','&Icirc;',$chaine);
		$chaine = str_replace('Ï','&Iuml;',$chaine);
		$chaine = str_replace('Ù','&Ugrave;',$chaine);
		$chaine = str_replace('Û','&Ucirc;',$chaine);
		$chaine = str_replace('Ü','&Uuml;',$chaine);
		$chaine = str_replace("'","&#39;",$chaine);
		$chaine = str_replace('"','&#34;',$chaine);
		$chaine = utf8_encode($chaine);
		
		return $chaine;
	}
	
	
}