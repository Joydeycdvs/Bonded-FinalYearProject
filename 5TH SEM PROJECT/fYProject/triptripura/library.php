<?php

	class library{
	
		public function connect(){
			
			if(!isset($_SESSION)){
		    session_start();
			}
			global $pdo;
			
			$pdo=new PDO('mysql:host=localhost;dbname=triptripura', 'root', '');
			
		}
		
		
		public function executeQuery($query){
			global $pdo;
			
			$row=$pdo->query($query);
			return $row;
		}
		
		}
?>