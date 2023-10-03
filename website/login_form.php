<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
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
	left:754px;
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
<div id="apDiv2"></div>
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>