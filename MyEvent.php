<?php session_start();

require("connection.php");

if(!(isset($_GET['Eventid']))){
        
    $_SESSION['EventMsgError'] = "The event you're trying to access might not be available for the moment. Please try again later";
        header('Location: Events.html');

}
else{

    $id = $_GET['Eventid'];
}

$sql="select * from events where EventID = '".$id."';";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_assoc($result)){
        
 
?>
<!DOCTYPE html> 
<head>
    <title> <?php echo $row['EventName']; ?>| Befrienders Mauritius </title> 
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> <!--Bootstrap CDN -->
        <script src="js//jquery-3.4.1.min.js"></script> <!--jQuery CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--FontAwesome CDN -->
        <link rel="stylesheet" href="css/Events.css"> <!-- Common sharable css file for Events -->
        <link rel="stylesheet" href="css//MyEvent.css"> 
        <!-- <script src="JS//MyEvent.js"> </script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link rel="stylesheet" type="text/css" href="css//footer.css">
</head>
<body>
    <nav> 
        <div id="header"> 
            <img src="img//logo.png" width="150px" height="70px" alt="Logo" />
            <div class="text-right" id="HeaderLinks" > 
                <a href="index.php" class="LinksHead"> Homepage </a>
                
                <button class="btn btn-info"> Interested! </button>
                <a href="index.php#contactUs" class="LinksHead"> Contact Us </a>
            </div>
        </div>
    </nav>

    <!-- <nav aria-label="breadcrumb" >
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Events.html" class="Links">Events Home</a></li>
          <li class="breadcrumb-item active" aria-current="page" class="Links" >EventName </li>
        </ol>
    </nav> -->

    <div style="padding:10px; background-color:lightgrey;">
    <a href="Events.html" class="Links">Events Home</a> </a> / <span class="text-muted"> <?php echo $row['EventName']; ?> </a> 
    </div>
    
    <div id="EventMain">
        <?php  
            if($row['CoverImage']!=""){
                echo '<img src="img//EventDir//EventUpload//'.$row['CoverImage'].'" width="100%" height="400px" style="filter: brightness(75%);">  ';
            }
            else{
                echo '<img src="img/MyEventCover.jpg" width="100%" height="400px" style="filter: brightness(75%);">  ';
            }
        ?>
          
        
        <p style="color:white;">
        <?php echo $row['EventName']; ?>
            <br/>
            <b> <?php echo $row['EventDate']; ?> </b> <br/>
            
            <button id="Suicide" class="btn btn-primary" > #Suicide </button> 
            <button id="BefriendersMu" class="btn btn-danger"> #BefriendersMu </button> 
            <button id="TalkOnSuicide" class="btn btn-warning"> #TalkOnSuicide </button> 
        </p>
        
       

    </div>

    <div id="DisplayerSuicide" class="Displayer">
        Use #Suicide on your social media to promote awareness against suicide and make a change TODAY!
    </div>

    <div id="DisplayerBefriendersMu" class="Displayer">
        Use #BefriendersMu on your social media to promote the NGO Befrienders Mauritius and inform the public about what we do!
    </div>

    <div id="DisplayerTalkOnSuicide" class="Displayer">
        Use #TalkOnSuicide on your social media to normalise mental health and depression!
    </div>

    <div>
        <div class="display-4" style="float:left;padding-top:100px;padding-left:20px;padding-bottom:150px; ">
        <?php echo "<span style='padding-right: 60%;'> ".$row['EventName']." </span>"; ?>
        </div>
        <br/>
        <br/>
        <div  style="padding-top:50px; margin-left: auto; margin-right: auto;">
        <?php echo $row['EventDescription']; ?>
        </div>
    </div>

    
    <div id="EventInformations" style="padding-top:50px;" class="text-center">
        <span class="InfoEvent">
            <i class="fa far fa-bell"></i>
            <?php echo " Event Type: ".$row['EventType'];  ?>
        </span>
        <span class="InfoEvent">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <?php echo $row['EventDate']; ?> At <?php echo $row['EventTime']; ?> 
        </span>
        <span class="InfoEvent">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <?php echo $row['EventLocation']; ?> 
        </span>
        
    </div>
    <br/>
    <footer class="footer">
		<div class="footer-left">
			<h5>Befrienders Mauritius</h5>
			<p>We can help prevent suicide. Befrienders provide 24/7 free and confidential support for people in distress, prevention and crisis resources for you or your loved ones.</p>
	    </div>
	
	    <div class="footer-right">
		    <h5>Address</h5>
            <i class="fas fa-map-marked-alt"></i><p>Befrienders(Mauritius)<br>1st Floor Flat,<br> 152 Royal Road,<br> Beau Bassin</p>
            <i class="fa fa-tty"></i><p>Office: <a href="tel:+230 4670160"> 4670160 </a> </p>
            <i class="fa fa-mobile"></i><p>Mobile: <a href="tel:+230 54837233">54837233</a> </p>
            <i class="fa fa-fire"></i><p>Hotline: <a href="tel:+230 8009393">8009393</a> </p>
            <i class="fa fa-envelope"></i><p>Email: <a href="mailto:adminofficer.befrienders@gmail.com" id="Links"> Befrienders Mauritius</a> </p>
        </div>

	    <div class="footer-bottom">
		    <p>All Right reserved by &copy;Befrienders</p>
	    </div>

    </footer>

</body>

</html>
<?php


       }
    }
    else{
        header("Location: Events.html");
    }
    
?>