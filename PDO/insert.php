<?php 
try{
$db = new PDO('mysql:host=localhost;dbname=cms','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//insert data into the database table named users
$usertType = "public";
$username = "Annold Origi";
$email = "origiannold123.co.ke";
$pass = SHA1("annold");
$sql = "INSERT INTO users(userType,username,email,pass,dateAdded) VALUES(:userType, :username,:email,:pass)";
//$sql= $db->bindValue(1,"public","Dickens Odera","dickenso2015@gmail.com",SHA1("1mompamela"),CURRENT_TIMESTAMP);
$query = $db->prepare($sql);
if($query){
    echo "data have been successfully added into the database";
}else{
    echo "Failed to insert data";
}
}catch(PDOEception $e){
    $e->getMessage();
}
?>