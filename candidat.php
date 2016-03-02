<?php
include("connection.php");
class candidat{
		private $nom;
		private $prenom;
		private $mail;
		public function __construct($p_nom, $p_prenom, $p_mail){
			$this->nom=$p_nom;
			$this->prenom=$p_prenom;
			$this->mail=$p_mail;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getPrenom(){
			return $this->prenom;
		}
		public function getMail(){
			return $this->mail;
		}
	}
?>