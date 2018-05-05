<?php
include 'core.inc.php';
if (isset($_POST['a1'])) 
{
 $_SESSION['saep8']=$_POST['a1'];
 $_SESSION['saep8_id']='saep8';
 $_SESSION['saep8_price']=280;
 $_SESSION['saep8_num']=$_POST['num']; 
}
else if(isset($_POST['a2']))
{
 $_SESSION['saep8']='';
 $_SESSION['saep8_id']='';
 $_SESSION['saep8_price']=0;
 $_SESSION['saep8_num']=''; 
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
</form>
</div>
<form action="" method="POST">
<img src="img/saep8.jpg" width="150px" style="float:left;"><span style="font-size:30px; float:left; margin-left:100px; margin-top:40px; color:blue;">Price: Rs 200</span >
<h3 style="font-size:30px; margin-top:100px; float:left; margin-left:-100px;">DESCRIPTION</h3>
<p style="font-size:30px; margin-top:140px; float:left; margin-left:-140px;">Recommended in the ancient Sahastrayogam Ayurveda text for lush and healthy hair.<br>
Prevents hair loss and thickens hair while adding body and shine.<br> Removes loose dandruff flakes and is naturally conditioning.</p>
<h3 style="font-size:30px; margin-top:300px; float:left; margin-left:-1080px;">BENIFITS</h3>
<p style="font-size:30px; margin-top:80px; float:left; margin-left:-140px;">A 100% natural treatment, prevents hair loss, dandruff and promotes hair growth.</p><br><br><br><br>
<span style="font-size:30px; margin-top:140px; float:left; margin-left:-980px; font-weight:bold;">Quantity</span><br><input type="number" name="num" value="1" style="width:200px; border-radius:5px; height:40px; font-size:24px; margin-top:380px; margin-left:-1080px;"><br>
<input type="submit" value="Add To Cart" id="saep8" name="a1" style="width:200px; border-radius:5px; height:50px;font-size:24px; margin-top:100px; float:left; margin-left:100px;">
<input type="submit" value="Remove" id="a2" name="a2" style="width:200px; border-radius:5px; height:50px; font-size:24px; margin-top:100px; float:left; margin-left:140px;">
</form>

</body>
</html>