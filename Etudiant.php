<?php

require_once("Personne.php");

class Etudiant extends Personne{
	private static $_id = 0;
	private static $_nb_etudiant = 0;

	private $_identifiant;
	private $_nb;
	private $_coeff;
	private $_frais;
	private $_ufr;
	private $_cours;
	private $_campus;


		public function __construct(Personne $pers, $coeff, $frais, $ufr,$cours, $campus){
			parent::__construct($pers->get("_nom"), $pers->get("_prenom"), $pers->get("_adresse"), $pers->get("_age"));
			$this->_coeff = $coeff;
			$this->_frais = $frais;
			$this->_ufr = $ufr;
			$this->_cours = $cours;
			$this->_campus = $campus;
			$this->_identifiant = ++self::$_id;
			$this->_nb = ++self::$_nb_etudiant;
		}

		public function __destruct(){
			self::$_nb_etudiant--;
		}

		public function get($x){
			return $this->$x;
		}

		public function set($att, $val){
			$this->$att =$val;
		}

		public function __toString(){
			return "ID: ".$this->_identifiant." - Nom: ".$this->_nom." - Prénom: ".$this->_prenom." - Adresse: ".$this->_adresse." - Age: ".$this->_age." - Coefficient familial: ".$this->_coeff." - Frais scolaire: ".$this->_frais." - UFR: ".$this->_ufr." - Spécialité: ".$this->_cours. " - Campus: ".$this->_campus."<br>";
		}
		




}


?>