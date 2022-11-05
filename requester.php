<?php
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: login.php?err=bad_request');
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
    <!-- Request part -->
    <div>
            <fieldset>
                <legend>Request for donation</legend>
                <table>
                    <tr>
                        <td>
                            Upload document:
                            <input type="file" name="document" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Document serial number:
                            <input type="text" name="serialNo" placeholder="Enter serial no">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a href="donor.php">Request Now</a>
                        <input type="number" placeholder="Enter requesting amount">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </div>
</body>

<footer>
    <a href="logout.php">Log-out </a>
</footer>
</html>