<?php 

session_start();

$printUsername = function(): string{
  if(isset($_SESSION["username"])){ 
    $username = $_SESSION["username"];
    $usernameUperCase = ucfirst($username);
    return "
      <p class='fs-1 fw-bolder text-primary'>
        $usernameUperCase
      </p>";
  }
  return "";
};

require './views/user.view.php'

?>