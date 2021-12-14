<?php
	class materiel{
		//private $idu=null;
		private $nom=null;
		private $typem=null;
        private $post_id=null;
		//private $created_at=null;
		
		function __construct(/*$idu, */$nom, $typem, $post_id){
			//$this->idu=$idu;
			$this->nom=$nom;
			$this->typem=$typem;
            $this->post_id=$post_id;
            //$this->created_at=$created_at;
		}
		/*function getId(){
			return $this->idu;
		}*/
		function getNom(){
			return $this->nom;
		}
		function getType(){
			return $this->typem;
		}
        function getPost(){
			return $this->post_id;
		}
     
        /*function getCreated(){
			return $this->created_at;
		}*/
		
        //////////


		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setType(string $typem){
			$this->typem=$typem;
		}
        function setPost(string $post_id){
			$this->post_id=$post_id;
		}
        
        /*function setCreated(string $etat){
			$this->created_at=$created_at;
		}*/
	}


?>