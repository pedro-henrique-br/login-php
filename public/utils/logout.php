<?php 

if($_SERVER["REQUEST_METHOD"] === "POST"){
  header("location: http://localhost/login-php/public/login.php");
  session_destroy();
  exit;
}

?>