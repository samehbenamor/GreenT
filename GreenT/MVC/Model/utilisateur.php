<?php
	class utilisateur{
		//private $idu=null;
		private $nom=null;
		private $prenom=null;
		private $email=null;
		private $mdp=null;
        private $adresse=null;
        private $tel=null;
        private $ville=null;
        private $rolee=null;
		private $banned=null;
		
		function __construct(/*$idu, */$nom, $prenom, $email, $mdp, $adresse, $tel, $ville, $rolee, $banned){
			//$this->idu=$idu;
			$this->nom=$nom;
			$this->prenom=$prenom;
            $this->email=$email;
            $this->mdp=$mdp;
			$this->adresse=$adresse;
            $this->tel=$tel;
			$this->ville=$ville;
			$this->rolee=$rolee;
			$this->banned=$banned;
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
        function getEmail(){
			return $this->email;
		}
        function getMdp(){
			return $this->mdp;
		}
		function getAdresse(){
			return $this->adresse;
		}
		function getTel(){
			return $this->tel;
		}
        function getVille(){
			return $this->ville;
		}
        function getRole(){
			return $this->rolee;
		}
		function getBanned(){
			return $this->banned;
		}

        //////////


		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setPrenom(string $prenom){
			$this->prenom=$prenom;
		}
        function setMdp(string $mdp){
			$this->mdp=$mdp;
		}
        function setEmail(string $email){
			$this->email=$email;
		}
		function setAdresse(string $adresse){
			$this->adresse=$adresse;
		}
        function setTel(string $tel){
			$this->tel=$tel;
		}
        function setVille(string $ville){
			$this->ville=$ville;
		}
        function setRole(string $rolee){
			$this->rolee=$rolee;
		}
		function setBanned(string $banned){
			$this->banned=$banned;
		}
	}


?>