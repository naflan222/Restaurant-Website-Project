<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>
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
	left:756px;
	top:22px;
	width:168px;
	height:62px;
	z-index:2;
	background-image: url(assets/images/logo2.png);
}
#apDiv3 {
	position:absolute;
	left:1340px;
	top:239px;
	width:677px;
	height:433px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	left:272px;
	top:66px;
	width:551px;
	height:513px;
	z-index:4;
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
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
         <option value="staff">staff</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>