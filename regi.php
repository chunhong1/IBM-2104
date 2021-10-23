<!DOCTYPE html>
<?php
require ('head.html');
?>
<html>
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
        <li><a href="log.php">Log in </a></li>
        <li style="background-color:#92500A"><a href="regi.php">Register</a></li>
        <li><a href="logout">Log Out</a></li>

    </ul>
    <center>
    <h1>Register</h1>
<?php
if (isset($_POST['submitted'])){
    $problem = false ;
    
    //check for each value
    if (empty($_POST['first_name'])){
        $problem=true;
        print '<p class="error">Please enter your first name!</p>';
    }
        if (empty($_POST['last_name'])){
        $problem=true;
        print '<p class="error">Please enter your last name!</p>';
    } 
            if (empty($_POST['last_name'])){
        $problem=true;
        print '<p class="error">Please enter your email address!</p>';
    } if (empty($_POST['username'])){
        $problem=true;
        print '<p class="error">Please enter your username!</p>';
    }    if (empty($_POST['password1'])){
        $problem=true;
        print '<p class="error">Please enter password!</p>';
    }
    if ($_POST['password1'] != $_POST['password2']){
        $problem=true;
        print '<p class="error">Your password did not match your confirmed password!</p>';
    }
    if(!$problem){
        //if no problem
        print '<p>You are now registered!<br/> Okay, you are not really registered but...</p>';
        //clear the posted values
        $_POST=array();
        
    }
     else{//forget a field
        print '<p class="error">Please try again later!</p>';
    }

}   
    //create the form's
?>

<form action="regi.php" method="post">
    <p>First Name:<input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) {print htmlspecialchars($_POST['first_name']);}?>"/></p>
        <p>Last Name:<input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) {print htmlspecialchars($_POST['last_name']);}?>"/></p>
    <p>Email Address:<input type="text" name="email" size="20" value="<?php if (isset($_POST['email'])) {print htmlspecialchars($_POST['email']);}?>"/></p>
    <p>Username:<input type="text" name="username" size="20" value="<?php if (isset($_POST['email'])) {print htmlspecialchars($_POST['email']);}?>"/></p>
    <p>Password:<input type="password" name="password1" size="20" value="<?php if (isset($_POST['password1'])) {print htmlspecialchars($_POST['password1']);}?>"/></p>
    <p>Confirm password:<input type="password" name="password2" size="20" value="<?php if (isset($_POST['password2'])) {print htmlspecialchars($_POST['password2']);}?>"/></p>
    <p><input type="submit" name="submit" value="Register"/></p>
    <input type="hidden" name="submitted" value="true"/>
    
</form>
</center>    
   
    
</body>
</html>