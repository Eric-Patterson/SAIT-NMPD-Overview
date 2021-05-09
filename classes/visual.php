<?php
if (!isset($_Cookie['visual'])) {
    setcookie("visual", "visual", time() + (86400 * 30), "/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visual</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../glide.core.css">
    <link rel="stylesheet" href="../glide.theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/all.css">



</head>

<body>
    <header>
        <nav>
            <div class="imageFlex">
                <a href="../index.php">
                    <img class="headerImg" src="../images/SAIT-HEADER-FINAL.png" alt="">
                </a><a href="index.php">
            </div>
            <ul>
                <li>
                    <a href="../index.php">Home</a>
                </li>
                <li>
                    <a href="../about.php">About</a>

                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Classes

                        </button>
                        <div class="dropdown-content">
                            <a href="../classes/web.php">Web</a>
                            <a href="../classes/rich-media.php">Rich Media</a>
                            <a href="../classes/visual.php">Visual</a>
                            <a href="../classes/production-company.php">Production</a>
                            <a href="../classes/business.php">Business</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>

    </header>

    <article>
        <div class="detailsPadding">
            <h2>Andrew Stevenson</h2>
            <h1>Visual Communications</h1>
            <p>Visual Communications is a course that focuses on graphic design and photography elements. Design theory,
                photography, typography, and other techniques are taught through this course. This course spans over
                three semesters and develops design and hands-on skills with Adobe Illustrator, Photoshop, InDesign, and
                XD.</p>
        </div>
        <div class="padding">
            <button class="collapse">What makes you passionate about the class you teach?</button>
            <div class="text">
                <p>I love the fact that design is always evolving. Different regions take on design differently and even
                    colour psychology can change depending on where you're seeing designs from.</p>
            </div>
        </div>

        <div class="padding">
            <button class="collapse">What do you enjoy about teaching the NMPD program?</button>

            <div class="text">
                <p>I love that you can hand out the exact same assignment to 68 people and get completely different
                    submissions from everyone. We all look at design a little differently. Especially when students are
                    first starting out.</p>
            </div>
        </div>

        <div class="padding">
            <button class="collapse">How long have you been teaching the NMPD course?</button>
            <div class="text">
                <p>I started at SAIT in 2011 and began working in NMPD in 2014 as the Business instructor. I've also
                    taught in the Graphic Communications Print Technologies, Journalism Arts, Web Developer Fast-Track,
                    and Continuing Education programs.</p>
            </div>
        </div>
        <div class="padding">
            <button class="collapse">Other than teaching, are there any additional careers you have related to the New
                Media field of work?</button>
            <div class="text">
                <p>I've had a fairly well-rounded career since I've been able to work both on the client side and
                    supplier side. I've been in advertising and print; I've freelanced and done sales all within the new
                    media field.</p>
            </div>
        </div>
    </article>
    <div class="lubaTitanContainer">
        <img id="lubaTitan" src="../images/Titans/andrew_titan.png" alt="Mermaid Luba">
    </div>
    <div class="background">
        <div class="studentWork">
            <div class="studentWorkChild">
                <h2>Student Work</h2>
                <h2>Swipe / Click the arrows to view some of our work</h2>
            </div>
        </div>

        <div class="carouselContainer">
            <div class="carousel">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">

                        <ul class="glide__slides">
                            <li class="glide__slide"><img class="image" src="../images/carousel/Visual_communcations.png" alt=""></li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/visual2.JPG" alt="">
                            </li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/umbrel.PNG" alt="">
                            </li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/moon.PNG" alt="">
                            </li>

                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa fa-chevron-left"></i></button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="contactInfoFooter">
            <img class="saitImgFooter" src="../images/sait-footernew.png" alt="">
            <div class="containerFooter">
                <div class="socials">
                    <p>Connect With Us!</p>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-youtube"></i>
                    <p>Available Online Monday - Friday</p>
                    <p>8:30 am - 4:15 pm</p>
                </div>

                <div class="address">

                    <p><b>SAIT Main Campus</b></p>
                    <address>1301 16 Ave NW</address>
                    <address>Calgary, Alberta</address>
                    <address>T2M CL4</address>
                    <!-- <p>1301 16 Ave NW</p>
                    <p>Calgary Alberta</p>
                    <p>T2M CL4</p> -->
                </div>
            </div>

        </footer>
        <!-- </div> -->
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
        <script src="../app.js"></script>


</body>

</html>