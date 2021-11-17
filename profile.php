<?php
include('header.php');

require_once('config.php');

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
<body>
<center>
    <h1>Profile</h1>
    <img src="icon.png" height="150" width="150"/>
    <table>
        <tr>
            <td><p>Name:</p></td>
            <td><p><?php
                    if (isset($_SESSION['login'])) {
                        echo $name; //show name
                    }
                    ?></p></td>
        </tr>
        <tr>
            <td><p>Username:</p></td>
            <td><p><?php
                    if (isset($_SESSION['login'])) {
                        echo $username; //show username
                    }
                    ?></p></td>
        </tr>

        <tr>
            <td><p>Email:</p></td>
            <td><p><?php
                    if (isset($_SESSION['login'])) {
                        echo $email; //show email
                    }
                    ?></p></td>
        </tr>

    </table>


</center>
<?php
require ('footer.php');
?>
