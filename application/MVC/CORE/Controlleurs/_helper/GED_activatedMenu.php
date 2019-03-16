<?php
function isThePage($var,$stringNameOfThePage){
	if($var == $stringNameOfThePage){ return " class='actived-menu' "; }
	return '';
}