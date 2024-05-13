<?php
    $server = "10.100.2.134";
    $user = "connect";
    $pw = "Victoria";
    $db = "arsoppgaveMoki";
    
    $conn = mysqli_connect($server, $user, $pw, $db);

    if(!$conn) {
        echo "Connection failed!";
        die();        
    }


//

    //$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
//$stmt->bind_param("sss", $firstname, $lastname, $email);
