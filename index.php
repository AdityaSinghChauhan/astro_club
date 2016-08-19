<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<?php
session_start();
$log = "Login";
$link = "login.php";
if (isset($_SESSION['SESS_FIRST_NAME'])) {
    $log = "Logout " . $_SESSION['SESS_FIRST_NAME'];
    $link = "logout.php";
}
include 'connection.php';
$query = mysql_query("select * from notice_astro ");
$row = mysql_fetch_array($query);
$notice1 = $row['notice_1'];
$link1 = $row['link_1'];
$notice2 = $row['notice_2'];
$link2 = $row['link_2'];
$notice3 = $row['notice_3'];
$link3 = $row['link_3'];
$notice4 = $row['notice_4'];
$link4 = $row['link_4'];
$notice5 = $row['notice_5'];
$link5 = $row['link_5'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Astro Club</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/mobile.css">
        <script src="js/mobile.js" type="text/javascript"></script>
        <style type="text/css">

            #marqueecontainer{
                position: relative;
                width: 400px; /*marquee width */
                height: 250px; /*marquee height */
                background-color: transparent;
                overflow: hidden;
                border: 1px solid whitesmoke;
                padding: 2px;
                padding-left: 4px;

            }

        </style>
       
        <script type="text/javascript">

            /***********************************************
             * Cross browser Marquee II- © Dynamic Drive (www.dynamicdrive.com)
             * This notice MUST stay intact for legal use
             * Visit http://www.dynamicdrive.com/ for this script and 100s more.
             ***********************************************/

            var delayb4scroll = 2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
            var marqueespeed = 2 //Specify marquee scroll speed (larger is faster 1-10)
            var pauseit = 1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

            var copyspeed = marqueespeed
            var pausespeed = (pauseit == 0) ? copyspeed : 0
            var actualheight = ''

            function scrollmarquee() {
                if (parseInt(cross_marquee.style.top) > (actualheight * (-1) + 8))
                    cross_marquee.style.top = parseInt(cross_marquee.style.top) - copyspeed + "px"
                else
                    cross_marquee.style.top = parseInt(marqueeheight) + 8 + "px"
            }

            function initializemarquee() {
                cross_marquee = document.getElementById("vmarquee")
                cross_marquee.style.top = 0
                marqueeheight = document.getElementById("marqueecontainer").offsetHeight
                actualheight = cross_marquee.offsetHeight
                if (window.opera || navigator.userAgent.indexOf("Netscape/7") != -1) { //if Opera or Netscape 7x, add scrollbars to scroll and exit
                    cross_marquee.style.height = marqueeheight + "px"
                    cross_marquee.style.overflow = "scroll"
                    return
                }
                setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
            }

            if (window.addEventListener)
                window.addEventListener("load", initializemarquee, false)
            else if (window.attachEvent)
                window.attachEvent("onload", initializemarquee)
            else if (document.getElementById)
                window.onload = initializemarquee


        </script>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=923737884378183";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
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
            <div id="body" class="home">
                <div class="header">
                    <div>
                                <img src="images/telescope.png" alt="" class="satellite">
                        <h1>The Astro Club</h1>

                        <h3>FEATURED ACTIVITIES</h3>
                        <ul>
                            <li>
                                <a href="activities.php"><img src="images/aditya_astro_patrika(1).jpg" alt="" height="156" width="235"></a>
                            </li>
                            <li>
                                <a href="activities.php"><img src="images/aditya_astro_patrika(1).jpg" alt="" height="156" width="235"></a>
                            </li>
                            <li>
                                <a href="activities.php"><img src="images/aditya_astro_patrika(1).jpg" alt="" height="156" width="235"></a>
                            </li>
                            <li>
                                <a href="activities.php"><img src="images/aditya_astro_patrika(1).jpg" alt="" height="156" width="235"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="body">
                    <div>
                        <h1>OUR MISSION</h1>
                        <p>Eradication of superstitions from amongst the society and to inculcate scientific temperament in the youth</p>
                    </div>
                </div>
                <div class="footer">
                    <div>
                        <ul>
                            <li>
                                <h1>What's New</h1>
                                <br><br>
                                <div id="marqueecontainer" onMouseover="copyspeed = pausespeed" onMouseout="copyspeed = marqueespeed">
                                    <div id="vmarquee" style="position: absolute; width: 98%;">

                                        <!--YOUR SCROLL CONTENT HERE-->

                                        <a style="color:whitesmoke;" href="<?php echo $link1; ?>"><h4><?php echo $notice1; ?></h4></a>
                                        <a style="color:whitesmoke;" href="<?php echo $link2; ?>"><h4><?php echo $notice2; ?></h4></a>
                                        <a style="color:whitesmoke;" href="<?php echo $link3; ?>"><h4><?php echo $notice3; ?></h4></a>
                                        <a style="color:whitesmoke;" href="<?php echo $link4; ?>"><h4><?php echo $notice4; ?></h4></a>
                                        <a style="color:whitesmoke;" href="<?php echo $link5; ?>"><h4><?php echo $notice5; ?></h4></a>

                                        <!--YOUR SCROLL CONTENT HERE-->

                                    </div>
                                </div>
                            </li>
                            <li>
                                <h1>Facebook</h1>
                                <div class="fb-page" data-href="https://www.facebook.com/ASTROatBITD/" data-tabs="timeline" data-width="400" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ASTROatBITD/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ASTROatBITD/">The Astro Club</a></blockquote></div>
                            </li>
                            <li>
                                <h1>Twitter</h1>
                                <!--                                <ul>
                                                                    <li>
                                                                        <a href="blog.html"><img src="images/finding-planet.jpg" alt=""></a>
                                                                        <h1>FINDING PLANET X-123</h1>
                                                                        <span>FEBRUARY 6, 2023</span>
                                                                        <a href="blog.html" class="more">Read More</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog.html"><img src="images/new-satellitedish.jpg" alt=""></a>
                                                                        <h1>NEW SATELLITE DISH</h1>
                                                                        <span>FEBRUARY 3, 2023</span>
                                                                        <a href="blog.html" class="more">Read More</a>
                                                                    </li>
                                                                </ul>-->
                                <br><br>
                                <a class="twitter-timeline" data-width="400" data-height="300" data-theme="dark" href="https://twitter.com/The_Astro_Club">Tweets by Astro Club</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
                            <li>
                                <h1>Associated Bodies</h1>
                                <br><br>
                                <ul>
                                    <li><a href="http://cgvigyansabha.in" target="_blank"><h1>Chhattigarh Vigyan Sabha</h1></a></li>
                                    <li><a href="http://vigyanprasar.gov.in" target="_blank"><h1> Vigyan Prasar</h1></a></li>
                                    <li><a href="http://www.aipsc.in/" target="_blank"><h1> AIPSN</h1></a></li>
                                    <li><a href="http://www.astron-soc.in/" target="_blank"><h1> A.S.I.</h1></a></li>

                                </ul>
                                <br><br>
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
    <ul id="about" class="flexdropdownmenu">

        <ul>
            <ul id="activity" class="flexdropdownmenu">

                <ul>
                    </html>