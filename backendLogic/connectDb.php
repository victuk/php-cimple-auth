<?php



$connection = new mysqli('localhost', 'newuser', 'password', 'theforextradekingdb');
if ($connection->connect_error) {
    header("Location: ./error.php?err=Unable to connect to MySQL");
    exit();
} else {
  echo("Connected Successfully");
}


?>