<?php session_start();

if(!(isset($_SESSION['staff'])) && (!($_SESSION['Position']=="3")))
{
    $_SESSION['LoginWarns'] = "Error :You are not authorized to access this page";
    header("Location: signin.php");

}


?>
<?php 

require('connection.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];


    ?>
    <html>
    <head>
        <title> Modify Article <?php echo $id; ?> </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> <!--Bootstrap CDN -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    </head>
    <body>
    <div class="jumbotron">
    <?php
    echo "<h1> You are now editing the Article ID: ".$id."</h1>";
    echo "<span style='float:right'> Back to  <a href='admin.php'> Admin Interface</a></span> "
    ?>

    <form name="EditArticle" method="POST" action="#">
        <?php
            $sqlCodeE="select * from article where ArticleID='".$id."' ; ";
            $resultSet=mysqli_query($conn,$sqlCodeE);

            if(mysqli_num_rows($resultSet)>0){

                while($row=mysqli_fetch_assoc($resultSet)){
                    $Header = $row['ATitle'];
                    $Data = $row['ArticleData'];
                }

            }
        ?>
        Enter Article Title : <input type="text" id="ArtTitle" name="ArticleTitle" value=" <?php echo $Header ?> "/> <br/>
        Enter Article Content: <br/> <textarea name="contents" id="ArtData"  rows="20" cols="75" > <?php echo $Data ?> </textarea> <br/>
        <br/>
        <input type="submit" name="SubmitChangeArticle" value="Apply Changes"/>
        

    </form>

    <?php
        if(isset($_POST['SubmitChangeArticle'])){ //Form submit in same page
            $title=$_POST['ArticleTitle'];
            $Content=$_POST['contents'];
            //TimeStamp will automatically be updated

            $sqlInsert="UPDATE `article` SET `ATitle`='".$title."' , `ArticleData`= '".$Content."' WHERE ArticleID='$id';";

            if( mysqli_query($conn,$sqlInsert)){
                $_SESSION['adminWarn'] = "Article with ID ".$id." has been modified!";
                header("Location: admin.php");
                
                
               

            }
            else{
                //echo "Error: ".mysqli_error($conn);
                $_SESSION['adminWarn'] = mysqli_error($conn);
                header("Location: admin.php");
            }


        }


}
else{
    $_SESSION['adminWarn'] = "You are not authorized to do this change";
    header("Location: admin.php");
}

?>
</div>
</body>
</html>