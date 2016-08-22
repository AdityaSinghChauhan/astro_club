<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<?php
       
        session_start();
        $log="Login";
        $link="login.php";
       if(isset($_SESSION['SESS_FIRST_NAME']))
       {
           $log="Logout ".$_SESSION['SESS_FIRST_NAME'];
           $link="logout.php";
           
       }
       ?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Astro Club</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				
				<ul id="navigation">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="menu">
                            <a href="#" >About Us</a>
                            <ul class="primary">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="team.php">Our Team</a></li>
                                <li><a href="registration.php">Be a Part</a></li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="#" data-flexmenu="activity">Activities</a>
                            <ul class="primary">
                                <li><a href="activities.php">Our Activities</a></li>
                                <li><a href="assignments.php">Our Assignments</a></li>
                                <li><a href="/wp">Blog</a></li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="blog.php">Blog</a>
                        </li>
                        <li class="menu">
                            <a href="downloads.php">Downloads</a>
                        </li>
                        <li class="menu">
                            <a href="gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                        <li>
                            <a href="<?php echo $link; ?>"><?php echo $log; ?></a>
                        </li>
                    </ul>
			</div>
		</div>
		<div id="body" class="about">
			<div class="header">
				<div>
					<h1>About</h1>
					<h2>We love Astronomy</h2>
					<p>The Astro Club is a special venture for the popularization of astronomy and basic sciences. It is a joint initiative by Chhattisgarh Vigyan Sabha and Bhilai Institute if Technology, Durg towards eradication 
                                            of superstitions from amongst the society and inculcate scientific temperament amongst the youth. Started in 2014, The Astro Club is the <b>1st Formal Astronomy Club of Chhattisgarh State </b>
                                            and is a family of 600+ members currently. </p>
                                </div>
			</div>
			<div class="body">
				<div>
					<img src="images/earth-satellite.jpg" alt="">
					<h2>We love doing fun stuff !</h2>
                                        <p>We are a team who believes in 'Learning while Playing'. We organize Guest Lectures by Eminent Scientists, Workshops, Night Sky Camps, Collaborative assignments with various scientific bodies, Science Popularization Activities in Remote Villages and a lot more... </p>
                                </div>
			</div>
			<div class="footer">
				<div>
					<img src="images/space-shuttle.png" alt="">
					<h2>Be Part of Our Community</h2>
                                        <p>If you are passionate about science or want to know about the universe you live in or enjoy looking at the sky, You can be a part of <b>The Astro Club</b> by registering <a href='register.php'>here</a>...</p>
                                </div>
			</div>
			<div class="footer2">
			<div>
					<img src="images/space-shuttle.png" alt="">
					<h2>Our Affiliations</h2>
                                        <p>
                                                Vigyan Prasar, Dept. of Science and Technology, Govt. of India</br></br>
                                           
                                                Chhattisgarh Vigyan Sabha, Raipur
												</br></br>
                                                All India People Science Network
                                </p>
								</div>
			</div>
		</div>
		<div id="footer">
			<div class="connect">
				<div>
					<h1>FOLLOW OUR  MISSIONS ON</h1>
					<div>
						<a href="https://www.facebook.com/ASTROatBITD/" class="facebook">facebook</a>
						<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
						<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					
					</div>
				</div>
			</div>
			<div class="footnote">
				<div>
					<p>&copy; 2015 - <?php echo date("Y"); ?> The Astro Club | ALL RIGHTS RESERVED</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>