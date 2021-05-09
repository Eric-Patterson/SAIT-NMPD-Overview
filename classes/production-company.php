<?php
if (!isset($_Cookie['production'])) {
    setcookie("production", "production", time() + (86400 * 30), "/");
}

?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production Company</title>
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
            <h2>Dan Stephenson</h2>
            <h1>Production Company</h1>
            <p>Production Company is a three-semester course that appears in the latter half of the NMPD program within
                your first and second year. This focuses on working within teams to work on numerous large projects and
                touches upon the business and management aspects of the new media industry.</p>
        </div>
        <div class="padding">
            <button class="collapse">Would you be able to elaborate what is the goal of this class?</button>
            <div class="text">
                <p>Production Company is our "industry simulation" class where students learn how to take all of the
                    skills they learn in other classes and bring them together to work on large scale, industry like
                    group projects.</p>
            </div>
        </div>

        <div class="padding">
            <button class="collapse">What advice/information would you give to students interested in the NMPD
                program?</button>

            <div class="text">
                <p>You will get out of the program what you put into it. If you come to class, participate in the
                    tutorial, lesson and discussions, and do the work your instructors suggest outside of class
                    including readings, further ungraded examples and self exploration you'll have a much better
                    understanding of the material and a much more diverse portfolio at the end of your two years.</p>
            </div>
        </div>

        <div class="padding">
            <button class="collapse">How long have you been teaching the NMPD course?</button>
            <div class="text">
                <p>I have been an NMPD instructor since 2013 and have taught this course since 2014.</p>
            </div>
        </div>
    </article>
    <div class="lubaTitanContainer">
        <img id="lubaTitan" src="../images/Titans/dan_titan.png" alt="Mermaid Luba">
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
                            <li class="glide__slide"><img class="image" src="../images/carousel/Production_Company.png" alt=""></li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/prododdod.PNG" alt="">
                            </li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/taoaoaoa.PNG" alt="">
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