<?php 

	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		try{
		$db = new PDO('mysql:host=localhost;dbname=pc','root','');//connect to the datavase server
		if(isset($_POST['email'])){
			if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
				$email = $db->real_escape_string($_POST['email']);
			}
		}
		if(isset($_POST['password'])){
			$password = $db->real_escape_string($_POST['password']);
			
		}
		if(isset($_POST['username'])){
			$username = $db->treal_escape_string($_POST['username']);
		}
		if($email == "" || $username == "" || $password == ""){
			$msg = "Check the missing field!";
		}else{
			$sql = $db->prepare("SELECT email FROM members WHERE email = :email");
			$sql->execute(array(':email'=>$email));
			$count  = $sql->rowCount();
			if($count > 0){
				echo "The email address already exists";
			}else{
			//isert the user into the database
				$token = "abcdehmlia10937683677dgdgdgkkakABMNCLJKJD64sdgshdg7tr7YTEBDMCRWNND35625123456JJBCM22!#84DGCJDD";
				$token = str_shuffle($token);
				$token = substr($token,0, 14);
				$hashedPassword = password_hash($password,PASSWORD_BCRYPT);
				$stmt = $db->prepare("INSERT INTO members(username, email, password) VALUES(:username,:email,:password)");
				if($stmt->execute(array(':username'=>$username,':email'=>$email,':password'=>$hashedPassword))){
					echo "You have successfully registered";
				}else{
					echo "Failed to register";
				}

			}
		}
	}catch(PDOExcpetion $e){
		echo $e->getMessage();
	}
}
?>