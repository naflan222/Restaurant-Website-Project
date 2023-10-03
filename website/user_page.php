<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
    <link rel="icon" type="image/x-icon" href="assets/images//favicon.ico" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

         <style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:925px;
	top:31px;
	width:740px;
	height:38px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:1668px;
	top:37px;
	width:195px;
	height:34px;
	z-index:2;
}
#apDiv2 {
	position:absolute;
	left:758px;
	top:21px;
	width:168px;
	height:62px;
	z-index:2;
	background-image: url(assets/images/logo2.png);
}
-->
         </style>
</head>
<body>
<div id="apDiv1">
  <table width="741" height="32" border="1">
    <tr>
      <th width="123" scope="row"><a href="index.html">Home</th></a>
      <td width="79"><a href="about.html">About</td></a>
      <td width="76"><a href="order.html">Order</td></a>
      <td width="70"><a href="login_form.php">Staff</td></a>
      <td width="71"><a href="blog.html">Blog</td></a>
      <td width="282"><a href="contactus.html">Contact</td></a>
    </tr>
  </table>
</div>
<div id="apDiv3"><?php echo $_SESSION['user_name'] ?></div>
</div>
<div id="apDiv2"></div>
</div>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="order.html" class="btn">Order</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

<div id="apDiv4"></div>
</body>
</html>