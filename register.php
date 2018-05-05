<?php
$db=mysqli_connect('localhost','root','','onlineshopping');
$current_file= $_SERVER['SCRIPT_NAME'];
require 'core.inc.php';
if(!loggedin())
{
	header('Location: register_form.php');
}
else if(loggedin())
{
	echo 'You are registered and logged in';
}
?>

