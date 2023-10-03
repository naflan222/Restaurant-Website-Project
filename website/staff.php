<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_type'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
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
#apDiv2 {
	position:absolute;
	left:1676px;
	top:36px;
	width:168px;
	height:45px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:757px;
	top:23px;
	width:168px;
	height:62px;
	z-index:2;
	background-image: url(assets/images/logo2.png);
}
-->
         </style>

  
<meta http-equiv="Content-Type" content="html; charset=utf-8"></head>
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
<div id="apDiv2"><?php echo $_SESSION['user_type'] ?></div>
</div>
<div id="apDiv3"></div>
<div class="container">

   <div class="content">
 -
      <h3>hi, <span>Staff</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_type'] ?></span></h1>
      

      <a href="order.html" class="btn">Order</a>
      <a href="logout.php" class="btn">logout</a>
     <p>&nbsp;    </p>
  </div>

</div>

<div id="apDiv4"></div>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
