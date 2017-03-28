<?php

class Personne{
	protected $_nom;
	protected $_prenom;
	protected $_adresse;
	protected $_age;

	public function __construct($n, $p, $ad, $age){
		$this->_nom = $n;
		$this->_prenom = $p;
		$this->_adresse = $ad;
		$this->_age = $age;

	}

	public function get($x){
		return $this->$x;
	}

	public function set($att, $val){
		$this->$att = $val;
	}

	

}

?>