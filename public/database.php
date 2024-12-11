<?php 

require 'index.php';


$connection = new mysqli($_ENV["HOSTNAME"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);

if($connection->connect_error){
  echo "Error trying to connect with the database" . die();
} 

?>