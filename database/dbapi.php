<?php


function start($inniate){
    
  require('db-conn.php');

  $output="";
    
    $table_name = htmlspecialchars($_POST["table_name"]);
    $table_id   = htmlspecialchars($_POST["table_id"]);
    $table_col1 = htmlspecialchars($_POST["table_col1"]);
    $table_col2 = htmlspecialchars($_POST["table_col2"]);
    $table_col3 = htmlspecialchars($_POST["table_col3"]);
    $table_date = htmlspecialchars($_POST["table_date"]);
    $create_button = $_POST["create_button"];
    $inniate = htmlspecialchars($_POST["inniate"]);

   switch($inniate){
       case "on" :
            $output = "Action is on";

            if(isset($create_button)){

                $sql = "CREATE TABLE `$table_name`(

                `$table_id`  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

                `$table_col1` TEXT NOT NULL,

                `$table_col2` TEXT NOT NULL,

                `$table_col3`  INT NOT NULL,

                `$table_date` DATE NOT NULL

                ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";

                $table= $db_conn->exec($sql); 

                $output= "You database table created successfully";
                
            }

            break;

        case "off" :

         $output= "Action is off";

           break;

        default:

            $output= "Opps ! you did not initialize the code\n select on or off to initialize it";

           break;  
        

   }
   return $output;

}


//start("");


