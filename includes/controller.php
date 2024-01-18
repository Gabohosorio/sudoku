<?php
	//Variables Globales
	$Smy = 26; $Nu = 5;
	session_start();
	header('Content-Type: text/html; charset=UTF-8'); 
	date_default_timezone_set('America/Bogota');
	
	class connection{
		static public function infoDb(){
			$infoDb = [
				"server" => "localhost",
				"user" => "sandto",
				"pass" => "Sandto.2023",
				"datab" => "sandto",
			];
			return $infoDb;
		}

		static public function connect(){ 
			try{
				$db = connection::infoDb();
				$conn = new mysqli($db['server'], $db['user'], $db['pass'], $db['datab']);
				if($conn->connect_errno){
					$_SESSION['er_user'] = $conn->connect_error;
					header('Location: http://localhost/saleon/error.php');
				}
			}
			catch(Exception $er){
				$_SESSION['er_user'] = $er;
				header('Location: http://localhost/saleon/error.php');
			}
			return $conn;
			//$Conex = connection::connect();
			// echo '<pre>'; print_r($Conex); echo '</pre>';
			// $Vrsql = "SELECT id_category, name_category FROM categories";
			// echo $Vrsql;
		}
	}
?>