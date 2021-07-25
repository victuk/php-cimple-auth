<?php
session_start();

include_once 'connectDb.php';

// echo($_POST["username"]);
// echo(" And passwor is ");
// echo($_POST["password"]);

// $username = $_POST["username"];
// $password = $_POST["password"];

if (isset($_POST["username"], $_POST["password"])) {
    login($_POST["username"], $_POST["password"], $connection);
}


function login($username, $password, $conn) {

  $sql = "SELECT id, username, password, salt FROM members WHERE username = '$username' limit 1";

  $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $user_id = $row['id'];
    $db_password = $row['password'];
    $salt = $row['salt'];
    $password = hash('sha512', $password);

    
    if ($db_password == $password) {
      // Password is correct!
      // Get the user-agent string of the user.
      $user_browser = $_SERVER['HTTP_USER_AGENT'];

      // XSS protection as we might print this value
      $user_id = preg_replace("/[^0-9]+/", "", $user_id);
      $_SESSION['user_id'] = $user_id;

      // XSS protection as we might print this value
      $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);

      $_SESSION['username'] = $username;
      $_SESSION['login_string'] = hash('sha512', $password . $user_browser);

      header("Location: ../protected_page.php");

      // Login successful. 
      return true;
  } else {
      // Password is not correct 
      // We record this attempt in the database

      // $now = time();
      // if (!$mysqli->query("INSERT INTO login_attempts(user_id, time) 
      //                 VALUES ('$user_id', '$now')")) {
      //     header("Location: ../error.php?err=Database error: login_attempts");
      //     exit();
      // }

      return false;
  }


  $conn->close();
    
}



?>