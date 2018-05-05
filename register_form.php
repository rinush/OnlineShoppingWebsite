<?php
include 'core.inc.php';
$db=mysqli_connect('localhost','root','','onlineshopping');
if(isset($_POST['customername']) && isset($_POST['contact']) && isset($_POST['emailid']) && isset($_POST['pass']) && isset($_POST['country'])
	&& isset($_POST['state']) && isset($_POST['district']) && isset($_POST['address']))
	{
		if(!empty($_POST['customername']) && !empty($_POST['contact']) && !empty($_POST['emailid']) && !empty($_POST['pass']) && !empty($_POST['country'])
	&& !empty($_POST['state']) && !empty($_POST['district']) && !empty($_POST['address'])){
		$customername=$_POST['customername'];
		$contact=$_POST['contact'];
		$email_id=$_POST['emailid'];
		$password=$_POST['pass'];
		$country=$_POST['country'];
		$state=$_POST['state'];
		$district=$_POST['district'];
		$address=$_POST['address'];
		$query="SELECT email_id,password from users where email_id='$email_id' AND password='$password'";
		$query_run=mysqli_query($db,$query);
		if($rows=mysqli_num_rows($query_run))
		{
			echo 'This email_id already exists';
		}
		else{
			$query="INSERT INTO customers VALUES ('','".mysqli_real_escape_string($db,$customername)."','".mysqli_real_escape_string($db,$email_id)."',
			'".mysqli_real_escape_string($db,$password)."','".mysqli_real_escape_string($db,$contact)."',
		    '".mysqli_real_escape_string($db,$country)."','".mysqli_real_escape_string($db,$state)."',
			'".mysqli_real_escape_string($db,$district)."','".mysqli_real_escape_string($db,$address)."')";
			if($query_run=mysqli_query($db,$query)){
				header('Location: register_success.php');
			}
			else{
				echo 'Could not Register';
			}
		}
	}
	else{
		echo 'All fields are required';
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

#d1 select{
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

#d2{
position:absolute;
top:200px;
left:20%;
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}

.a
{
width:45%; 
height:auto;
margin-left:20px;
float:left;}
.a input[type=text],input[type=tel],input[type=email],input[type=password]{
    width: 100%;
    padding: 15px 20px;
    margin: 15px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
	float:left;
}

textarea {
    width: 100%;
    height: 100px;
    padding: 10px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}

.b{
width:45%;
height:auto;
margin-left:10px;
}

.b input[type=reset],input[type=submit]{
    width: 100%;
    padding: 15px 20px;
    margin: 15px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
	float:left;
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
<div id="d2" style="width:950px; height:750px; position:relative; background-color: #00004d;">
<h1>REGISTRATION FORM</h1>
<hr>
<h2>CUSTOMER INFORMATION</h2>
<hr>
<div class="a" style="float:left;">NAME<br><input type="text" name="customername" required style=" width:43%; padding: 15px 20px; display: inline-block; border: 1px solid #ccc; border-radius: 4px; float:left;"></div>
<div class="a" style="float:left;">CONTACT_NO.<br><input type="tel" name="contact" maxlength="10" required><br></div>
<div class="a" style="float:left;">EMAIL_ID<input type="email" name="emailid" required></div>
<div class="a" style="float:left;">PASSWORD<input type="password" name="pass" required></div>
<h2>ADDRESS INFORMATION</h2><hr><br>
<div class="a" style="float:left;">COUNTRY
<select required name="country" style=" width:40%; padding: 15px 20px; margin:30px 0px 0px -80px; display: inline-block; border: 1px solid #ccc; border-radius: 4px; float:left;">
<option selected>India</option>
</select></div>
<div class="a" style="float:left;">STATE
<select required name="state" style=" width:40%; padding: 15px 20px; margin:30px 0px 0px -50px; display: inline-block; border: 1px solid #ccc; border-radius: 4px; float:left;">
<option selected>Rajasthan</option>
</select></div>
<div class="a" style="float:left; margin-top:80px;" name="district">
DISTRICT
<select required name="district" style=" width:40%; padding: 15px 20px; margin:30px 0px 0px -80px; display: inline-block; border: 1px solid #ccc; border-radius: 4px; float:left;">
<option selected>Jaipur</option>
</select></div>
<div class="a" style="float:left; margin-top:70px;" name="address">ADDRESS
<textarea name="address"></textarea></div>
<div class="b" style="float:left;"><input type="reset"></div>
<div class="b" style="float:left;"><input type="submit" value="Register"></div>
</form>
</div>
</div>
</body>
</html>