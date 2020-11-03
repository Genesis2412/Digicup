<?php
    $username = "root";
    $password = "";
    $serverName = "localhost";
    $database = "article_and_event";

    $conn = mysqli_connect($serverName,$username,$password,$database);

    if(!$conn){
        die( "<div style='background-color:yellow;color:black;padding:20px;'> Something went wrong with the connection. Befrienders Mauritius apologise for this offline time. Please use our telephone Service at +230 XXXXXXXX </div> ");
    }  
       

?>

