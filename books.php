<?php
include 'core.inc.php';
if(!loggedin()){
	header('Location: login.php');
}
else
{
 header('Location: books.html');
}
?>