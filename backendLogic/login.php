<?php

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
    echo($row['username'] . "\n");
    echo($row['password']);
    // if($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo($row);
    //     }
    // }
    // echo($result.fetch_assoc()['username']);
  
  $conn->close();
    
}



?>