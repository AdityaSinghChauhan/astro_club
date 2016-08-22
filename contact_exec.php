<?php
session_start();
include 'connection.php';
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$msg=$_REQUEST['message'];
mysql_query("INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$msg')");
$msg2=$name." ".$email." ".$msg;
$msg2 = wordwrap($msg2,700);
// send email
mail("astro.bitd@gmail.com",$subject,$msg2);
echo "<script>alert('Message successfully submitted');</script>";
 $err_msg = "Message successfully sent";
    $_SESSION['ERRMSG_ARR'] = $err_msg;
header("location: contact.php?remark=success");

?>