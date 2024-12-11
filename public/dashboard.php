<?php 

session_start();

if(!isset($_SESSION["id"])){
  header("Location: login.php");
  exit;
}

require_once "./views/dashboard.view.php";

?>