<!DOCTYPE html>
<html class="home" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fuekong Chang</title>
    <link rel="stylesheet" href="Css/main.css">
</head>

<body>
  <div class="flex-container">
        <div class="hometitle">
            <h1>Portfolio</h1>
        </div>
        <div class="homepage1">
            <p>This part of my website is mosly for wanting to get more information about me and my skills.</p>
        </div>
        <div class="homepage2">
            <p>I done some writing and there are some in the slideshow.</p>
        </div>
        <div class="paragraph">
            <p>I done other things as well besides the coding and i been apart of many of CART sponcered activitys.</p>
        </div>
        <div class="header2">
            <h2>Resume</h2>
        </div>
        <div class="paragraph2">
            <p>I have a picture of my resume for you to cover.
</p>
      </div><div class=resume></div>
        <div class="header3">
            <h2>Html/Css/Javascript</h2>
        </div>
        <div class="extra">
            <p>I </p>
        </div>
    </div>
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="Css/pic/a7848302-bf20-4ac1-ab49-5ea6046c1512.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="Css/pic/346fe1ee-8ae8-4507-a2de-d30b158e11a2.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="Css/pic/8e011502-290e-4de5-b3fb-4ffc761af4cd.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="Css/pic/4f1b2bf8-1de5-4443-a6f6-6634f3309a6c.png" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="Css/pic/Pro-Dress-Photo-27.jpg" style="width:100%">
            <div class="text"></div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span> <span class="dot" onclick="currentSlide(5)"></span>
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
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

    </script>
</body>

</html>
