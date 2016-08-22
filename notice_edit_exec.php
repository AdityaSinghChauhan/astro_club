<?php
require_once 'auth_admin.php';
     include 'connection.php';
$notice1=$_REQUEST['notice1'];
$link1=$_REQUEST['link1'];
$notice2=$_REQUEST['notice2'];
$link2=$_REQUEST['link2'];
$notice3=$_REQUEST['notice3'];
$link3=$_REQUEST['link3'];
$notice4=$_REQUEST['notice4'];
$link4=$_REQUEST['link4'];
$notice5=$_REQUEST['notice5'];
$link5=$_REQUEST['link5'];

mysql_query("update notice_astro set notice_1='$notice1',notice_2='$notice2',notice_3='$notice3',notice_4='$notice4',notice_5='$notice5',link_1='$link1',link_2='$link2',link_3='$link3',link_4='$link4',link_5='$link5'");

header("location: notice_edit.php?remark=success");
?>
