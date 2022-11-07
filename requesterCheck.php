<?php

    $fullName = $_POST['fullName'];
    $username = $_POST['username'];
    $serialNo = $_POST['serialNo'];
    $requestingAmount = $_POST['requestingAmount'];


if(isset($_POST['requestNow'])){

    if($fullName != null && $username != null && $serialNo != null && $requestingAmount != null){

        $request = $fullName."|".$username."|".$serialNo."|".$requestingAmount."\r\n";
       
        $requestFile=fopen('../LogIn/uploads/requests.txt', 'a');
        fwrite($requestFile, $request);
		fclose($requestFile);
        
        $_SESSION['documentUsername'] = $username;
        $_SESSION['documentSerialNo'] = $serialNo;
        header('location: requester.php');
    }
    else{
        header('location: requester.php?err=empty');
    }
}

else if(isset($_POST['upload'])){
    // // File upload start
    // echo "<pre>";
    // print_r($_FILES);

        $src = $_FILES['myfile']['tmp_name'];
        $des ="../LogIn/uploads/documents".$_FILES['myfile']['name'];

        if(move_uploaded_file($src, $des)){
            echo "Success";
            header('location: requester.php');
        }else{
            echo "Error";
        }
    // File upload end
}
    
?>