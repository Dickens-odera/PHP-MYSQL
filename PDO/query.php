<?php 
include('testDb.php');
foreach($db->query("SELECT * FROM pdoDb") as $row){
    echo htmlentities($row['id'])."  ".htmlentities($row['first_name'])." ".htmlentities($row['last_name'])." ".htmlentities($row['email'])."</br>";
}
$connection = new PDO('mysql:host=localhost;dbname=cms','root','');
while($row = $connection->query("SELECT * FROM users")){
        echo "Your name is ".$row['username']."<br>";
}
?>