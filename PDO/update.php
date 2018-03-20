<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(isset($_POST['password'])){
			$password = $_POST['password'];
		}
		if(isset($_POST['email'])){
				if(filter_var($_POST['email'])){
					$email = $_POST['email'];
				}
		}

			try{
					$pdoConnection = new PDO('mysql:host=localhost;dbname=pc','root','');
					$stmt  = $pdoConnection->prepare("UPDATE message SET password = ? WHERE email = ?");
					$stmt->bindParam(1, $_POST['password']);
			}
			catch(PDOException $e){
					$e->getMessage();
		}
	}

 ?>