<?php
    
    $password = 's3cr3t!P@ssw0rd';
    $pass = readline();

    if ($pass == $password) {
        echo "Welcome!";
    } else {
        echo "Wrong password!";
    }
?>