<?php
    $donation = $_POST['donation'];
    $donationFile = '../LogIn/donation.txt';

    if(isset($_POST['donate_btn'])){
        $donationValue = $donation."\r\n";
       
        $donationFile=fopen('../LogIn/donation.txt', 'a');
        fwrite($donationFile, $donationValue);
		fclose($donationFile);

        $_SESSION['donationStatus'] = true;
        header('location: donor.php');
    }
?>