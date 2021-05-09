<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="styles.css">
    <script src="app.js"></script>
</head>


<body>
    <main>

        <header>
            <nav>

                <img class="saitHeader" src="images/sait-header.png" alt="">
                <ul class="navbar">
                    <li class="right">
                        <a id="padding-right-about" href="about.php">| About |</a>
                    </li>
                    <li class="right">
                        <a href="index.php">| Home |</a>
                    </li>
                </ul>
            </nav>

        </header>

        <footer class="mainPageFooter">
            <div id="images">
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
                    <a href="classes/web.php" alt="links to web">
                        <div class="card">
                            <div class="front">

                                <img src="images/web/web-tail.png" alt="">
                            </div>
                            <div class="back">
                                <img src="images/web/web-tail.png" alt="">
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
                <div class="card-container">
                    <a href="classes/visual.php" alt="links to visual">
                        <div class="card">
                            <div class="front">

                                <img src="images/visual/visual-tail.png" alt="">
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

                                <img src="images/production/production-tail.png" alt="">
                            </div>
                            <div class="back">
                                <img src="images/production/production-tail.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="chest">
                    <?php
                if(isset($_COOKIE['richMedia']) && isset($_COOKIE['visual'])&& isset($_COOKIE['web'])&& isset($_COOKIE['production'])&& isset($_COOKIE['business'])){
                  
                    include 'includes/chest-open.php';
                }else{
                    include 'includes/chest.php';
                }
                
                

                ?>

                </div>



            </div>

            <!-- <div id="images">
            <div class="flip-container"> 
         <a href="classes/rich-media.html" alt="links to rich media">  
        <img class="coins" src="images/coin.png" alt="">
        
    </div>
    <div class="flip-container">
        
         <a href="classes/web.html" alt="links to rich media">  
        <img class="coins" src="images/coin.png" alt="">
        </a> 
    
    </div> 
    <div class="flip-container">
          <a href="classes/business.html" alt="links to rich media">  
        <img class="coins" src="images/coin.png" alt="">
        </a> 
    </div>
    <div class="flip-container">
         <a href="classes/visual.html" alt="links to rich media">  
        <img class="coins" src="images/coin.png" alt="">
        </a> 
    </div>
    <div class="flip-container">
         <a href="classes/production-company.html" alt="links to rich media">  
        <img class="coins" src="images/coin.png" alt="">
        </a>
    </div>
        
        
    </div> -->
        </footer>
    </main>
</body>

</html>