<?php

session_start();
include 'connection.php';
$email = $_REQUEST['email'];

//check if the email already exists in the database
$query = mysql_query("select email from users where email='$email' ");
$row = mysql_fetch_array($query);
if ($row) {

    $err_msg = "An account with same email address registered already";
    $_SESSION['ERRMSG_ARR'] = $err_msg;
    header("location: registration.php?remarks=email_already_registered");
} else {
    //code for inserting values in the table
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $password = $_REQUEST['password'];
    $mobile = $_REQUEST['contact'];
    $college = $_REQUEST['organisation'];
    $message = $_REQUEST['message'];
    $address = $_REQUEST['address'];
    
     
    
    
    if ($email == "" || $fname == "" || $lname == "" || $password == "" || $mobile == "" || $college == "" || $message == "") {
        $err_msg = "Please fill the details appropriately";
        $_SESSION['ERRMSG_ARR'] = $err_msg;
        header("location: registration.php?remarks=please_fill_details");
    } else {
        mysql_query("INSERT INTO users(email, fname, lname, password,  contact, organisation, message, address) VALUES('$email', '$fname', '$lname', '$password', '$contact', '$college', '$message', '$address')") or die("faulty query");
        
        header("location: login.php?remarks=success");
    }
}
?>
