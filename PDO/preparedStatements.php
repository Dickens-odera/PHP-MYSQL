<?php 
include('testDb.php');
$stmt = $db->prepare("SELECT * FROM pdoDb WHERE first_name = ?");
//#stmt = $db->prepare("SELECT * from pdoDb WHERE first_name LIKE ?");
$stmt->bindValue(1,'%m%');
//$stmt->bindValue(1,'Dickens');
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //echo "<pre>". var_dump($row)."</pre>";
    //echo "First_name is ".htmlentities($row['first_name'])."Last Name ".htmlentities($row['last_name'])."<br>";
    $firstName = htmlentities($row['first_name']);
    $lastName = htmlentities($row['last_name']);
    $email = htmlentities($row['email']);
    echo $firstName ." ".$lastName." ".$email ."<br>";
}
?>