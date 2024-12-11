<?php

session_start();

require './database.php';

if ((isset($_POST["password"]) && isset($_POST["confirm-password"])) && $_POST["password"] !== $_POST["confirm-password"]) {
  $error = "passwords don't match";
} else if (isset($_POST["username"])) {
  $username = $_POST["username"];
  $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
  $sqlQuery = $connection->query("SELECT * FROM users WHERE username = '$username'");
  if($sqlQuery->num_rows === 0){
    $connection->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    $sqlQuery = $connection->query("SELECT * FROM users WHERE username = '$username'");
    $sqlQuery = $sqlQuery->fetch_assoc();
    if($sqlQuery){
      $_SESSION["username"] = $sqlQuery["username"];
      $_SESSION["id"] = $sqlQuery["id"];
      $sucess = "User created sucessfully";
      header("location: dashboard.php");
      exit();
    } else {
      $error = "An error have been ocurred";
    }
  } else {
    $error = "username is already in use";
  }
}

require './views/register.view.php';

?>