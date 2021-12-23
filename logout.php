<?php 

session_start();

if(isset($_SESSION['college_userid']))
{
	$_SESSION['college_userid'] = NULL;
	unset($_SESSION['college_userid']);

}

header("Location: login.php");
die;
