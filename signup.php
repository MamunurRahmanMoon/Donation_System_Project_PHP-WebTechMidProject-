<?php
    
?>

<html>

<head>
    <title>Sign-Up</title>
</head>

<body>
    <form method="post" action="regCheck.php">
        <fieldset>
            <legend><b>Sign-Up</b></legend>
            <table>
            <tr>
                <td> Sign-up as:
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
                    Username: <input type="text" name="username" value="" />
                    </td>
                </tr>
                <tr>
                    <td>
                    Password : <input type="password" name="password" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Email :<input type="email" name="email" value=""/> 
                    </td>
                </tr>

                <tr>
                    <td>
                        <br>
                    </td>
                </tr>

                <tr>
                    <td>
                    <input type="submit" name="btn" value="Submit" />
                    </td>
                </tr>
                

                
            </table>
            
        </fieldset>
    </form>
</body>

</html>