<!DOCTYPE html>
<html lang="en">
  	<head>
  		<meta name="description" content="">
  		<meta name="keyword" content="">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/index.css">
		<title>HOMEPAGE || BEFRIENDERS</title>
  	</head>
  	<body>
        <!--Navigation Bar-->
	  	<header>
	        <div class="logo">
	          <a href="#"><img src="./img/logo.png" alt="Befrienders Mauritius"></a>
	        </div>

	        <nav>
	        	<ul>
	            	<li><a class="active" href="#">HOME</a></li>
	            	<li><a href="">EVENTS</a></li>
	            	<li><a href="">BLOG</a></li>
                    <li>
                        <a href="">VOLUNTEER</a>
	                	<ul>
	                    	<li>
	                        	<a href="">MY ACCOUNT</a>
	                    	</li>
	                    	<li>
	                        	<!--Hide/show links-->
		                        <?php if(isset($_SESSION[''])): ?>
		                                <a href="">LOGOUT</a>
		                        <?php else: ?>
		                                <a href="">LOGIN</a>
		                        <?php endif; ?>
	                    	</li>
	                    	<li>
		                        <?php if(!isset($_SESSION['userEmail'])): ?>
		                                <a href="">BE A VOLUNTEER</a>
		                        <?php endif; ?>
	                  		</li>
	                	</ul>
	            	</li>
	            	<li><a href="">ABOUT US</a></li>
                    <li><a href="">CONTACT US</a></li>
                    <li><a href="">NEED HELP?</a></li>
	          </ul>
	        </nav>

	        <!--Hamburger-->
	        <div class="menu-toggle">
	          <i class="fa fa-bars" aria-hidden="true"></i>
	        </div>
	    </header>
	  	
	    <!--Carousel-->
        <div id="banner" class="carousel slide" data-ride="carousel">  
          
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/1.jpg" alt="">
            </div>

            <div class="carousel-item">
                <img src="./img/2.jpg" alt="">
            </div>

            <div class="carousel-item">
                <img src="./img/3.jpg" alt="">
            </div>
  
            <a class="carousel-control-prev" href="#banner" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a class="carousel-control-next" href="#banner" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>	    

	    <!--About Us-->
	    <a name="aboutUs"></a>
		<section class="about">
			<div class="container">
				<h2>About Us</h2>
				<div class="row">
                    <div class="col-md-6">
						<img src="./img/president.png" alt="president">
					</div>

					<div class="col-md-6">
						<div id="aboutContent">
							<p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type 
                            specimen book. It has survived not only five centuries, but also the leap 
                            into electronic typesetting, remaining essentially unchanged. 
							</p>
							<span style="font-style: italic;">This is a quote</span>
						</div>
                    </div>
				</div> 
			</div>
        </section>
        
        <!--Our Team-->
        <a name="ourteam"></a>
		<section class="teamdetails">            
			<h2>Our Team</h2>
			<img src="./img/grouppic.jpg" alt="group picture">
			<p style="font-style: italic;">Befrienders Mauritius Team</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
			</p>
        </section>

		<!--Our Promise-->
		<section class="promise">
			<div class="container">
				<h2>Our Promise</h2>
				<div class="row">
					<div class="col-md-4 text-center">
						<div id="icon">
							<i class="fa fa-trophy"></i>
						</div>
						<h3>OUR MISSION</h3>
						<p>Our mission is to be a principal resource in emotional support delivered by volunteers. We value giving a
							person the opportunity to explore feelings which can cause distress, the importance of being listened to,
							in confidence, anonymously. We believe in the capacity for each person to build up his resilience and take
							fundamental descisions about his own life.
						</p>                    
					</div> 

					<div class="col-md-4 text-center">
						<div id="icon">
							<i class="fa fa-eye"></i>
						</div>   
						<h3>OUR VISION</h3>
						<p>A society in which nobody dies by suicide, where people are able to explore their own feelings, acknowledge and respect
							the feelings of others.
						</p>                
					</div>

					<div class="col-md-4 text-center">
						<div id="icon">
							<i class="fa fa-key"></i>
						</div>
						<h3>OUR VALUES</h3>
						<p>Our values are based on these beliefs. The importance of having the opportunity to express painful feelings.
							That being listened to, in confidence and accepted without prejudice can alleviate despair and suicidal feelings.
						</p>                  
                    </div>
                               
				</div>
			</div>
		</section>

		<!---->
		<section class="need">
			<h2>Need Help?</h2>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-3">
						<div id="emergency">
							<h6 style="color: #005f20;">CHAT WITH US</h6>
							<a href=""><i class="fa fa-headphones"></i></a>
							<p>We are here to listen to you
								<br><br>
								<span style="color: #7c0000; font-weight: bold">HOTLINE : +230 4670160</span>
							</p>
						</div>
						<div id="enum">
							<h6>EMERGENCY NUMBERS</h6>
							<img src="./img/ambulance.png" alt="">
							<p style="font-weight: bold;">Tel: 114</p>
							<img src="./img/police.png" alt="">
							<p style="font-weight: bold;">Tel: 999</p>
							<img src="./img/firetruck.png" alt="">
							<p style="font-weight: bold;">Tel: 115</p>
						</div>
					</div>
					<div class="col-sm-3" id="problem">
						<h5>Why you have problems?</h5>
						<ul>
							<li>You cannot face difficulties in your personal life, family life, professional life
								, or between friends.
							</li>
							<li>You feel alone and don't know what to do.</li>
							<li>Feel the discouragement due to, failing to keep a promise, unfaithful partner
								, your feelings was hurt, or your partner left you.
							</li>
							<li>You didn't plan your life well.</li>
							<li>You couldn't achieve your ambitions.</li>
						</ul>
					</div>
					<div class="col-sm-3" id="happen">
						<h5>What happens when you have problem?</h5>
						<p style="font-weight: bold">You feel discouraged, sad, and feel like quitting everything and go... </p>
						<ul>
							<li>You feel tired.</li>
							<li>You don't feel sleepy.</li>
							<li>You don't know what to do.</li>
							<li>You feel disgusted by everything</li>
							<li>You don't feel like eating</li>
							<li>You have family problems</li>
							<li>You feel unwanted</li>
							<li>You lose faith in life</li>
							<li>You feel like quitting everything</li>
							<li><b>Suicide is not a solution</b></li>
						</ul>
					</div>
					<div class="col-sm-3" id="effect">
					<h5>What effect problems have on you?</h5>
						<p style="font-weight: bold">You can</p>
						<ul>
							<li>Have brain issues</li>
							<li>Have pain in your whole body</li>
							<li>Lost of weight.</li>
							<li>Drowning in drugs and alcohol.</li>
							<li>Feel sad.</li>
							<li>Have imsomnia</li>
							<li>Lose hope in everything</li>
							<li>Decide to leave everything and go</li>
							<li>Search for someone who you can share your feelings but doesn't find one.</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!--Testimonials-->
		<section class="test">
			<h2>Testimonials</h2>
			<div class="container">
    			<div id="slides" class="carousel slide" data-ride="carousel">
        			<div class="carousel-inner">
            			<div class="carousel-item active">
                			<div class="carousel-caption">
                    			<p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, 
									I don't know what will.This was the very best explanation of frameworks for brginners
									that I've ever seen.
								</p>
                    			<div id="image-caption">Nick Doe</div>
                			</div>
						</div>
						<div class="carousel-item">
                <div class="carousel-caption">
                    <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, 
						I don't know what will.This was the very best explanation of frameworks for brginners 
						that I've ever seen.
					</p>
                    <div id="image-caption">Cromption Greves</div>
                </div>
            </div>
					</div> 
					<a class="carousel-control-prev" href="#slides" data-slide="prev"> <i class='fa fa-arrow-left'></i> </a> <a class="carousel-control-next" href="#slides" data-slide="next"> <i class='fa fa-arrow-right'></i> </a>
    			</div>
			</div>
		</section>

		<!--Contact Us-->
		<a name="contactUs"></a>
		<section class="contact">
			<div class="container">
				<h2>Get In Touch</h2>
				<div class="row">
                    <div class="col-md-6 contact-info">   
						<div class="follow"><b>Address: </b><i class="fa fa-map-marker"></i><span id="contactl">1st Floor Flat, 152 Royal Road, Beau Bassin</span></div>
						<div class="follow" style="color: #fc3903; font-size: 18px;"><b>HOTLINE: </b><i class="fa fa-phone"></i>+230 4670160</div>                             
						<div class="follow"><b>Phone: </b><i class="fa fa-phone"></i><span id="contactl">+230 4670160</span></div>
						<div class="follow"><b>Whatsapp </b><i class="fa fa-whatsapp"></i><span id="contactl">+230 54837233</span></div>
						<div class="follow"><b>Email: </b><i class="fa fa-envelope"></i><a href="mailto:adminofficer.befrienders@gmail.com"><span id="contactl">adminofficer.befrienders@gmail.com</span></a></div>

						<div class="follow"><label><b>Get Social:  </b></label>
							<a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6">
						<div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.98651427640849!2d57.46807423937736!3d-20.226285433666945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5acddab7da25%3A0x3b5790fec6101b9d!2sBeau%20Bassin%20Police%20Station!5e0!3m2!1sen!2smu!4v1604211673914!5m2!1sen!2smu" 
							 frameborder="0" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
						</div>
                    </div>
				</div>
            </div>
		</section>

		<!--Footer-->
		<div class="footer">
	        <img id="logoFooter" src="">
	        <img src="./img/logo.png">
	        <p>&copy; 2020 All rights reserved</p>
		</div>

		<!--Navigation Bar Javascript-->
	  	<script type="text/javascript">
	        $(document).ready(function()
	        {
	          $('.menu-toggle').click(function()
	          {
	            $('nav').toggleClass('active')
	          })      
	        });	          
		</script>          
	</body>
</html>