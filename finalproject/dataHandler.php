<?php

    $dataPath = __DIR__ . '/../FinalProjectUserData/users.json';
    

 

    function get_data() {
        global $dataPath;
        $jsonString = file_get_contents($dataPath);
        $users = json_decode($jsonString, true);
        
        return $users;
    }

    function update_data($users) {
        global $dataPath;
        $encodedData = json_encode($users);
        file_put_contents($dataPath, $encodedData);
        echo "Data updated";


    }

    
?>
