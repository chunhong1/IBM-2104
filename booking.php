<?php
include 'header.php';
?>
<center>

<?php
require_once('config.php');
if (isset($_POST['submitted'])) {
    $errorMsg = array(); //array to store error message

    if (!isset($_SESSION['login'])) {
        $errorMsg = array(); //array to store error message
        array_push($errorMsg, 'Pls <a href="log.php">login</a> to proceed to booking');

        //header("Location: log.php"); //redirect user to login page
    }

//Store data
    else {
        $custID = $_SESSION['id'];
        $name = $_POST['custName'];
        $movieName = $_POST['movie'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $qty1 = $_POST['qty1'];
        $qty2 = $_POST['qty2'];
        $qty3 = $_POST['qty3'];
        $price1 = 6.5 * $qty1;
        $price2 = 16.5 * $qty2;
        $price3 = 10 * $qty3;
        $total = $price1 + $price2 + $price3;
        $total = number_format($total, 2);
        $problem = false;

        //check for each value


        if (empty($date)) {
            $problem = true;
            array_push($errorMsg, "Please enter your booking date!");
        }

        if (empty($time)) {
            $problem = true;
            array_push($errorMsg, "Please enter your booking time!");
        }
        if (is_numeric($qty1) == false) {
            $problem = true;
            array_push($errorMsg, "Please enter number only in the quantity section (kid)!");
        }
        if (is_numeric($qty2) == false) {
            $problem = true;
            array_push($errorMsg, "Please enter number only in the quantity section (adult)!");
        }
        if (is_numeric($qty3) == false) {
            $problem = true;
            array_push($errorMsg, "Please enter number only in the quantity section (OKU)!");
        }
        //if no problem
        if (!$problem) {
            //insert into datbase
            $insertQuery = "INSERT INTO booking(bookID,movieName,date,time,qty_kid,qty_adult,qty_oku,price,userID) 
                                VALUES(0,'$movieName','$date','$time','$qty1','$qty2','$qty3',$total,$custID)";
            $selectQuery = "SELECT * FROM booking WHERE custName='$name'";
            //prompt user that register successfully

            if (mysqli_query($dbc, $insertQuery)) {
                echo "<p>Congratulations, you have registrated successfully.</p>";
            } else {
                echo"<p>Database error. Please try again later</p>";
            }
            mysqli_close($dbc);
            //prompt the total
            print "<p> Your total price is RM $total</p>";
            print '<p> You can look your  <a href="view_booking.php">booking history here</a></p>';
            //clear the posted values
            $_POST = array();
        } else {//forget a field
            array_push($errorMsg, "Please check again the field!");
        }
    }
}
?>


    <h2>Book now</h2>
    <form method="post" action="booking.php">



        <p>Movie:<br/>
            <select name="movie" id="movie">

                <option value="The Witcher Nightmare of the wolf">The Witcher Nightmare of the wolf</option>
                <option value="Disney's Cruella">Disney's Cruella</option>
                <option value="Oxygen">Oxygen</option>
                <option value="The 8th Night">The 8th Night</option>
                <option value="Nightbooks">Nightbooks</option>
                <option value="Sweet & Sour">Sweet & Sour</option>
                <option value="My Little Pony: A New Generation">My Little Pony: A New Generation</option>
                <option value="Army of the Dead">Army of the Dead</option>
                <option value="Outside the Wire">Outside the Wire</option>
                <option value="SAS: Red Notice">SAS: Red Notice</option>
                <option value="audi">Dynasty Warriors</option>
                <option value="Sweet Girl">Sweet Girl</option>
                <option value="Bad Genius">Bad Genius</option>
                <option value="Zack Snyder's Justice League">Zack Snyder's Justice League</option>
                <option value="Godzilla vs. Kong">Godzilla vs. Kong</option>
                <option value="Awake">Awake</option>
                <option value="The Conjuring: The Devil Made Me Do It">The Conjuring: The Devil Made Me Do It</option>
                <option value="Blood Red Sky">Blood Red Sky</option>
                <option value="A classic horror story">A classic horror story</option>
                <option value="Luca">Luca</option>

            </select>
        </p>

        <p>Date:<br/>
            <input type="text" name="date" size="20"/>
        </p>

        <p>Time:<br/>
            <input type="text" name="time" size="20"/>
        </p>

        <p>Kid (RM6.50/ticket ):<br/><input type="text" name="qty1" size="20" value="0" placeholder="Quantity"/><br/></p>
        <p>Adult (RM16.50/ticket ):<br/><input type="text" name="qty2" size="20" value="0" placeholder="Quantity"/><br/></p>
        <p>OKU (RM10/ticket ):<br/><input type="text" name="qty3" size="20" value="0" placeholder="Quantity"/><br/></p>



        <p><input type="submit" name="submit" value="Register"/></p>
        <input type="hidden" name="submitted" value="true"/>
<?php
if (isset($_POST['submitted'])) {
    for ($i = 0; $i < count($errorMsg); $i++) {
        echo "<p style='color:red;font-size:16px;'>$errorMsg[$i]</p>"; //prompt validation error
    }
}
?>

        <center>
    </form>
        <?php
        require ('footer.php');
        ?>