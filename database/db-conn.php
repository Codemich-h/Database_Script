<?php

$connection_name = "Joke Database";
try {
    $db_conn =new PDO('mysql:host=localhost;dbname=joke_db;charset=utf8','Joke_user','123456');

        $message= "Connection to the  $connection_name established successfully";
    
} catch (PDOException $e) {
    $message= "Connection to the $connection_name failed \n".$e->getMessage()." :\n".$e->getFile()." \n"."error is on line"." ".$e->getLine();
    $db_conn=null; //end connection and clean_up the cache
}


 



