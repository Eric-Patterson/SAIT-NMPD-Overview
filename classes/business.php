<?php
if (!isset($_Cookie['business'])) {
    setcookie("business", "business", time() + (86400 * 30), "/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business</title>
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
            <h2>Jean Paterson</h2>
            <h1>Business Communications</h1>
            <p>Business of Communications is a course that is taken in your first year in the New Media Production and
                Design program. In this course, you will develop skills in team, project, and personal time management.
                This course focuses on businesses, retaining business relationships, and productivity within the new
                media industry.
            </p>
        </div>
        <div class="padding">
            <button class="collapse">What makes you passionate about the class you teach?</button>
            <div class="text">
                <p>I teach the Business of New Media and am very passionate about students having a solid foundation of
                    basic business principles and professional practice. I realize many students who study in the field
                    of media may aspire to be a skill specific employee, such as I am a web developer or I am a graphic
                    designer, and that will get the average person a job. Those who can appreciate the bigger picture of
                    how and why an employer exists is able to relate to the day-to-day operations at a higher level,
                    often resulting in advancement. </p>
            </div>
        </div>

        <div class="padding">
            <button class="collapse">What advice/information would you give to students interested in the NMPD
                program?</button>
            <div class="text">
                <p>Regardless of what students want to study, I have a similar pitch, "do your homework", one of the
                    saddest days for me is when a student says after one semester "its not what I thought it would be".
                    I think many students who want to get into game development or animation think this is the program
                    to take, and while it might provide some training to get started, there could be better options. I
                    am passionate about recruitment of the right student, for retention in the program. Do your homework
                    before signing up.</p>
            </div>
        </div>
    </article>
    <div class="lubaTitanContainer">
        <img id="jeanTitan" src="../images/Titans/jean_titan.png" alt="Mermaid Luba">
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
                            <li class="glide__slide"><img class="image" src="../images/carousel/business_of_new_media.png" alt="">
                            </li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/business2.PNG" alt="">
                            </li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/woooo.PNG" alt="">
                            </li>
                            <li class="glide__slide"><img class="image" src="../images/carousel/owlbusines.PNG" alt="">
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