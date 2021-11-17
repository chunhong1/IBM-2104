<?php

require ('header.php');
$id = $_GET['id']; //get the id

switch ($id) {
    case 1:
        print '<center><h1>Kids Friendly</h1>
            <table style="text-align: center">
            <tr>
            <td>My Little Pony: A New Generation</td>
            <td>Luca</td>
            </tr>
            
            <tr >
            <td ><a href="movieInfo.php?id=7"><img src="movie7.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=20"><img src="movie20.jpg" width="200" height="300" ></td>
            </tr>
            </center>
        </table>';

        break;

    case 2:
        print '<center><h1>Horror</h1>
            <table style="text-align: center">
            <tr>
            <td>The 8th Night</td>
            <td>Nightbooks</td>
            <td>The Conjuring: The Devil Made Me Do It</td>
            <td>Blood Red Sky</td>
            <td>A classic horror story</td>
            </tr>
            
            <tr >
            <td ><a href="movieInfo.php?id=4"><img src="movie4.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=5"><img src="movie5.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=17"><img src="movie17.jfif" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=18"><img src="movie18.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=19"><img src="movie19.jpg" width="200" height="300" ></td>
            </tr>
            </center>
        </table>';

        break;
    
        case 3:
        print '<center><h1>Fiction</h1>
            <table style="text-align: center">
            <tr>
            <td>The Witcher Nightmare of the wolf</td>
            <td>Disney'.'\'s Cruella</td>
            <td>Outside the Wire</td>
            </tr>
            
            <tr >
            <td ><a href="movieInfo.php?id=1"><img src="movie1.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=2"><img src="movie2.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=9"><img src="movie9.jpg" width="200" height="300" ></td>
            </tr>
            <tr>
            <td>SAS: Red Notice</td>
            <td>Dynasty Warriors</td>
            <td>Bad Genius</td>
            <td>Zack Snyder\'s Justice League
</td>
            </tr>
            <tr>
            <td><a href="movieInfo.php?id=10"><img src="movie10.jfif" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=11"><img src="movie11.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=13"><img src="movie13.jfif" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=14"><img src="movie14.jpg" width="200" height="300" ></td>
            </tr>
            </center>
        </table>';

        break;
        case 4:
        print '<center><h1>Disaster</h1>
            <table style="text-align: center">
            <tr>
            <td>Army of the Dead</td>
            <td>Godzilla vs. Kong</td>
            </tr>
            
            <tr >
            <td ><a href="movieInfo.php?id=8"><img src="movie8.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=15"><img src="movie15.jpg" width="200" height="300" ></td>
            </tr>
            </center>
        </table>';

        break;
    
        case 5:
        print '<center><h1>Thriller</h1>
            <table style="text-align: center">
            <tr>
            <td>Oxygen</td>
            <td>Sweet & Sour</td>
            <td>Sweet Girl</td>
            <td>Awake</td>
            
            </tr>
            
            <tr >
            <td ><a href="movieInfo.php?id=3"><img src="movie3.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=6"><img src="movie6.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=12"><img src="movie12.jpg" width="200" height="300" ></td>
            <td><a href="movieInfo.php?id=16"><img src="movie16.jpg" width="200" height="300" ></td>
            
            </tr>
            </center>
        </table>';

        break;
}

require ('footer.php');

?>


