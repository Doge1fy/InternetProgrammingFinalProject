<?php
    require_once('dataHandler.php');

    $users = get_data();

    $userName = $_POST['username'];
    $passWord = $_POST['password'];
    
    if (isset($users[$userName])){
            echo "username already exists";
            exit;
        }

   
   $allowed = '0123456789abcdef';
   $salt = '';

    for ($i = 0; $i < 32; $i++) {
        $salt .= $allowed[mt_rand(0, 15)];
    }

// 2. Hash it (SHA-256 is available in 5.1.2+)
    $hashedPassword = hash('sha256', $salt . $passWord);

// 3. Save to your array using consistent keys
    $newUser = array(
        "username" => $userName,
        "password" => $hashedPassword,
        "salt" => $salt, 
    );

    //check for duplicate users
        
    $users[$userName] = $newUser;

    
    update_data($users);
    echo '<meta http-equiv="refresh" content="0;url=index.html">';
    exit;
?>
