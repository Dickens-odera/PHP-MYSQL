<?php
$dbConnetion = "";
try{
$dbConnetion = new PDO('mysql:host=localhost;dbname=cms','root','');
//retrieve data form the database table
$stmt = $dbConnetion->prepare("SELECT * FROM users WHERE username  LIKE ?");
//$stmt = $dbConnetion->fetchAll(PDO::FETCH_ASSOC);
$stmt->bindValue(1,"%d%");
$stmt->execute();
//get the data from the table fields
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   // echo "Your name is ".$row['username']."<br>";
   $User = htmlentities($row['username']);
   $UserType = htmlentities($row['userType']);
   $email = htmlentities($row['email']);
   echo "Your name is ".$User."<br>"."you are of type ".$UserType."<br>"."and your email address is ".$email."<br>";

}
}catch(PDOException $e){
    //$e->getMessage();
    echo "an error occured when connecting to the database server ".$e->getMessage();
  
}

?>