<?php
	class utilisateur{
		private $id=null;
		private $nom=null;
		private $prenom=null;
		private $email=null;
		private $mdp=null;
        private $adresse=null;
        private $tel=null;
        private $ville=null;
        private $rolee=null;
		
		function __construct($id, $nom, $prenom, $email, $mdp, $adresse, $tel, $ville, $rolee){
			$this->id=$id;
			$this->nom=$nom;
			$this->prenom=$prenom;
            $this->email=$email;
            $this->mdp=$mdp;
			$this->adresse=$adresse;
            $this->tel=$tel;
			$this->ville=$ville;
			$this->rolee=$rolee;
		}
		function getId(){
			return $this->id;
		}
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
	}


?>