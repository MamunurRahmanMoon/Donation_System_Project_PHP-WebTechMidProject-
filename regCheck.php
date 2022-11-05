<?php

    session_start();
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    //Write Files
    $donorFile = '../LogIn/donors.txt';
    $requesterFile = '../LogIn/requesters.txt';
    $volunteerFile = '../LogIn/volunteers.txt';

    if($username == "" || $password == "" || $email == "" || $role == ""){
        header('location: signup.php?err=null');
    }
    else if($username != null && $password != null && $email != null && $role == 'Donor'){

        $donor = $username."|".$password."|".$email."|".$role."\r\n";

        $donorFile=fopen('../LogIn/donors.txt', 'a');
        fwrite($donorFile, $donor);
		fclose($donorFile);
        header('location: login.php');
    }

    else if($username != null && $password != null && $email != null && $role == "Requester"){
        // $user = ['username' => $username, 'password'=> $password, 'email' => $email];

        $requester = $username."|".$password."|".$email."|".$role."\r\n";

        $requesterFile = fopen('../LogIn/requesters.txt', 'a');
        fwrite($requesterFile, $requester);
		fclose($requesterFile);
        // $_SESSION['user'] = $user;
        header('location: login.php');
    }
    else if($username != null && $password != null && $email != null && $role == "Volunteer"){

        $volunteer = $username."|".$password."|".$email."|".$role."\r\n";

        $volunteerFile = fopen('../LogIn/volunteers.txt', 'a');
        fwrite($volunteerFile, $volunteer);
		fclose($volunteerFile);
        // $_SESSION['user'] = $user;
        header('location: login.php');
    }
?>