<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<?php
session_start();
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_TYPE']);
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

                        <h2>Login</h2>
                         <p>

                            <!--the code bellow is used to display the message of the input validation-->
                            <?php
                            if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
                                echo '<ul class="err">';
                                foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
                                    echo '<li><p ><b>' . $msg . '</b></p></li>';
                                }
                                echo '</ul>';
                                unset($_SESSION['ERRMSG_ARR']);
                            }
                            ?>

                        </p>
                        <form action="login_exec.php" method="post">
                            <input type="text" name="email" value="Email" onblur="this.value = !this.value ? 'Email' : this.value;" onfocus="this.select()" onclick="this.value = '';">
                            <input type="password" name="password" value="Password" onblur="this.value = !this.value ? 'Password' : this.value;" onfocus="this.select()" onclick="this.value = '';">
                            <input type="submit" value="Log In" id="submit" name="submit">
                        </form>
                        
                       
                    </div>
                    <div>
                        <p>
                            Not registered yet ? Click <a href='registration.php'>here</a> to register...
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