

<!DOCTYPE html>
<?php
require ('head.html');
?>

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        label{
            color:white;
        }
        p{
            color:white;
        }
    </style>
</head>
<body>
    <h1>Movie</h1>
    <ul> <!--Navigation Bar-->
        <li ><a href="home.html">Home Page</a></li>
        <li style="background-color:#92500A"><a href="log.php">Log in </a></li>
        <li><a href="regi.php">Register</a></li>
        <li><a href="logout">Log Out</a></li>

    </ul>

</body>



<?php
//check if the form has been submitted
if (isset($_POST['submitted'])) {
    //handle the form
    if ((!empty($_POST['username'])) && (!empty($_POST['pw']))) {
        
            //correct
            header('Location: home.html');
            
    } else {
        print '<p>Please make sure you enter both email address and password!<br/>'
                . 'Go back and try again.</p>';
    }
} else {//display the form
    print' <center>       <form action="log.php" method="post">
            <h1>Login</h1>
            <label for="lname">Username:</label><br>
            <input type="text" id="username" name="username"><br>           
            <label for="pw">Password:</label><br>
            <input type="password" id="pw" name="pw" ><br>
<p><input type="submit" name="submit" value="Log in"/></p>
<p>Not yet register? Click <a href="regi.php">here</a> to register!</p>
    <input type="hidden" name="submitted" value="true"/>
       </center> </form>';
}
?>
</html>