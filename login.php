<?php
require 'core.inc.php';
$db=mysqli_connect('localhost','root','','onlineshopping');
if(isset($_POST['emailid'])&&isset($_POST['pass']))
{
	$_SESSION['emailid']=$_POST['emailid'];;
	$username=$_POST['emailid'];
	$password=$_POST['pass'];
	if(!empty($username) && !empty($password))
	{
		$query="Select id from customers WHERE email_id='$username' AND password='$password'";
		if($query_run=mysqli_query($db,$query))
		{
			 $rowcount=mysqli_num_rows($query_run);
			 if($rowcount==0)
			 {
				 echo 'Incorrect username/password combination  <a href="login.php">Try again</a> or <a href="register_form.php">Register</a>';
			 }
			 else
			 {   
				 while($query_row=mysqli_fetch_assoc($query_run))
				 {
					  $user_id=$query_row['id'];
					  $_SESSION['user_id']=$username;
					 //echo 'Logged In <a href="logout.php">Log Out</a>'; 
					  header('Location: home.html');
				 }				 
			 }
		}
	}	
	else
	{
		echo 'You must supply a username and password.';
	}
    
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

#d1{
width:100%;
height:100px;
background-color: #00004d;
font-weight:bold;
color:white;
}

input[type=text]{
position:absolute;
width:60%;
margin:10px 0px 0px 100px;
border-radius:2px;
border-right:2px solid black;
padding:2px;
}

select{
position:absolute;
margin:10px 0px 0px 100px;
border-radius:2px;
z-index:2;
padding:3px;
background-color:#b8b894;
}

#d1 i{
margin:10px 0px 0px 65%;
position:absolute;
padding:4px;
z-index:2;
background-color:#ffaa00;
}

#d1 i:hover{
margin:10px 0px 0px 65%;
position:absolute;
padding:4px;
z-index:2;
background-color: #e69900;
}

.a
{
width:45%; 
height:auto;
margin-left:20px;
float:left;
}

.a input[type=email],input[type=password],input[type=reset],input[type=submit]
{
    width: 100%;
    padding: 15px 20px;
    margin: 15px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
	float:left;
}

#d2{
position:absolute;
top:200px;
left:20%;
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}

</style>
</head>
<body>
<div id="d1">
<form action="" method="POST">
<input type="text"> 
<select id="toselect" onchange="selection()">
<option selected>All Categories</option>
<option value="beauty">Beauty</option>
<option>Books</option>
<option>Car and Motorbike</option>
<option>Clothing and Accessories</option>
<option>Electronics</option>
<option>Toys</option>
<option>GiftCards</option>
<option>Home and Kitchen</option>
<option>Jewellery</option>
<option>Luggage and Bags</option>
<option>Shoes</option>
<option>Watches</option>
</select>
<i class="fa fa-search"></i>
<div id="d2" style="width:950px; height:250px; position:relative; background-color: #00004d;">
<h1>Log In</h1>
<div class="a" style="float:left;">USER_NAME<input type="email" name="emailid" required></div>
<div class="a" style="float:left;">PASSWORD<input type="password" name="pass" required></div>
<div class="a" style="float:left;"><input type="reset"></div>
<div class="a" style="float:left;"><input type="submit" value="Log In"></div>
</div>
</form>
</div>
</body>
</html>