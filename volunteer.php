<?php
    session_start();
    if(!isset($_SESSION['volunteerStatus'])){
        header('location: login.php?err=bad_request');
    }
    if(isset($_SESSION['volunteerStatus'])){
    echo "You are logged in as ".$_SESSION['volunteerStatus'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="">
            <fieldset>
                <legend><b>View running campaigns</b></legend>
                <table>
                    <tr>

                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>