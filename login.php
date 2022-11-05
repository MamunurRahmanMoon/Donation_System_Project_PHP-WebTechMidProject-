<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "Invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "Username/password not found ...";
        }

        if($_GET['err'] == 'bad_request'){
            echo "Please login first ...";
        }
        if($_GET['err'] == 'empty'){
            echo "Enter your Username, Password & Designation";
        }
        if($_GET['err'] == 'no_file'){
            echo "Signup first";
        }
    }
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="loginCheck.php" enctype="">
        <fieldset>
        <legend><b>Log-in</b></legend>
        <table>
            <tr>
                <td> Log-in as:
                    <select name="role" id="">
                        <option selected disabled value="Select">--Select--</option>
                        <option value="Donor">Donor</option>
                        <option value="Requester">Requester</option>
                        <option value="Volunteer">Volunteer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Username: <input type="text" name="username" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Password : <input type="password" name="password" value=""/> 
                </td>
            </tr>
           
             <tr>
                <td>
                <input type="submit" name="btn" value="Submit"/>
                </td>
             </tr>

             <tr>
                <td><br></td>
            </tr>
             <tr>
                <td>
                    Haven't registered yet? <a href="signup.php">Sign-up</a>
                </td>
                <td>
                <a href="adminLogIn.php">Log-in as Admin</a>
                </td>
             </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>