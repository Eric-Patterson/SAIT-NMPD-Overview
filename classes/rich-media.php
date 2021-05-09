<?php
if (!isset($_Cookie['richMedia'])) {
    setcookie("richMedia", "richMedia", time() + (86400 * 30), "/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Media</title>
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
            <h2>Luba Diduch</h2>
            <h1>Rich Media Communications</h1>
            <p>Rich Media Communications is a three-semester course that appears in your first, second, and third
                semester
                in the New Media Production and Design program. This course mainly focuses on video and audio
                production,
                animation theory, and motion graphics. Develop hands-on skills with numerous Adobe applications such as
                After Effects, Media Encoder, Animate, Audition, and Premiere Pro and work with some 3D animation and
                elements with Cinema 4D.</p>
            <ol>
                <li>Adobe After Effects</li>
                <li>Adobe Media Encoder</li>
                <li>Adobe Animate</li>
                <li>Adobe Audition</li>
                <li>Adobe Premiere Pro</li>
                <li>Cinema 4D</li>
            </ol>
        </div>
        <div class="padding">
            <button class="collapse">What makes you passionate about the class you teach?</button>
            <div class="text">
                <p>I am passionate about new media because I believe it provides many pathways for creating
                    beautiful and
                    engaging content while communicating to a variety of audiences</p>
            </div>
        </div>

        <div class="padding">
            <button class="collapse">Would you be able to elaborate what the goal is of this class?</button>

            <div class="text">
                <p>The goal of Rich Communications is to enable students to create motion graphics that contain
                    animation,
                    video, and audio. These media are comprised of content that is a part of the larger picture of web
                    and
                    mobile design.</p>
            </div>
        </div>

        <div class="padding">
            <button class="collapse">What do you enjoy about teaching the NMPD program?</button>
            <div class="text">
                <p>Most of all, I enjoy the interaction with students. Every year I am blown away by how students
                    approach
                    assignments – and how they come up with creative and engaging solutions to design problems.</p>
            </div>
        </div>
    </article>
    <div class="lubaTitanContainer">
        <img id="lubaTitan" src="../images/Titans/luba_titan.png" alt="Mermaid Luba">
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
                            <li class="glide__slide"><img class="image" src="../images/carousel/Rich_Media_Communication.png" alt=""></li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/richmedia5.JPG" alt="">
                            </li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/richmedia3D.JPG" alt="">
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