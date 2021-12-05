<?php
	class evenement{
		//private $idu=null;
		private $ville=null;
		private $dateeve=null;
		private $descrip=null;
		private $titre=null;
		
		function __construct(/*$idu, */$ville, $dateeve, $descrip, $titre){
			//$this->idu=$idu;
			$this->ville=$ville;
			$this->dateeve=$dateeve;
            $this->descrip=$descrip;
            $this->titre=$titre;
		}
		/*function getId(){
			return $this->idu;
		}*/
		function getVille(){
			return $this->ville;
		}
		function getDate(){
			return $this->dateeve;
		}
        function getDesc(){
			return $this->descrip;
		}
        function getTitre(){
			return $this->titre;
		}
		
        //////////


		function setVille(string $ville){
			$this->ville=$ville;
		}
		function setDate(string $dateeve){
			$this->dateeve=$dateeve;
		}
        function setDesc(string $descrip){
			$this->descrip=$descrip;
		}
        function setTitre(string $titre){
			$this->titre=$titre;
		}
	}


?>