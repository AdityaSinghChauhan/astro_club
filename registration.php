<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<?php 
session_start();
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
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li class="menu">
                            <a href="activities.php">Activities</a>
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
                            <a href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="body">
                <div class="header">
                    <div class="contact">
                        <h1>Registration</h1>
                        <h2>You are just a step away from an exciting experience...</h2>
                         <p>

                            <!--the code bellow is used to display the message of the input validation-->
                            <?php
                            if(isset($_SESSION['ERRMSG_ARR'])){
                                    echo '<p style="color:red;" ><b>' . $_SESSION['ERRMSG_ARR'] . '</b></p>';
                                
                                unset($_SESSION['ERRMSG_ARR']);
                            }
                            ?>

                        </p>
                        <form action="registration_exec.php" method="post">
                            <input type="text" name="fname" value="First Name" onblur="this.value = !this.value ? 'First Name' : this.value;" onfocus="this.select()" onclick="this.value = '';">
                            <input type="text" name="lname" value="Last Name" onblur="this.value = !this.value ? ' Last Name' : this.value;" onfocus="this.select()" onclick="this.value = '';">
                            
                            <input type="text" name="email" value="Email Address" onblur="this.value = !this.value ? 'Email Address' : this.value;" onfocus="this.select()" onclick="this.value = '';">
                            <input type="password" name="password" value="Choose a password" onblur="this.value = !this.value ? 'Choose a password' : this.value;" onfocus="this.select()" onclick="this.value = '';">
                            <input type="password" name="password2" value="Confirm Password" onblur="this.value = !this.value ? 'Confirm Password' : this.value;" onfocus="this.select()" onclick="this.value = '';">
                            <input type="text" name="contact" value="Contact" onblur="this.value = !this.value ? 'Contact' : this.value;" onfocus="this.select()" onclick="this.value = '';">
                            <input type="text" name="organisation" value="College/School/Organisation" onblur="this.value = !this.value ? 'College/School/Organisation' : this.value;" onfocus="this.select()" onclick="this.value = '';">
                            <textarea name="address" cols="50" rows="7">Address...</textarea>
                            <textarea name="message" cols="50" rows="7">Tell us what excites you to join the club ?</textarea>
                            <input type="submit" value="Register" id="submit" name="register">
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