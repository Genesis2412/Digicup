<?php

    $servername='localhost';
    $username='root';
    $password='';
    $database='befrienders';

    //Creating connection

    $conn=mysqli_connect($servername,$username,$password,$database);

    $sql="SELECT * FROM home";
    $result = mysqli_query($conn,$sql);
    $data=array();

    if(mysqli_num_rows($result) >= 0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $data[] = $row;
        }
    }
?>