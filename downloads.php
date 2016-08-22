<?php
session_start();
$log = "Login";
$link = "login.php";
if (isset($_SESSION['SESS_FIRST_NAME'])) {
    $log = "Logout " . $_SESSION['SESS_FIRST_NAME'];
    $link = "logout.php";
} else {
    header('location: login.php');
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
                    <div class="download">
                        <h1>Downloads</h1>


<?php
// Connect to the database
$dbLink = new mysqli('localhost', 'root', 'root', 'astro_club');
if (mysqli_connect_errno()) {
    die("MySQL connection failed: " . mysqli_connect_error());
}

// Query for a list of all existing files
$sql = 'SELECT `id`, `name`, `mime`, `size`, `created`, `about` FROM `book`';
$result = $dbLink->query($sql);

// Check if it was successfull
if ($result) {
    // Make sure there are some files in there
    if ($result->num_rows == 0) {
        echo '<p>There are no downloads in the database...</p><br>';
    } else {
        // Print the top of a table
        // Print each file
        echo '<ul>';
        while ($row = $result->fetch_assoc()) {
            echo "
                   
            <li>
            <a href = 'get_download.php?id={$row['id']}'><img src = 'images/downloads.png' alt = '' width = '380' height = '217'></a>
            <div>
            <h1>{$row['name']}</h1>
            <p> {$row['about']}  </p>
            <a href = 'get_download.php?id={$row['id']}' class = 'more'>Download</a>
            </div>
            </li>";
        }

        // Close table
        echo '</ul>';
    }

    // Free the result
    $result->free();
} else {

    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}

// Close the mysql connection
$dbLink->close();
?>






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