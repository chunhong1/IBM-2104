<?php

include('header.php');

require_once('config.php');

if (isset($_SESSION['login'])) {
    $custID = $_SESSION['id'];

    //fetch user details from usertable
    $query = "SELECT * FROM booking INNER JOIN user ON booking.userID = user.id WHERE booking.userID = '$custID';";

    $result = mysqli_query($dbc, $query);
    print "<center>
    <h1>Booking History</h1>
        <table style='border: 1px solid white;'>
        <tr>
            <td><p>Name:</p></td>
            <td><p>Movie Name:</p></td>
            <td><p>Date:</p></td>
            <td><p>Time:</p></td>
            <td><p>Price:</p></td>
            <td><p>Cancel Booking:</p></td>
        </tr>";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['bookID'];
            $movieName = $row['movieName'];
            $date = $row['date'];
            $time = $row['time'];
            $qty1 = $row['qty_kid'];
            $qty2 = $row['qty_adult'];
            $qty3 = $row['qty_oku'];
            $price = $row['price'];
            $price = number_format($price, 2);
            $userID = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $username = $row['username'];
            $password = $row['password'];

            //print booking history
            print "<center>
    

        <tr><td><p>$name</p></td>
                                <td><p>$movieName</p></td>
                                    <td><p>$date</p></td>
            <td><p>$time</p></td>
            <td><p>RM$price</p></td>
            <td><a href=\"cancel_booking.php?bookID={$row['bookID']}\">Cancel booking</a></p></td>
             </tr>
             ";
        }
        print "</table>";
        
    }
}

require ('footer.php');
?>
