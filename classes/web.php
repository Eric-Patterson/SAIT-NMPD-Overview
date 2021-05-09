<?php
if (!isset($_Cookie['web'])) {
    setcookie("web", "web", time() + (86400 * 30), "/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
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
                </a>
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
            <h2>Dan Stephenson & Dudley Storey</h2>
            <h1>Web Communications</h1>
            <p>Web Communication is a three-semester course that focuses on developing web coding skills and working
                with different web scripting languages. In this course, you will learn 4 main coding languages: HTML,
                JavaScript, CSS, and PHP. These will all come together to develop large scale projects in later
                semesters. Other subjects such as MySQL database will be another coding-based application that users
                will be taught to enhance other projects.</p>
        </div>
        <div class="padding">
            <button class="collapse">What makes you passionate about the class you teach?</button>
            <div class="text">
                <p>The world wide web is more and more a part of our world every day. Every business in every industry
                    needs to be online. Music, video, most of our media today is delivered through the web. I am
                    passionate about helping students learn how to build websites and web-based applications so they can
                    create unique and innovative sites for themselves and their clients.</p>
            </div>
        </div>

        <div class="padding">
            <button class="collapse">What do you enjoy about teaching the NMPD program?</button>

            <div class="text">
                <p>I love being able to help students start the journey towards their dream career. Many students come
                    into NMPD with some media production experience, and I get to help them "polish the rough edges" and
                    help students learn and grow as budding professionals so they can embark on an engaging and exciting
                    career post-graduation.</p>
            </div>
        </div>

        <div class="padding">
            <button class="collapse">Other than teaching, are there any additional careers you have related to the New
                Media field of work?</button>
            <div class="text">
                <p>I have worked in the web development and new media industry since 1997. I have worked as a freelance
                    web designer and developer, worked in a media company as an in-house media developer and I worked at
                    a marketing agency as the Manger of Digital Production, overseeing a team of designers and
                    developers.</p>
            </div>
        </div>
    </article>
    <div class="lubaTitanContainer">
        <img class="dandudley" src="../images/Titans/dandud_titan.png" alt="Mermaid Luba">
        <!-- <img id="dandudley" src="../images/Titans/dudley_titan.png" alt="Mermaid Luba"> -->
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
                            <li class="glide__slide"><img class="image" src="../images/carousel/Web_Communications.png" alt=""></li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/dice-buttons.PNG" alt="">
                            </li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/buttons2.PNG" alt="">
                            </li>

                            <!-- <li class="glide__slide">
                                <img class="image" src="../images/carousel/Web_Communications.png" alt="">
                            </li>
                            <li class="glide__slide captionImg">
                                <a href="http://dev.saitnewmedia.ca/~epatterson/mmda225/buttons/">
                                    <img class="image" src="../images/carousel/dice-buttons.PNG" alt=""></a>

                            </li>
                            <li class="glide__slide captionImg">
                                <a href="http://dev.saitnewmedia.ca/~epatterson/mmda222/buttons/">
                                    <img class="image" src="../images/carousel/buttons2.PNG" alt="">
                                </a>
                            </li>
                            <li class="glide__slide captionImg">
                                <img class="image" src="../images/carousel/web2.jpg" alt="">
                            </li>
                            <li class="glide__slide captionImg">
                                <img class="image" src="../images/carousel/web4.jpg" alt="">
                            </li> -->
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