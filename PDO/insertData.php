<?php
try{
	$connection = new PDO('mysql:host=localhost;dbname=pc','root','');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $ex){
	$ex->getMessage();
}

 ?>