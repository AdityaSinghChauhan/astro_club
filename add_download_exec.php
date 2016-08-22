
    <?php
    // Check if a file has been uploaded
    $dbLink = new mysqli('localhost', 'root', 'root', 'astro_club');
            if(mysqli_connect_errno()) {
                die("MySQL connection failed: ". mysqli_connect_error());
            }
    if(isset($_FILES['uploaded_file'])) {
        // Make sure the file was sent without errors
        if($_FILES['uploaded_file']['error'] == 0) {
            // Connect to the database
           
     
            // Gather all required data
            $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
            $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
            $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
            $size = intval($_FILES['uploaded_file']['size']);
     $about = $_REQUEST['about'];
            // Create the SQL query
            $query = "
                INSERT INTO `book` (
                    `name`, `mime`, `size`, `data`,`about`, `created`
                )
                VALUES (
                    '{$name}', '{$mime}', {$size}, '{$data}','{$about}', NOW()
                )";
     
            // Execute the query
            $result = $dbLink->query($query);
     
            // Check if it was successfull
            if($result) {
                echo 'Success! file was successfully added!';
                $flag=true;
            }
            else {
                echo 'Error! Failed to insert the file'
                   . "<pre>{$dbLink->error}</pre>";
                   $flag=false;
            }
        }
        else {
            echo 'An error accured while the file was being uploaded. '
               . 'Error code: '. intval($_FILES['uploaded_file']['error']);
            $flag=false;
        }
     
        // Close the mysql connection
        
    }
    else {
        echo 'Error! file was not sent!';
        $flag=false;
    }
    
 
    
    
    if($flag==true)
    {
        $dbLink->close();
        header("location: add_download.php?remarks=success");
    }
    $dbLink->close();
     
     
?>
