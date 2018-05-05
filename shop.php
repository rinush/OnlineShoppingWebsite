<?php
include 'core.inc.php';
$amount=0;
for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['bae'.$i]) && !empty($_SESSION['bae'.$i])){
   echo "Price of ".$_SESSION['bae'.$i.'_id'].' is '.$_SESSION['bae'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['bae'.$i.'_id'].' is '.$_SESSION['bae'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['bae'.$i.'_price'])*($_SESSION['bae'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['laf'.$i]) && !empty($_SESSION['laf'.$i])){
   echo "Price of ".$_SESSION['laf'.$i.'_id'].' is '.$_SESSION['laf'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['laf'.$i.'_id'].' is '.$_SESSION['laf'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['laf'.$i.'_price'])*($_SESSION['laf'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['romnc'.$i]) && !empty($_SESSION['romnc'.$i])){
   echo "Price of ".$_SESSION['romnc'.$i.'_id'].' is '.$_SESSION['romnc'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['romnc'.$i.'_id'].' is '.$_SESSION['romnc'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['romnc'.$i.'_price'])*($_SESSION['romnc'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['cat'.$i]) && !empty($_SESSION['cat'.$i])){
   echo "Price of ".$_SESSION['cat'.$i.'_id'].' is '.$_SESSION['cat'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['cat'.$i.'_id'].' is '.$_SESSION['cat'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['cat'.$i.'_price'])*($_SESSION['cat'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['cya'.$i]) && !empty($_SESSION['cya'.$i])){
   echo "Price of ".$_SESSION['cya'.$i.'_id'].' is '.$_SESSION['cya'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['cya'.$i.'_id'].' is '.$_SESSION['cya'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['cya'.$i.'_price'])*($_SESSION['cya'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['scif'.$i]) && !empty($_SESSION['scif'.$i])){
   echo "Price of ".$_SESSION['scif'.$i.'_id'].' is '.$_SESSION['scif'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['scif'.$i.'_id'].' is '.$_SESSION['scif'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['scif'.$i.'_price'])*($_SESSION['scif'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['bam'.$i]) && !empty($_SESSION['bam'.$i])){
   echo "Price of ".$_SESSION['bam'.$i.'_id'].' is '.$_SESSION['bam'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['bam'.$i.'_id'].' is '.$_SESSION['bam'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['bam'.$i.'_price'])*($_SESSION['bam'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['iw'.$i]) && !empty($_SESSION['iw'.$i])){
   echo "Price of ".$_SESSION['iw'.$i.'_id'].' is '.$_SESSION['iw'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['iw'.$i.'_id'].' is '.$_SESSION['iw'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['iw'.$i.'_price'])*($_SESSION['iw'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['saep'.$i]) && !empty($_SESSION['saep'.$i])){
   echo "Price of ".$_SESSION['saep'.$i.'_id'].' is '.$_SESSION['saep'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['saep'.$i.'_id'].' is '.$_SESSION['saep'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['saep'.$i.'_price'])*($_SESSION['saep'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['tb'.$i]) && !empty($_SESSION['tb'.$i])){
   echo "Price of ".$_SESSION['tb'.$i.'_id'].' is '.$_SESSION['tb'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['tb'.$i.'_id'].' is '.$_SESSION['tb'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['tb'.$i.'_price'])*($_SESSION['tb'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['lsc'.$i]) && !empty($_SESSION['lsc'.$i])){
   echo "Price of ".$_SESSION['lsc'.$i.'_id'].' is '.$_SESSION['lsc'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['lsc'.$i.'_id'].' is '.$_SESSION['lsc'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['lsc'.$i.'_price'])*($_SESSION['lsc'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['lnc'.$i]) && !empty($_SESSION['lnc'.$i])){
   echo "Price of ".$_SESSION['lnc'.$i.'_id'].' is '.$_SESSION['lnc'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['lnc'.$i.'_id'].' is '.$_SESSION['lnc'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['lnc'.$i.'_price'])*($_SESSION['lnc'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['lmg'.$i]) && !empty($_SESSION['lmg'.$i])){
   echo "Price of ".$_SESSION['lmg'.$i.'_id'].' is '.$_SESSION['lmg'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['lmg'.$i.'_id'].' is '.$_SESSION['lmg'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['lmg'.$i.'_price'])*($_SESSION['lmg'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['lf'.$i]) && !empty($_SESSION['lf'.$i])){
   echo "Price of ".$_SESSION['lf'.$i.'_id'].' is '.$_SESSION['lf'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['lf'.$i.'_id'].' is '.$_SESSION['lf'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['lf'.$i.'_price'])*($_SESSION['lf'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['lm'.$i]) && !empty($_SESSION['lm'.$i])){
   echo "Price of ".$_SESSION['lm'.$i.'_id'].' is '.$_SESSION['lm'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['lm'.$i.'_id'].' is '.$_SESSION['lm'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['lm'.$i.'_price'])*($_SESSION['lm'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['face'.$i]) && !empty($_SESSION['face'.$i])){
   echo "Price of ".$_SESSION['face'.$i.'_id'].' is '.$_SESSION['face'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['face'.$i.'_id'].' is '.$_SESSION['face'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['face'.$i.'_price'])*($_SESSION['face'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['lips'.$i]) && !empty($_SESSION['lips'.$i])){
   echo "Price of ".$_SESSION['lips'.$i.'_id'].' is '.$_SESSION['lips'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['lips'.$i.'_id'].' is '.$_SESSION['lips'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['lips'.$i.'_price'])*($_SESSION['lips'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['eyes'.$i]) && !empty($_SESSION['eyes'.$i])){
   echo "Price of ".$_SESSION['eyes'.$i.'_id'].' is '.$_SESSION['eyes'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['eyes'.$i.'_id'].' is '.$_SESSION['eyes'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['eyes'.$i.'_price'])*($_SESSION['eyes'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['nails'.$i]) && !empty($_SESSION['nails'.$i])){
   echo "Price of ".$_SESSION['nails'.$i.'_id'].' is '.$_SESSION['nails'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['nails'.$i.'_id'].' is '.$_SESSION['nails'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['nails'.$i.'_price'])*($_SESSION['nails'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['palettes'.$i]) && !empty($_SESSION['palettes'.$i])){
   echo "Price of ".$_SESSION['palettes'.$i.'_id'].' is '.$_SESSION['palettes'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['palettes'.$i.'_id'].' is '.$_SESSION['palettes'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['palettes'.$i.'_price'])*($_SESSION['palettes'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['fwc'.$i]) && !empty($_SESSION['fwc'.$i])){
   echo "Price of ".$_SESSION['fwc'.$i.'_id'].' is '.$_SESSION['fwc'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['fwc'.$i.'_id'].' is '.$_SESSION['fwc'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['fwc'.$i.'_price'])*($_SESSION['fwc'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['fcm'.$i]) && !empty($_SESSION['fcm'.$i])){
   echo "Price of ".$_SESSION['fcm'.$i.'_id'].' is '.$_SESSION['fcm'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['fcm'.$i.'_id'].' is '.$_SESSION['fcm'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['fcm'.$i.'_price'])*($_SESSION['fcm'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['sunscreen'.$i]) && !empty($_SESSION['sunscreen'.$i])){
   echo "Price of ".$_SESSION['sunscreen'.$i.'_id'].' is '.$_SESSION['sunscreen'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['sunscreen'.$i.'_id'].' is '.$_SESSION['sunscreen'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['sunscreen'.$i.'_price'])*($_SESSION['sunscreen'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['fk'.$i]) && !empty($_SESSION['fk'.$i])){
   echo "Price of ".$_SESSION['fk'.$i.'_id'].' is '.$_SESSION['fk'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['fk'.$i.'_id'].' is '.$_SESSION['fk'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['fk'.$i.'_price'])*($_SESSION['fk'.$i.'_num']);
  }
}

for($i=1;$i<=12;$i++){
	
if(isset($_SESSION['fmp'.$i]) && !empty($_SESSION['fmp'.$i])){
   echo "Price of ".$_SESSION['fmp'.$i.'_id'].' is '.$_SESSION['fmp'.$i.'_price'].'<br>';	
   echo "Quantity of ".$_SESSION['fmp'.$i.'_id'].' is '.$_SESSION['fmp'.$i.'_num'].'<br>';
   $amount=$amount+($_SESSION['fmp'.$i.'_price'])*($_SESSION['fmp'.$i.'_num']);
  }
}

if($amount==0)
{
	 echo'No item added in Cart';
}
    echo'Amount to pay is Rs '.$amount.'<br>';
   $_SESSION['amount']=$amount;
   header('Location: mail.php');
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

#btn1{
position:absolute;
left:20px; 
top:250px;
height:50px;
background-color:white;
border-color:white;
}

#btn2{
position:absolute;
right:20px; 
height:50px;
top:250px;
background-color:white;
border-color:white;
}

#d4{
width:100%;
height:100px;
background-color: #00004d;
font-weight:bold;
color:white;
margin-top:950px;
}

table{
border-collapse:collapse;
margin:600px 10px;
}

table td{
border-bottom:1px solid black;
border-top:1px solid black;
z-index:2;
padding:15px 10px;
background-color: #ffdd99;
}

table td:hover{
border-bottom:1px solid black;
border-top:1px solid black;
z-index:2;
padding:15px 10px;
background-color: #ffaa00;
}

a{
color:black;
text-decoration:none;}

</style>
</head>
<body>
<div id="d1">
<form action="" method="POST">
<input type="text"> 
<select id="toselect" onchange="selection()">
<option selected>All Categories</option>
<option>Beauty</option>
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

<a href="home.html"><input type="button" name="btn" value="Home" style="background-color:#ff3300; font-size:20px; float:right; border-radius:5px; margin-top:50px;"></a>
</form>
</div>

<script>
function selection()
{
 var i=document.getElementById('toselect').value;
 window.open(i+".html");
}
</script>
</body>
</html>