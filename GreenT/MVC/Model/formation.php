<?php
	class formation{
		//private $idu=null;
		private $titre=null;
		private $theme=null;
		private $descp=null;
		private $etat=null;
		private $likes=null;
		
		function __construct(/*$idu, */$titre, $theme, $descp, $etat, $likes){
			//$this->idu=$idu;
			$this->titre=$titre;
			$this->theme=$theme;
            $this->descp=$descp;
            $this->etat=$etat;
			$this->likes=$likes;
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
		function getLikes(){
			return $this->likes;
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
		function setLikes(string $likes){
			$this->likes=$likes;
		}
	}


?>