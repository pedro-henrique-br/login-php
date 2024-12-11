<?php

session_start();
require './database.php';

if (isset($_POST["username"]) && $_POST["password"]) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sqlQuery = $connection->query("SELECT * FROM users WHERE username = '$username'");
  $sqlQueryResult = $sqlQuery->fetch_assoc();
  if($sqlQueryResult && password_verify($password, $sqlQueryResult["password"])){
    $_SESSION["id"] = $sqlQueryResult["id"];
    $_SESSION["username"] = $sqlQueryResult["username"];
    header("location: dashboard.php");
  } else {
    $error = "User not found";
  }
}

if(isset($_SESSION["id"])){
  header("location: dashboard.php");
}

require './views/login.view.php';

?>