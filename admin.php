<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Befrienders</h3>
      </div>
      <div class="right_area">
        <a href="signin.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="jose.jpeg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="addstaff.php"><i class="fa fa-users" aria-hidden="true"></i><span>Staff</span></a>
        <a href="#"><i class="fas fa-file-alt" aria-hidden="true"></i><span>Manage Article</span></a>
        <a href="#"><i class="fas fa-calendar-alt" aria-hidden="true"></i><span>Manage Events</span></a>
        <a href="#"><i class="fas fa-clipboard" aria-hidden="true"></i><span>Manage Home Page</span></a>
        
        
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="jose.jpeg" class="profile_image" alt="">
        <h4>Jose Emilien</h4>
      </div>
        <a href="#" onclick="managestaff();return false;"><i class="fa fa-users" aria-hidden="true"></i><span>Staff</span></a>
        <a href="#" onclick="managearticle();return false;"><i class="fas fa-file-alt" aria-hidden="true"></i><span>Manage Article</span></a>
        <a href="#" onclick="manageevent();return false;"><i class="fas fa-calendar-alt" aria-hidden="true"></i><span>Manage Events</span></a>
        <a href="swapsec.php"><i class="fas fa-clipboard" aria-hidden="true"></i><span>Manage Home Page</span></a>
        
        
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
        <strong><h7>Welcome Mr Jose Emilien !</h7>
        <p>Here you will be able to manage the Befrienders Website !</p></strong>
        
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

            <script type="text/javascript">
            function managestaff()
            {
                $.ajax({
                    type:"POST",
                    url:"addstaff.php",
                    success: function(value){
                        $(".content").html(value);
                    }
                });
            }
        </script>


                <script type="text/javascript">
            function managearticle()
            {
                $.ajax({
                    type:"POST",
                    url:"",
                    success: function(value){
                        $(".content").html(value);
                    }
                });
            }
        </script>

                <script type="text/javascript">
            function manageevent()
            {
                $.ajax({
                    type:"POST",
                    url:"",
                    success: function(value){
                        $(".content").html(value);
                    }
                });
            }
        </script>

                <script type="text/javascript">
            function managehome()
            {
                $.ajax({
                    type:"POST",
                    url:"swapsec.php",
                    success: function(value){
                        $(".content").html(value);
                    }
                });
            }
        </script>


  </body>
</html>

