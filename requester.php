<?php
     if(isset($_GET['err'])){
        
        if($_GET['err'] == 'empty'){
            echo "Enter all the credentials\r\n =>";
        }
    }

    session_start();
    if(!isset($_SESSION['requesterStatus'])){
        header('location: login.php?err=bad_request');
    }
    if(isset($_SESSION['requesterStatus'])){
    echo "You are logged in as ".$_SESSION['requesterStatus'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requester</title>
</head>
<body>
    <!-- Request part -->
    <div>
        <br>
        <form method="POST" action="requesterCheck.php">
            <fieldset>
                <legend><b>Request for donation</b></legend>
                <table>
                    <tr>
                        <td>
                            Full name:
                            <input type="text" name="fullName" placeholder="Enter your full name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username:
                            <input type="text" name="username" placeholder="Enter your username">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Document serial number:
                            <input type="text" name="serialNo" placeholder="Enter serial no">
                        </td>
                    </tr>

                    <tr>
                        <td>Requesting amount:
                        <input name="requestingAmount" type="number" placeholder="Enter requesting amount">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="requestNow" type="submit" value="Request Now">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>

    <!-- File Upload -->
    <div>
        <form method="POST" action="requesterCheck.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Upload Document</legend>
                <table>
                    <tr>
                            <td>
                                Upload document:
                                <input type="file" name="myfile" value="" />
                            </td>
                            <td>
                            <input type="submit" name="upload" value="Upload"></input>
                            </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>

<footer>
    <a href="logout.php">Log-out </a>
</footer>
</html>