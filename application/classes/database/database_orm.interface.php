<?php
namespace Classes\Database;

interface database_orm
{
	function createDataIntoDataBase();
	function readDataFromDataBase();
	function updateDataInDataBase();
	function deleteDataOnDataBase();
	function searchDataOnDataBase();
	
	function receiveDataFromArray($tab);
	
}