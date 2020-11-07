<?php
require("connection.php");

$id = $_POST['ID'];

$sql="DELETE FROM article where ArticleID='".$id."';";

if(mysqli_query($conn,$sql)){

    $_SESSION['ArticleMsgError'] = "Article ID: ".$id." has been deleted! ";
    header("Location: MainArticle.html");
}

?>