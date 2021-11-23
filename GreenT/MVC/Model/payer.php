<?php
	class don{
		//private $idu=null;
		private $nom=null;
		private $prenom=null;
        private $adresse=null;
        private $numc=null;
        private $dateex=null;
        private $code=null;
		
		function __construct(/*$idu, */$nom, $prenom, $adresse, $numc, $dateex, $code){
			//$this->idu=$idu;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->adresse=$adresse;
            $this->numc=$numc;
			$this->dateex=$dateex;
			$this->code=$code;
		}
		/*function getId(){
			return $this->idu;
		}*/
		function getNom(){
			return $this->nom;
		}
		function getPrenom(){
			return $this->prenom;
		}
		function getAdresse(){
			return $this->adresse;
		}
		function getNumc(){
			return $this->numc;
		}
        function getDateex(){
			return $this->dateex;
		}
        function getCode(){
			return $this->code;
		}

        //////////


		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setPrenom(string $prenom){
			$this->prenom=$prenom;
		}

		function setAdresse(string $adresse){
			$this->adresse=$adresse;
		}
        function setNumc(string $numc){
			$this->numc=$numc;
		}
        function setDateex(string $dateex){
			$this->dateex=$dateex;
		}
        function setCode(string $code){
			$this->code=$code;
		}
	}


?>