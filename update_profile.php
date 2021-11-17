<?php
require_once('config.php');
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start(); // session start
//handle the form
if (isset($_POST['submitted'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['password2'];
    $notifMsg = array();
    $update = true;

    //sql query
    $query1 = "UPDATE user SET name ='$name' WHERE id = '{$_SESSION['id']}'";
    $query2 = "UPDATE user SET email ='$email' WHERE id = '{$_SESSION['id']}'";
    $query3 = "UPDATE user SET username='$username' WHERE id = '{$_SESSION['id']}'";
    $query4 = "UPDATE user SET password ='$password' WHERE id = '{$_SESSION['id']}'";

    if (empty($name) && empty($email) && empty($username) && empty($password) && empty($confirm_password)) {
        $update = false;
        array_push($notifMsg, "All fields are empty. Please input at least 1 credentials to complete the update process!");
    }
    if ($update) {
        if (!empty($name)) {

            if (preg_match("/^[a-zA-Z-\s']*$/", $name)) {
                mysqli_query($dbc, $query1);
                array_push($notifMsg, "Name updated!");
            } else {
                $update = false;
                array_push($notifMsg, "Your name should contain letters only!");
            }
        }

        if (!empty($email)) {

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                mysqli_query($dbc, $query2);
                array_push($notifMsg, "Email updated!");
            } else {
                $update = false;
                array_push($notifMsg, "Please enter valid email format!");
            }
        }

        if (!empty($username)) {
            mysqli_query($dbc, $query3);
            array_push($notifMsg, "Username updated!");
        }
        //if every fields are meet with the criteria
        if (!empty($password)) {
            if (strlen($password) >= 8) {
                if (ctype_alpha($password) == false || is_numeric($password) == false) {
                    if ($password == $confirm_password) {
                        mysqli_query($dbc, $query4);
                        array_push($notifMsg, "Password updated!");
                    } else {
                        array_push($notifMsg, "Confirm password is not same to the password!");
                    }
                } else {
                    array_push($notifMsg, "The password should contain  alphanumeric (at least 1 alphabet and 1 numbers)!");
                }
            } else {
                array_push($notifMsg, "The password should at least 8 alphanumeric");
            }
        }
    }
}
include('header.php');
?>
<?php
if (isset($_SESSION['login'])) {

    //fetch user details from usertable
    $query = "SELECT * FROM user WHERE id = '{$_SESSION['id']}'";

    $result = mysqli_query($dbc, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $name = $row['name'];
            $email = $row['email'];
            $username = $row['username'];
            $password = $row['password'];
        }
    }
}
?>

<center>
    <h1>Update Profile</h1>
    <img src="icon.png" height="150" width="150"/><br/><br/>
    <form action="update_profile.php" method="post">
        <table>
            <tr>
                <td><p>Name:</p></td>
                <td><input type="text" name="name" size="20" placeholder="<?php print $name; ?>"/></td>
            </tr>
            <tr>
                <td><p>Email Address:</p></td>
                <td><input type="text" name="email" size="20" placeholder="<?php print $email; ?>"/></td>
            </tr>

            <tr>
                <td><p>Username:</p></td>
                <td><input type="text" name="username" size="20" placeholder="<?php print $username; ?>"/></td>
            </tr>

            <tr>
                <td><p>Password:</p></td>
                <td><input type="password" name="password" size="20" placeholder="8 alphanumeric and above"/></td>
            </tr>

            <tr>
                <td><p>Confirm Password:</p></td>
                <td><input type="password" name="password2" size="20" /></td>
            </tr>
            <tr>
                <td></td>
                <td><p><input type="submit" name="submit" value="Update"/></p> <input type="hidden" name="submitted" value="true"/></td>

            </tr>
        </table>


    </form>
    <?php
    if (isset($_POST['submitted'])) {
        for ($i = 0; $i < count($notifMsg); $i++) {
            echo "<p style='color:red;font-size:16px;'>$notifMsg[$i]</p>"; //prompt user the validation error
        }
    }
    ?>
    <?php
    mysqli_close($dbc); //close database
    ?>
</center>
<?php
require ('footer.php');
?>