<?php
require("connection.php");

$id = $_POST['ID'];

$sql="DELETE FROM events where EventID='".$id."';";

if(mysqli_query($conn,$sql)){

    $_SESSION['EventWarn'] = "Event ID: ".$id." has been deleted! ";
    header("Location: Events.html");
}

?>