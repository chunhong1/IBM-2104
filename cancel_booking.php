<?php

include('header.php');

require_once('config.php');
if (isset($_GET['bookID']) && is_numeric($_GET['bookID'])) {//Display the entry in  a form:
// //Define the query:
    $bookID = $_GET['bookID'];
    //select all data from booking
    $query = "SELECT * FROM booking  WHERE bookID='$bookID';";
    $result = mysqli_query($dbc, $query);
    if ($r = mysqli_query($dbc, $query)) {
        $row = mysqli_fetch_array($r);

        // //Make the form:
        print'<form action="cancel_booking.php" method="post"> 
      <p>Are you sure you want to delete this booking?</p>
      <table>
      <tr>
        <td>Movie Name:</td>
        <td>' . $row['movieName'] . '</td>
      </tr>
      
            <tr>
                    <td>Date:</td>
        <td>' . $row['date'] . '</td>
      </tr>
      
            <tr>
                    <td>Time:</td>
        <td>' . $row['time'] . '</td>
      </tr>
      </table>
      
<br>
               <input type="hidden" name="id" value="' . $bookID . '">
               <input type="submit" name="submit" value="Delete this booking!"></p>
        </form>';
    } else {//Couldn't get the information. 
        print'<p style="color:red;"> Could not retrieve the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was:' . $query . '</p>';
    }
} else if (isset($_POST['id']) && is_numeric($_POST['id'])) {//Handletheform.
    //Define the query:
    $query = "DELETE FROM booking WHERE bookID={$_POST['id']}";
    $r = mysqli_query($dbc, $query); // Execute the query.
    //Report on the result:
    if (mysqli_affected_rows($dbc) == 1) {
        print '<p>The blog entry has been deleted.</p>';
    } else {
        print '<p style="color: red;">Could not delete the blog entry because:<br>' . mysqli_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';
    }
} else {//No ID received.
    print'<p style="color:red;">This page has been accessed in error.</p>';
}//End of main IF.
mysqli_close($dbc); //Close the connection.
require ('footer.php');
?>