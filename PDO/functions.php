<?php 

class Data(){
	private $email;
	private $password;

	public function __construct($email, $password){
		$this->email = $email;
		$this->password = $password;
	}
	public function login($email, $password){
			//connect to the database
		$email = $password = $error = "";
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			if(isset($_POST['email'])){
				if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
					$email = $_POST['email'];
				}else{
					$error = "Invalid email address";
					echo $error;
				}	
			}
			if(isset($_POST['password'])){
					$password = $_POST['password'];
			}else{
				$error = "Invalid password";
					echo $error;
			}
		try{
				$connection = new PDO('mysql:host=localhost;dbname=pc','root','');
				$stmt = $connection->prepare("SELECT email, password FROM registered_members WHERE email = ? AND password = ?");
				$stmt->bindParam(1,$email);
				$stmt->bindParam(2, $password);
				$stmt->execute();
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					echo "You are logged in as ".htmlentities($row['email']);
				}else{
					echo "failed to log in";
				}
		}catch(PDOException $e){
			$->getMessage();
		}
		
}
				return true;
}
public function reguister(){
	//some code goes here
}
}
?>