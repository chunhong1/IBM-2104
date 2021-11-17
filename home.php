<!DOCTYPE html>
<?php
require ('header.php'); //include the header 
?>



<body>

    <h2>Now showing</h2>
    <!<!-- Movie Slides -->
    <div class="slideshow-container">

        <div class="mySlides fade" style="width:1000px;">

            <ul>
                <li><a href="movieInfo.php?id=1"><img src="movie1.jpg" width="200" height="300" ></a></li>
                <li><a href="movieInfo.php?id=2"><img src="movie2.jpg" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=3"><img src="movie3.jpg" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=4"><img src="movie4.jpg" width="200" height="300"/></a></li>
            </ul>  

        </div>

        <div class="mySlides fade" style="width:1000px;">

            <ul>
                <li><a href="movieInfo.php?id=5"><img src="movie5.jpg" width="200" height="300" ></a></li>
                <li><a href="movieInfo.php?id=6"><img src="movie6.jpg" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=7"><img src="movie7.jpg" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=8"><img src="movie8.jpg" width="200" height="300"/></a></li>            

        </div>
        <div class="mySlides fade" style="width:1000px;">

            <ul>
                <li><a href="movieInfo.php?id=9"><img src="movie9.jpg" width="200" height="300" ></a></li>
                <li><a href="movieInfo.php?id=10"><img src="movie10.jfif" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=11"><img src="movie11.jpg" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=12"><img src="movie12.jpg" width="200" height="300"/></a></li>


        </div>

        <div class="mySlides fade" style="width:1000px;">
            <ul>
                <li><a href="movieInfo.php?id=13"><img src="movie13.jfif" width="200" height="300" ></a></li>
                <li><a href="movieInfo.php?id=14"><img src="movie14.jpg" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=15"><img src="movie15.jpg" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=16"><img src="movie16.jpg" width="200" height="300"/></a></li>


        </div>
        <div class="mySlides fade" style="width:1000px;">
            <ul>
                <li><a href="movieInfo.php?id=17"><img src="movie17.jfif" width="200" height="300" ></a></li>
                <li><a href="movieInfo.php?id=18"><img src="movie18.jpg" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=19"><img src="movie19.jpg" width="200" height="300"/></a></li>
                <li><a href="movieInfo.php?id=20"><img src="movie20.jpg" width="200" height="300"/></a></li>


        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span> 
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
// Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
    <!-- Allow search based on the category -->
    <table> 
        <tr>
            <th>Movies</th> <th>Categories</th>
        </tr>
        <tr>
            <td><a href="category.php?id=1" style="color:white;">Kids Friendly</a></td>
            <td><a href="category.php?id=2" style="color:white;">Horror</td>
            <td><a href="category.php?id=3" style="color:white;">Fiction</td>
            <td><a href="category.php?id=4" style="color:white;">Disaster</td>
            <td><a href="category.php?id=5" style="color:white;">Thriller</td>
        </tr>
        <tr>
            <td><a href="category.php?id=1"><img src="kid.jpg" width="100" height="100" /></a></td>
            <td><a href="category.php?id=2"><img src="Horror.jpg" width="100" height="100" /></td>
            <td><a href="category.php?id=3"><img src="Fiction.jpg" width="100" height="100" /></td>
            <td><a href="category.php?id=4"><img src="Disaster.jpg" width="100" height="100" /></td>
            <td><a href="category.php?id=5"><img src="Thriller.jpg" width="100" height="100" /></td>
        </tr>


    </table>
    <?php
    require ('footer.php');
    ?>