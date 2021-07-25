<?php

include_once 'connectDb.php';

$username = $_POST['username'];
// $email = $_POST['email'];
$password = $_POST['p'];
$phoneNumber = $_POST['phone'];

// Sanitize and validate the data passed in
// $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
//     $phoneNumber = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
//     $email = filter_var($email, FILTER_VALIDATE_EMAIL);




if (isset($username, $email, $password, $phoneNumber)) {
    
    // $error_msg = "";

        // Create a random salt
        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));

        // Create salted password 
        $hashedPassword = hash('sha512', $password);

        // Insert the new user into the database 
        $sql = "INSERT INTO members (username, email, password, salt, phoneNumber)
VALUES ('$username', '$email', '$hashedPassword', '$random_salt', '$phoneNumber')";

if ($connection->query($sql) === TRUE) {
  header('Location: ../register_success.php');
} else {
  echo("Error: " . $sql . "<br>" . $connection->error);
}

$connection->close();
    


    

}

?>