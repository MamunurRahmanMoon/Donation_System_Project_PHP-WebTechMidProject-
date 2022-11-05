<?php
    if(trim($userContent[0]) === $username && trim($userContent[1]) === $password && trim($userContent[3]) === $role){
        $_SESSION['status'] = true;
        echo trim($userContent[0]);
        echo trim($userContent[1]);
        echo trim($userContent[3]);
        echo $role;

        // header('location: admin.php');
    }
?>