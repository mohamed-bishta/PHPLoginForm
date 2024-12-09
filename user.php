<?php

session_start();

require_once('../senddata/cont/valdetions.php');

$errosr = [];

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $user_name = trim(filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING));
    $user_email = trim(filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_EMAIL));

    if (requerdInput($user_name)) {
        $errosr[] = "Please provide a required value.";

    } elseif (mainInput($user_name, 3)) {
        $errosr[] = "Please provide a value with at least 3 characters.";

    } elseif (maxInput($user_name, 20)) {
        $errosr[] = "Please provide a value with a maximum of 20 characters.";

    } else {
        echo $_POST['user_name'];
    }

    if (requerdInput($user_email)) {
        $errosr[] = 'Please provide a valid email.';

    } elseif (emailInput($user_email)) {
        $errosr[] = 'Please provide a valid email address.';
    };


    if (count($errosr) > 0) {
        $_SESSION['errors'] = $errosr;
        header("location:index.php");
        exit();

    } else {
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_email'] = $user_email;
        header("location:profile.php");
        exit();
    }
    
} else {
    echo "No user name submitted.";
};
