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
					<h1>Our Team</h1>
					<ul>
                                            <li>
                                                    <a href="#"><img src="images/team/robinson.jpg" alt=""  width="380" height="217"></a>
							<div>
								<h1>C S Robinson</h1>
                                                                <p> The one who is the reason behind The Astro Club. A physics professor by profession, preacher by interest and  a farmer by hobby. He can make a grade 5 student understand Relativity better than a BSc Student. He is the one who shields all of us from all the odds and gives credit to the team whenever club achieves something good. Above everything, unarguably he is a great human with the greatest heart. Wish there were professors all over the nation like him. </p>
                                                                <a href="https://www.facebook.com/aditya.singh.923" class="more">Read More</a>
							</div>
						</li>
						<li>
                                                    <a href="https://www.facebook.com/aditya.singh.923"><img src="images/team/aditya.jpg" alt=""  width="380" height="217"></a>
							<div>
								<h1>Aditya Singh Chauhan</h1>
                                                                <p> The one who started it all. An astronomy enthusiast whose first love is Astronomy and Second Coding.  His hobbies include gazing stars and writing poetry. A workaholic by nature, he panics when he doesn't have anything to do. He's passionate about social issues like Education and Health Care and dreams of solving these issues with the power of Computers.</p>
                                                                <a href="https://www.facebook.com/aditya.singh.923" class="more">Read More</a>
							</div>
						</li>
						<li>
							<a href="https://www.facebook.com/ashutosh.deshpande1"><img src="images/team/ashutosh.jpg" alt="" width="380" height="217"></a>
							<div>
								<h1>Ashutosh Deshpande</h1>
                                                                <p>The one who has now taken over at BIT,Durg. He is a nerd, a walking calendar, a calculator, and the periodic table. He will rap whole of periodic table just in 25 secs (if you can understand what he says ;) ). He loves to play Piano, Chess, and Badminton. He has studied Electronics as well as Computer Science. He loves to gaze at stars whenever he gets free time.</p>
                                                                <a href="https://www.facebook.com/aaditya.deshpande2" class="more">Read More</a>
							</div>
						</li>
                                                <li>
							<a href="https://m.facebook.com/swarnika.dwivedi"><img src="images/team/swarnika.jpg" alt="" width="380" height="217"></a>
							<div>
								<h1>Swarnika Dwivedi</h1>
                                                                <p>She is an electronic engineer who is also interested in astronomy. She loves to read novels. Food and novels are the only thing that can cure her stress. She is a national level roller skater. </p>
                                                                <a href="https://m.facebook.com/swarnika.dwivedi" class="more">Read More</a>
							</div>
						</li>
                                              
                                                <li>
							<a href="https://www.facebook.com/sakshi.jha.7737"><img src="images/team/sakshi.jpg" alt="" width="380" height="217"></a>
							<div>
								<h1>Sakshi Jha</h1>
                                                               
                                                                <p>
                                                                    The one who is always ready to volunteer no matter what the event is. A perfection freak and most polite one in the group.
Her cool and calm personality makes her easy to talk to. She is quick witted. And will tickle your funny bone when she is in a good mood..!!
                                                                </p><a href="https://www.facebook.com/sakshi.jha.7737" class="more">Read More</a>
							</div>
                                                </li>
                                                <li>
                                                    <a href="https://www.facebook.com/profile.php?id=100001005408482"><img src="images/team/sachi.jpg" alt="" width="380" height="217"></a>
                                                    <div>
                                                        <h1>Sachi</h1>
                                                        <p>The one who’s a CRICKET buff. Electronics engineer fascinated by astronomy

                                                            .Keen to learn new things and wants to travel the world.Gregarious, amiable and fluent in sarcasm

                                                            .Baking is her therapy and likes to end her day with an episode of F.R.I.E.N.D.S. .Lives by the

                                                            quote “Whatever happens ,happens for a reason”.</p>
                                                        <a href="https://www.facebook.com/profile.php?id=100001005408482" class="more">Read More</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="https://www.facebook.com/sujoy.mukharjee"><img src="images/team/sujoy.jpg" alt="" width="380" height="217"></a>
                                                    <div>
                                                        <h1>Sujoy Mukherjee</h1>
                                                        <p>The born diplomat, passionate, carefree philosopher with very healthy optimism. He is an indigenous strategist and a big time foodie.  The one with very good teaching skills. His hobbies include gazing stars, loves adventures.</p>
                                                        <a href="https://www.facebook.com/sujoy.mukharjee" class="more">Read More</a>
							</div>
						</li>
                                                
                                                 <li>
							<a href="https://www.facebook.com/harish.1104"><img src="images/team/harish.jpg" alt="" width="380" height="217"></a>
							<div>
								<h1>Harish Gavel</h1>
                                                                <p>The one who is always busy with his engineering weapons and coding mind. Robotics is his  love and electronic gadgets his companions .Remains quite indulged in his "the astronomer" related stuffs. Cant sit idle , has to do something or the other,yes a workaholic. The left out time is devoted to his large circle of friends. Tries to enjoy every single moment of his life what soever be the circumstances.</p>
                                                                <a href="https://www.facebook.com/harish.1104" class="more">Read More</a>
							</div>
						</li>
                                                 <li>
							<a href="https://www.facebook.com/profile.php?id=100002339713244"><img src="images/team/arhum.jpg" alt="" width="380" height="217"></a>
							<div>
								<h1>Arhum Ahmad</h1>
                                                                <p>One who believes in punctuality and hardwork runs in his blood. Curiosity is what drives him from within. He loves experimenting new things and earning knowledge. As hobbies he likes reading detective novels, playing football, sky watching and observing things in outer space. He also is a very good listener. He has dreams much  taller than his height. He follows the phrase "Be the change you want to see".</p>
                                                                <a href="https://www.facebook.com/profile.php?id=100002339713244" class="more">Read More</a>
							</div>
						</li>
                                                  <li>
							<a href="https://www.facebook.com/profile.php?id=100002339713244"><img src="images/team/akansha.jpg" alt="" width="380" height="217"></a>
							<div>
								<h1>Akanksha Vishwakarma</h1>
                                                                
                                                                <p>The one who is passionate to learn new things. She knows how to create something new, out of the garbage. She owns good sense of humour. She loves singing when alone and studying about the new phenomenon.</p>
                                                                <a href="https://www.facebook.com/profile.php?id=100002339713244" class="more">Read More</a>
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