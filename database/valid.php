<?php 



//$page=true;

if(isset($_POST['create_button']))
{

    $message = "This page will exit in few seconds";
    header("refresh:5,index.php");

}else{

    header("location:index.php");
}
