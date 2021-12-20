<?php

    session_start();

    $_SESSION['loggedin'] = true;
    $_SESSION["error_message"] = "Welcome!";

    setcookie("email", $_POST["email"], time()+ 60,'/'); // expires after 60 seconds

    header('Location: initial.php');
?>