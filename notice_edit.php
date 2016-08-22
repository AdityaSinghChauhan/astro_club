<?php
session_start();
$log = "Login";
$link = "login.php";
require_once 'auth_admin.php';
if (isset($_SESSION['SESS_FIRST_NAME']) && $_SESSION['SESS_TYPE']=="admin") {
    $log = "Logout " . $_SESSION['SESS_FIRST_NAME'];
    $link = "logout.php";
} else {
    header('location: login.php');
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
                    <div class="contact">
					<h1>Notice Edit</h1>
					
                                        <form action="notice_edit_exec.php" method="post">
						<input type="text" name="notice1" value="<?php echo $notice1; ?>" onblur="this.value=!this.value?'<?php echo $notice1; ?>':this.value;" onfocus="this.select()" onclick="this.value='';">
                                                <input type="text" name="link1" value="<?php echo $link1; ?>" onblur="this.value=!this.value?'<?php echo $link1; ?>':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="notice2" value="<?php echo $notice2; ?>" onblur="this.value=!this.value?'<?php echo $notice2; ?>':this.value;" onfocus="this.select()" onclick="this.value='';">
                                                <input type="text" name="link2" value="<?php echo $link2; ?>" onblur="this.value=!this.value?'<?php echo $link2; ?>':this.value;" onfocus="this.select()" onclick="this.value='';">
                                                <input type="text" name="notice3" value="<?php echo $notice3; ?>" onblur="this.value=!this.value?'<?php echo $notice3; ?>:this.value;" onfocus="this.select()" onclick="this.value='';">
                                                <input type="text" name="link3" value="<?php echo $link3; ?>" onblur="this.value=!this.value?'<?php echo $link3; ?>':this.value;" onfocus="this.select()" onclick="this.value='';">
                                                <input type="text" name="notice4" value="<?php echo $notice4; ?>" onblur="this.value=!this.value?'<?php echo $notice4; ?>':this.value;" onfocus="this.select()" onclick="this.value='';">
                                                <input type="text" name="link4" value="<?php echo $link4; ?>" onblur="this.value=!this.value?'<?php echo $link5; ?>':this.value;" onfocus="this.select()" onclick="this.value='';">
                                                <input type="text" name="notice5" value="<?php echo $notice5; ?>" onblur="this.value=!this.value?'<?php echo $notice5; ?>':this.value;" onfocus="this.select()" onclick="this.value='';">
                                                <input type="text" name="link5" value="<?php echo $link5; ?>" onblur="this.value=!this.value?'<?php echo $link5; ?>':this.value;" onfocus="this.select()" onclick="this.value='';">
                                                <input type="submit" name="submit" value="Edit" id="submit">
					</form>
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