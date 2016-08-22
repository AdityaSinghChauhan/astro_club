<?php
session_start();
$log = "Login";
$link = "login.php";
if (isset($_SESSION['SESS_FIRST_NAME'])) {
    $log = "Logout " . $_SESSION['SESS_FIRST_NAME'];
    $link = "logout.php";
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
		<div id="body">
			<div class="header">
				<div>
					<h1>Our Activities</h1>
					<ul>
                                            <li>
                                                    <a href="#"><img src="images/activities/telescope.jpg" alt=""  width="580" height="217"></a>
							<div>
								<h1> A workshop on Telescopic Operation</h1>
                                                                <p> An event for 2 nd year students to learn how to operate the Telescope.</p>
                                                                    <a href="#" class="more">Read More</a>
							</div>
						</li>
                                                <li>
                                                    <a href="#"><img src="images/activities/jadu_tona.jpg" alt=""  width="580" height="217"></a>
							<div>
								<h1> Jaadu Tone ka Sach </h1>
                                                                <p>On the occasion of National Science day, we wanted to start a fight against the

superstitions. Thus The Astro Club, and CGVS-Bhilai unit collaborated with BSP and chose

Gram Patora, to demonstrate the school students and public, how they are fooled by the

thugs and so called tantrik babas.</p>
                                                                    <a href="#" class="more">Read More</a>
							</div>
						</li>
						 <li>
                                                    <a href="#"><img src="images/activities/mercury.jpg" alt=""  width="580" height="217"></a>
							<div>
								<h1>Mercury transit</h1>
                                                                <p>A transit of Mercury across the Sun takes place when Mercury passes directly

between the Sun and the Earth. The event was organized to observe the transit and to study

the path of the Mercury during the transit, between 4 PM to Sunset. Students from BIT-D as

well as nearby schools like KV and DPS also enjoyed the evening.</p>
                                                                    <a href="#" class="more">Read More</a>
							</div>
						</li>
                                                 <li>
                                                    <a href="#"><img src="images/activities/taramandal.jpg" alt=""  width="580" height="217"></a>
							<div>
								<h1> The Planetarium Show</h1>
                                                                <p>In the deep space there are trillions of stars. The group of stars make

Constellations. Some of these constellations are called as Zodiacs. The Planetarium show,

Tour de Spatiale, was organized to provide a map of sky in a virtual space. More than 400

people enjoyed the details provided in the show.</p>
                                                                    <a href="#" class="more">Read More</a>
							</div>
						</li>
                                                
                                                
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
                <div class="connect">
                    <div>
                        <h1>FOLLOW OUR  MISSIONS ON</h1>
                        <div>
                            <a href="https://www.facebook.com/ASTROatBITD/" target="_blank" class="facebook">facebook</a>
                            <a href="https://twitter.com/The_Astro_Club/" target="_blank" class="twitter">twitter</a>
                            <a href="https://plus.google.com/u/0/113075022986174870182/" target="_blank" class="googleplus">googleplus</a>

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