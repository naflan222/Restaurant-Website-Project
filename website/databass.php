<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
  // Database credentials
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "user_db";

  // Create a connection
  $conn = new mysqli('localhost', 'root', '', 'user_db');

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Connection successful
  echo "Connected to the database successfully.";

  // Perform database operations here

  // Close the connection
  $conn->close();
?>

</body>
</html>
