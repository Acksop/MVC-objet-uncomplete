<?php

/**
 * CONTROLLEUR STRUCTUREL FONCTIONNEL
 *
 * Nom Fichier: Admin
 * Auteur:	acksop <acksop@yahoo.fr>
 *
 *
 * Description developpeur:
 * 
 * C'est dans cette partie que l'on créé les fonctions qui seront appelées par la vue
 *  ce qui créé de ce fait un échange entre les deux fichiers.
 *  
 *  Celles ci peuvent contenir un ou plusieur accesseurs / inserteurs / modifieurs 
 *  localisés dans les "connecteurs" de la base de données, ceuxs-ci étants 
 *  définis par une requète à la syntaxe SQL correspondant au nom du fichier
 *  et ses commentaires descriptifs
 *  
 *  <!> format de fichier a définir: .psql ?
 *  
 *  En effet la DAL de base de données défini les accès et les retours 
 *  dans de multiples configurations de base de données, la plus intéressante
 *  étant celle de PEAR, cependant celle ci peut-être discuter c'est l'acteur
 *  majeur des multiples frameworks existant sur le marché de la programmation PHP
 *  
 *  <!> Zend Framework ; Symphony ; Hoa (recherche) sont pour les plus connus.
 *    
 *  
 *
 * Description utilisateur:
 *
 *
 *
 *
 */
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "_helper" . DIRECTORY_SEPARATOR . "GED_activatedMenu.php";
