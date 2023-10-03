<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
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
#apDiv5 {
	position:absolute;
	left:648px;
	top:705px;
	width:334px;
	height:154px;
	z-index:3;
}

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
<div id="apDiv2"><?php echo $_SESSION['admin_name'] ?></div>

</div>
<div id="apDiv3"></div>
<div class="container">

   <div class="content">
 -
      <h3>&nbsp;</h3>
      <h3>&nbsp;</h3>
      <h3>&nbsp;</h3>
      <h3>&nbsp;</h3>
      <h3>hi, <span>admin</span></h3>
     <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      

      <a href="order.html" class="btn">Order</a>
      <a href="logout.php" class="btn">logout</a>
     <p>&nbsp;    </p>
  </div>

</div>
<div id="apDiv5">

  <form name="form1" method="post" action="checkbuttons.php">
    <p>&nbsp;</p>
    <table width="100%" height="143" border="1">
      <tr>
        <th scope="row"><div align="right">
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>&nbsp; </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </div>          <blockquote><blockquote><blockquote><blockquote><h3 align="right"><strong>
                  <input type="submit" name="itemAdd" id="itemAdd" value="Add Item">
                </strong></h3>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote></th>
      </tr>
      <tr>
        <th scope="row">
          
                <div align="right">
                    <blockquote>
                          <blockquote>
                              <blockquote>
                                <blockquote>&nbsp; </blockquote>
                              </blockquote>
                          </blockquote>
                    </blockquote>
          </div>          <blockquote><blockquote><blockquote><blockquote><h3 align="right">
                    <input name="itemModify" type="submit" id="itemModify" value="Modify Item">
                    </h3>
                  </blockquote>
                </blockquote>
              </blockquote>
                </blockquote></th></tr>
      <tr>
        <th scope="row">
          
                <div align="right">
                    <blockquote>
                          <blockquote>
                              <blockquote>
                                <blockquote>&nbsp; </blockquote>
                              </blockquote>
                          </blockquote>
                    </blockquote>
          </div>          <blockquote><blockquote><blockquote><blockquote><h3 align="right">
                    <input name="addUser" type="submit" id="addUser" value="Add User">
                    </h3>
                  </blockquote>
                </blockquote>
              </blockquote>
                </blockquote></th></tr>
    </table>

  </form>
</div>

<div id="apDiv4"></div>
</body>
</html>