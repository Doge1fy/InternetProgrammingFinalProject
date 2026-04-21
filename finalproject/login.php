<?php


    require_once('dataHandler.php');
    $users = get_data();

    // echo "<pre>";
    // print_r($users);
    // echo "</pre>";
    // die();

    $userName = $_POST['username'];
    $passWord = $_POST['password'];

    

    if (!isset($users[$userName])) {
        echo "User not found, redirecting in 3 seconds...";
        echo '<meta http-equiv="refresh" content="3;url=login.html">';
        exit;
    }

    $userData = $users[$userName];
    $storedHash = $userData['password'];
    $salt = $userData['salt']; // Use 'salt' here, not 'encryption'

    $checkHash = hash('sha256', $salt . $_POST['password']);
    
    if (!($checkHash === $storedHash)) {
        echo "Password incorrect, redirecting in 3 seconds...";
        echo '<meta http-equiv="refresh" content="3;url=login.html">';
        exit;
    }
    
    session_start();
    $_SESSION['username'] = $userName;

    header("Location: main.php");
    exit;

?>
