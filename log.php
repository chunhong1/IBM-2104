<?php
//session_start();


require_once('config.php');
$errorMsg = array(); //array to store error message
//check if the form has been submitted
if (isset($_POST['submitted'])) {
    $username = $_POST['username'];
    $password = $_POST['pw'];
    $login = true;

    //handle the form
    if (empty($username)) {
        $login = false;
        array_push($errorMsg, "Please make sure you enter the username!");
    }
    if (empty($password)) {
        $login = false;
        array_push($errorMsg, "Please make sure you enter the password!");
    }
    if ($login) {
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

        $result = mysqli_query($dbc, $query); //use result to store affected row amount

        if (mysqli_num_rows($result) > 0) { //if affected row more than 1 mean found the data
            session_start();
            $_SESSION['login'] = true;

            while ($row = mysqli_fetch_array($result)) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
            }
            //correct
            header('Location: home.php');
            exit();
        } else {
            array_push($errorMsg, "Invalid credentials. Please try again!");
        }
        mysqli_close($dbc); //close database
    } else {
        array_push($errorMsg, "Login was unsuccessful... Please try again!");
    }
}
require ('header.php');
?>
<!doctype html> 
<html><body>
    <center>       
        <form action="log.php" method="post">
            <h1>Login</h1>
            <p><label for="lname">Username:</label><br></p>
            <input type="text" id="username" name="username"><br>           
            <p><label for="pw">Password:</label><br></p>
            <input type="password" id="pw" name="pw" ><br>
            <p><input type="submit" name="submit" value="Log in"/></p>
            <p>Not yet register? Click <a href="regi.php">here</a> to register!</p>
            <input type="hidden" name="submitted" value="true"/>
        </form>
<?php
if (isset($_POST['submitted'])) {
    for ($i = 0; $i < count($errorMsg); $i++) {
        echo "<p style='color:red;font-size:16px;'>$errorMsg[$i]</p>"; //prompt user the error
    }
}
?>
    </center> 
<?php
require ('footer.php');
?>