<?php
	class commentaire{
		//private $idu=null;
		private $user_id=null;
		private $post_id=null;
		private $body=null;
		//private $created_at=null;
		
		function __construct(/*$idu, */$user_id, $post_id, $body/*, $created_at*/){
			//$this->idu=$idu;
			$this->user_id=$user_id;
			$this->post_id=$post_id;
            $this->body=$body;
            //$this->created_at=$created_at;
		}
		/*function getId(){
			return $this->idu;
		}*/
		function getUser(){
			return $this->user_id;
		}
		function getPost(){
			return $this->post_id;
		}
        function getBody(){
			return $this->body;
		}
        /*function getCreated(){
			return $this->created_at;
		}*/
		
        //////////


		function setUser(string $user_id){
			$this->user_id=$user_id;
		}
		function setPost(string $post_id){
			$this->post_id=$post_id;
		}
        function setBody(string $body){
			$this->body=$body;
		}
        /*function setCreated(string $etat){
			$this->created_at=$created_at;
		}*/
	}


?>