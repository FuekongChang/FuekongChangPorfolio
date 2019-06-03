<!DOCTYPE html>
<html class="home" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Uppal Transport</title>
    <link rel="stylesheet" href="Css/main.css">
</head>

<body>
  <div class="flex-container">
        <div class="hometitle">
            <h1>Fuekong Chang</h1>
        </div>
        <div class="homepage1">
            <p><strong>Welcome!</strong>Well for starters let me say a few things about myself, I work hard at what I try to accomplish, and I can take care of a team base exercise or task if needed one and also  Im a JROTC cadet that took care of his own troop before so I have skills in leadership and in communication,but for another time . Please enjoy my website.</p>
        </div>
        <div class="homepage2">
            <p>I'm a junior now senior that goes to both CART and Mclane high school and I enjoy every second of it
.</p>
            <p>I joined CART to learn more about the coding class that they had to reach for my goal in becoming a game coder and a game designer.</p>
        </div>
        <div class="paragraph">
            <p>I have a few skills like a hard worker, a faster worker and a good teammate and as well as a great talker to people ect...</p>
        </div>
        <div class="header2">
            <h2>My Dream</h2>
        </div>
        <div class="paragraph2">
            <p>My dream as a little kid was to always try to make people happy and what made me happy was playing video games so I wanted a make a great game that people would love and their kids too but I'll get more into that later.
</p>
        </div>
        <div class="header3">
            <h2>Extra Information</h2>
        </div>
        <div class="extra">
            <p>If you want more information about our service take a look at my other pages.</p>
        </div>
    </div>
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="" style="width:100%">
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
