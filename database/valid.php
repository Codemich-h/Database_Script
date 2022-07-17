<?php 



//Contains the durability and validation of the success page

if(isset($_POST['create_button']))
{

    $message = "This page will exit in few seconds";
    header("refresh:5,index.php");

}else{

    header("location:index.php");
}
