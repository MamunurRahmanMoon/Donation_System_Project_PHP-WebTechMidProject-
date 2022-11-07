<?php 

    session_start();
    session_destroy();

    
    setcookie('donorStatus', 'true', time()-3600, '/');
    setcookie('requesterStatus', 'true', time()-3600, '/');
    setcookie('volunteerStatus', 'true', time()-3600, '/');
    setcookie('adminStatus', 'true', time()-3600, '/');
    header('location: login.php');

?>