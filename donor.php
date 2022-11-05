<?php
    // session_start();
    // if(!isset($_SESSION['status'])){
    //     header('location: login.php?err=bad_request');
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor</title>
</head>
<body>
    <form method="post" action="donorCheck.php" enctype=""></form>
    <div>
        <a href="home.php">Home</a>
    </div>
    <div  align="right">
        <table>
        <tr>
                <td>
                    <select name="donor_menu" id="">
                        <option selected value="Profile">Profile</option>
                        <option value="Setting">Setting</option>
                        <option value="view_request">View Request</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <center>
     <!-- Donation Part -->
     <div>
        <table>
            <tr>
                <h1>Donor Dashboard</h1>
            </tr>
        </table>
     </div>
     <div style= "width:250px">
        <fieldset>
            <legend><b>Total Donation Collected</b></legend>
            <table>
                <tr>
                   Taka: <input type="text" value="0">
                </tr>
            </table>
        </fieldset>
     </div>

        <br>

     <div style= "width:250px">
            <fieldset>
                <legend><b>Become a Donor</b></legend>
                <table>
                    <tr>
                        <td>
                            <input type="number" placeholder="Enter donation amount">
                            <a href="donor.php">Donate Now</a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </div>

        <br>

        <div style= "width:250px">
            <a href="logout.php">Log-out </a>
        </div>
    </center>
</body>


</html>