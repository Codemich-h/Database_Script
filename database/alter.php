<?php

function add_column($col_name)
{       
        require('db-conn.php'); //Database connection
        $message = "";

        $col_name = htmlspecialchars($_POST['col_name']);
        $submit = $_POST['submit'];
        $table_name =htmlspecialchars($_POST['table_name']);
        $db_name = htmlspecialchars($_POST['db_name']);
        $new_col_name = htmlspecialchars($_POST['new_col_name']);
        $char_type =strtoupper(htmlspecialchars($_POST['char_type'])); // this input should be in caps format

        if(isset($submit)&&($col_name) == "on")
        {
            $sql = "ALTER TABLE `$db_name`.`$table_name` 
            ADD COLUMN ` $new_col_name` $char_type";

            $db_conn->exec($sql);

            $message = "New columns successfully added to $table_name table\n";
  
        
        }else{

            $message = "To initialize the table columns alteration make sure the option is set to on\n";
            
        } if(!isset($submit)){
            $message = header("Location:add-col.php");
        }

        return $message;

}


