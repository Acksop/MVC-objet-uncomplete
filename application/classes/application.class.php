<?php
namespace Classes;

class Application
{
	public $userAgent;
	public $url;
	
	public function __construct(){
		$this->userAgent = new UserAgent();
		$this->url = new Url();
	}
	
	public function launch(){
		$controlleur = new Controlleur($this);
		if(!$controlleur->dataControl){
			echo( $controlleur->vue->ecran );
		}
	}
	
}
