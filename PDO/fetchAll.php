<?php
include('testDb.php');
$stmt = $db->query("SELECT * FROM pdoDb");
$result  = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
    $firstName = htmlentities($row['first_name']);
    $lastName = htmlentities($row['last_name']);
    $email = htmlentities($row['email']);
    echo $firstName ." ".$lastName." ".$email ."<br>";
}

?>