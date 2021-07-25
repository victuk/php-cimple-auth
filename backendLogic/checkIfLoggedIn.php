<?php

session_start();

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
define("SECURE", FALSE);


function login_check($conn) {
    
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];

        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];

        $sqll = "SELECT password FROM members WHERE id = '$user_id' LIMIT 1";

        $result = $conn->query($sqll);

        $row = $result->fetch_assoc();

        $db_password_check = $row['password'];

        $login_check = hash('sha512', $db_password_check . $user_browser);

        if ($login_check == $login_string) {
            // Logged In!!!! 
                return true;
            } else {
            // Not logged in 
                return false;
            }

        } else {
            // Could not prepare statement
            header("Location: ../error.php?err=Not Logged In. ");
            exit();
        }
}

function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name 
    $secure = SECURE;

    // This stops JavaScript being able to access the session id.
    $httponly = true;

    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }

    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);

    // Sets the session name to the one set above.
    session_name($session_name);

    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. 
}

?>