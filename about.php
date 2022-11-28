<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];
$menu = $db->getMenu();
$employees = $db->getEmployees();
$introData = $db->getIntroData();
$outroData=$db->getOutro();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Oriented HTML Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" /> <!-- https://fonts.google.com/ -->    
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-business-oriented.css" rel="stylesheet" />
</head>
<!--

TemplateMo 549 Business Oriented

https://templatemo.com/tm-549-business-oriented

-->
<body>
    <div id="parallax-1" class="parallax-window" data-parallax="scroll" data-image-src="img/biz-oriented-header.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tm-logo">
                        <i class="fas fa-industry fa-5x mr-5"></i>
                        <span class="text-uppercase tm-logo-text">Business Oriented</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-nav-container-outer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbar-nav"
                                aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="dark-blue-text"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav ml-auto">
                                <?php
                                foreach ($menu as $item){
                                    echo '
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="'.$item['href'].'">'.$item['name'].'</a>
                                </li>
                                ';
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-7">
        <div class="row mb-4">
            <?php
            foreach ($employees as $employee){
                echo '
                    <div class="col-lg-4 col-md-6 mb-8 tm-px-3">
                        <figure class="effect-milo tm-about-person tm-about-person-layout">
                            <img src="'.$employee['image'].'" alt="Image" class="img-fluid">
                            <figcaption>
                                <h2><span>'.$employee['name'].'</span>&nbsp;&nbsp;'.$employee['position'].'</h2>
                                <p class="mb-4">'.$employee['about'].'</p>
                                <p>
                                    <a href="'.$employee['linkedin'].'" class="tm-social-link">
                                        <i class="fab fa-linkedin fa-15x tm-social-icon tm-social-icon-2"></i>
                                    </a>
                                    <a href="'.$employee['twitter'].'" class="tm-social-link">
                                        <i class="fab fa-twitter fa-15x tm-social-icon tm-social-icon-2"></i>
                                    </a>
                                    <a href="'.$employee['youtube'].'" class="tm-social-link">
                                        <i class="fab fa-youtube fa-15x tm-social-icon tm-social-icon-2"></i>
                                    </a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                ';
            }
            ?>
        </div>
    </div>
    <div id="parallax-3" class="parallax-window parallax-window-2" data-parallax="scroll"
        data-image-src="img/biz-oriented-footer-3.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tm-overlay p-5 mx-auto text-center">
                        <p class="mb-5 text-white"><?php echo $outroData[0]['text']; ?></p>
                        <a href="contact.php" class="btn btn-primary"><?php echo $outroData[0]['header']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-7">
        <div class="row">
            <div class="col-lg-5 col-md-6 mb-4">
                <h3 class="tm-title-gray mb-4"><?php echo $introData[0]['header']; ?></h3>
                <hr class="mb-5 tm-hr">
                    <p class="mb-5"><?php echo $introData[0]['text']; ?></p>
            </div>
            <div class="col-lg-6 col-md-6 mb-4 mr-0 ml-auto">
                <h3 class="tm-title-gray mb-4"><?php echo $outroData[0]['header']; ?></h3>
                <hr class="mb-5 tm-hr">
                <p class="mb-5"><?php echo $outroData[0]['text']; ?></p>
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <div class="row">
            <p class="col-lg-9 col-md-8 mb-5 mb-md-0">
                Copyright &copy; 2020 <span class="tm-text-primary">Business Oriented</span>
                - designed by <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-link-primary">TemplateMo</a>
            </p>
            <div class="col-lg-3 col-md-4 text-right">
                <a rel="nofollow" target="_blank" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook fa-2x tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter fa-2x tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin fa-2x tm-social-icon"></i>
                </a>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="js/tooplate-script.js"></script>
    <script>
        $(document).ready(function () {
            $('#parallax-1').parallax({ imageSrc: 'img/biz-oriented-header.jpg' });
            $('#parallax-3').parallax({ imageSrc: 'img/biz-oriented-footer-3.jpg' });
        });
    </script>
</body>
</html>