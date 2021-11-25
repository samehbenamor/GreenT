<?php
	class formation{
		//private $idu=null;
		private $titre=null;
		private $theme=null;
		private $descp=null;
		private $etat=null;
		
		function __construct(/*$idu, */$titre, $theme, $descp, $etat){
			//$this->idu=$idu;
			$this->titre=$titre;
			$this->theme=$theme;
            $this->descp=$descp;
            $this->etat=$etat;
		}
		/*function getId(){
			return $this->idu;
		}*/
		function getTitre(){
			return $this->titre;
		}
		function getTheme(){
			return $this->theme;
		}
        function getDescp(){
			return $this->descp;
		}
        function getEtat(){
			return $this->etat;
		}
		
        //////////


		function setTitre(string $titre){
			$this->titre=$titre;
		}
		function setTheme(string $theme){
			$this->theme=$theme;
		}
        function setDescp(string $descp){
			$this->descp=$descp;
		}
        function setEtat(string $etat){
			$this->etat=$etat;
		}
	}


?>