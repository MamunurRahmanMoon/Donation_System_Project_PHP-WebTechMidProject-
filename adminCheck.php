<?php
    $adminUsername = $_POST['admin_username'];
    $adminCode = $_POST['admin_code'];
    $adminFile = '../LogIn/admin.txt';
    if(isset($_POST['btn'])){

        if($adminUsername != null || $adminCode != null){
            $adminFile=fopen('../LogIn/admin.txt', 'r');
            while(!feof($adminFile)){
                $user = fgets($adminFile);
                $userContent = explode('|', $user);

                if(trim($userContent[0]) == $adminUsername && trim($userContent[1]) == $adminCode){
                    // session verification
                    $_SESSION['adminStatus'] = true;
                    $adminSession = $adminUsername;
                    $_SESSION['adminStatus'] = $adminSession;
                    header('location: admin.php');
                }
                
            }
            echo "Invalid username or code,Go Back & Reload the page again";
        }
        else{
            header('location: adminLogIn.php?err=empty');
        }
    }
?>