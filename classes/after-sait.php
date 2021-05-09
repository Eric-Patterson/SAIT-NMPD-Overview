<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Sait</title>
    <link rel="stylesheet" href="../styles-after-sait.css">
    <link rel="stylesheet" href="../glide.core.css">
    <link rel="stylesheet" href="../glide.theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>
    <header>
        <nav>
            <div class="imageFlex">
                <a href="index.php">
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

    <article class="employment">
        <div class="backgroundContainer">
            <h2>Employment Opportunities</h1>
                <p>SAIT’s School of Information and Communication Technologies where the New Media Production and Design
                    Program resides, has an employment rate of 90% after graduation with a $39,00 average starting
                    salary.
                    With their Diploma in the New Media Production and Design Program, many graduates have continued
                    their education, freelancing, opening small businesses or seeking employment in numerous fields.
                    Some career opportunities include: Graphic designers, web designers, communications specialists, and
                    game designers.
                </p>
        </div>
    </article>
    <div class="chestContainer">
        <?php
        include '../includes/after.php';
        ?>
    </div>
    <div class="funding">
        <div class="backgroundContainer">
            <h2>Funding Opportunities</h2>
            <p>At SAIT, there are numerous funding opportunities to fund your education. Aside from student loans,
                Southern Alberta Institute of Technology offers financial advising, student awards, scholarships, and
                bursaries.
            </p>
            <p>
                Financial Advising is offered to all students of SAIT and covers how to pay tuition, they also offer
                additional financial resources that cover the cost of the necessities of students. This includes living
                conditions, managing money, and necessities such as foods and clothing.
            </p>
            <p>
                Student awards, scholarships, and bursaries are offered to every student. Each year SAIT offers entrance
                awards and awards based around each school and program. Alberta education offers many scholarships with
                different requirements that are suited for everyone.
            </p>
            <p>
                For more information on funding opportunities, please click <a href="https://www.sait.ca/admissions/tuition-and-financial-aid/financial-advising">here</a> .
            </p>
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
            </div>
        </div>

    </footer>
    <!-- </div> -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="../app.js"></script>


</body>

</html>