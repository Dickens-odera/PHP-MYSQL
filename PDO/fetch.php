<?php
include('testDb.php');
$stmt = $db->query("SELECT * FROM pdoDb");
//there is also:

//PDO::FETCH_ASSOC  that retuens the data as an associative arryay with key-value pairs
//PDO::FETCH_NUM that returns yhe data in numerical form
// PDO::FETCH_BOTH that returns data in both the associative array form and the numerical form
while($row = $stmt->fetch()){
    echo htmlentities($row['id'])." ".htmlentities($row['first_name'])." ".htmlentities($row['last_name'])." ".htmlentities($row['email'])."</br>";
        //echo "<pre>" .var_dump($row)."</pre>";
}
?>