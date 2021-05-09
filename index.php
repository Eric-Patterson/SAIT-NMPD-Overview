<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="styles.css">

</head>


<body>
    <main>

        <header>

            <nav>
                <div class="imageFlex">
                    <a href="index.php">
                        <img class="headerImg" src="images/SAIT-HEADER-FINAL.png" alt="">
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>

                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Classes

                            </button>
                            <div class="dropdown-content">
                                <a href="classes/web.php">Web</a>
                                <a href="classes/rich-media.php">Rich Media</a>
                                <a href="classes/visual.php">Visual</a>
                                <a href="classes/production-company.php">Production</a>
                                <a href="classes/business.php">Business</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

        </header>
        <div class="fontContainer">
            <h3>Click all the coins to gain access to the chest</h3>
        </div>
        <footer class="mainPageFooter">
            <div id="images">
                <div class="card-container">
                    <a href="classes/web.php" alt="links to web">
                        <div class="card">
                            <div class="front">

                                <img src="images/web/web-head.png" alt="">
                            </div>
                            <div class="back">
                                <img src="images/web/web-tail.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-container">
                    <a href="classes/rich-media.php" alt="links to rich media">
                        <div class="card">
                            <div class="front">

                                <img src="images/rich-media/Rich-Media-Head.png" alt="">
                            </div>
                            <div class="back">
                                <img src="images/rich-media/Rich-Media-Tail.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-container">
                    <a href="classes/visual.php" alt="links to visual">
                        <div class="card">
                            <div class="front">

                                <img src="images/visual/visual-head.png" alt="">
                            </div>
                            <div class="back">
                                <img src="images/visual/visual-tail.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-container">
                    <a href="classes/production-company.php" alt="links to production company">
                        <div class="card">
                            <div class="front">

                                <img src="images/production/production-head.png" alt="">
                            </div>
                            <div class="back">
                                <img src="images/production/production-tail.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-container">
                    <a href="classes/business.php" alt="links to business">
                        <div class="card">
                            <div class="front">

                                <img src="images/business/Business-Head.png" alt="">
                            </div>
                            <div class="back">
                                <img src="images/business/Business-Tail.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="chest">
                    <?php
                    if (isset($_COOKIE['richMedia']) && isset($_COOKIE['visual']) && isset($_COOKIE['web']) && isset($_COOKIE['production']) && isset($_COOKIE['business'])) {

                        include 'includes/chest-open.php';
                    } else {
                        include 'includes/chest.php';
                    }
                    ?>
                </div>
            </div>

        </footer>

    </main>
</body>

</html>