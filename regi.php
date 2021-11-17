<!DOCTYPE html>
<?php
require ('header.php');
?>
<html>

    <body>
    <center>
        <h1>Register</h1>
        <?php
        require_once('config.php');
        if (isset($_POST['submitted'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password1'];
            $confirm_password = $_POST['password2'];
            $problem = false;
            $errorMsg = array(); //array to store error message
            //check for each value
            if (empty($name)) {

                $problem = true;
                array_push($errorMsg, "Please enter your  name!");
            } else if (!preg_match("/^[a-zA-Z-\s']*$/", $name)) {
                array_push($errorMsg, "Your name should contain letters only!");

                $problem = true;
            }

            if (empty($email)) {
                $problem = true;
                array_push($errorMsg, "Please enter your email address");
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $problem = true;
                array_push($errorMsg, "Please enter valid email format!");
            }

            if (empty($username)) {
                $problem = true;
                array_push($errorMsg, "Please enter your username!");
            }

            if (empty($password)) {
                $problem = true;
                array_push($errorMsg, "Please enter password!");
            }
            if (strlen($password) <= 8) {
                $problem = true;
                array_push($errorMsg, "The password required 8 alphanumeric and above.");
            }
            if (ctype_alpha($password) == true && is_numeric($password) == false) {
                $problem = true;
                array_push($errorMsg, "The password is not strong enough. Alphanumeric is recommended.");
            }
            if (ctype_alpha($password) == false && is_numeric($password) == true) {
                $problem = true;
                array_push($errorMsg, "The password is not strong enough. Alphanumeric is recommended.");
            }
            if ($password != $confirm_password) {
                $problem = true;
                array_push($errorMsg, "Your password did not match your confirmed password!");
            }
            if (!$problem) {
                //if no problem

                $insertQuery = "INSERT INTO user(id,name,email,username,password) 
                                VALUES(0,'$name','$email','$username','$password')";

                $selectQuery = "SELECT * FROM users WHERE username='$username'";

                if (mysqli_query($dbc, $insertQuery)) {
                    echo "<p>Congratulations, you have registrated successfully.</p>";
                } else {
                    echo"<p>Database error. Please try again later</p>";
                }
                mysqli_close($dbc);

                //clear the posted values
                $_POST = array();
            } else {//forget a field
                array_push($errorMsg, "Please check again the field!");
            }
        }
        //create the form's
        ?>

        <form action="regi.php" method="post">

            <p>Name:<br/><input type="text" name="name" size="20" value="<?php
        if (isset($_POST['name'])) {
            print htmlspecialchars($_POST['name']);
        }
        ?>"/></p>
            <p>Email Address:<br/><input type="text" name="email" size="20" value="<?php
        if (isset($_POST['email'])) {
            print htmlspecialchars($_POST['email']);
        }
        ?>"/></p>
            <p>Username:<br/><input type="text" name="username" size="20" value="<?php
                                         if (isset($_POST['username'])) {
                                             print htmlspecialchars($_POST['username']);
                                         }
                                         ?>"/></p>
            <p>Password: <br/><input type="password" name="password1" size="20" placeholder="8 alphanumeric and above" value="<?php
                if (isset($_POST['password1'])) {
                    print htmlspecialchars($_POST['password1']);
                }
                ?>"/></p>
            <p>Confirm password:<br/><input type="password" name="password2" size="20" value="<?php
                if (isset($_POST['password2'])) {
                    print htmlspecialchars($_POST['password2']);
                }
                ?>"/></p>

            <p><input type="submit" name="submit" value="Register"/></p>
            <input type="hidden" name="submitted" value="true"/>
            <?php
            if (isset($_POST['submitted'])) {
                for ($i = 0; $i < count($errorMsg); $i++) {
                    echo "<p style='color:red;font-size:16px;'>$errorMsg[$i]</p>"; //prompt user the validation error
                }
            }
            ?>

        </form>
    </center>    


<?php
require ('footer.php');
?>