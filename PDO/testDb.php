<?php 
try{
    $db = new PDO('mysql:host=localhost;dbname=details','root','');
    //var_dump($db); //this method describes  more about a variables
}catch(PDOException $e){
    echo $e->getMessage();
    //echo "An error has occured";
}

?>