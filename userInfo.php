<?php
  DEFINE('DB_USERNAME', 'root');
  
  DEFINE('DB_HOST', 'localhost');

  DEFINE('DB_DATABASE', 'SeepicUserInfo');
 

  $mysqli = new mysqli(DB_HOST, DB_USERNAME,DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

  echo 'Connected successfully.';



 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $query = " insert into userData (name, email, subject, message)
                             values('$name','$email','$subject', '$message')";

            
mysqli_query($mysqli, $query);

header('location=>index.php');

?>