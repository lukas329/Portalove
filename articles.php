<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];
$menu = $db->getMenu();
$articles = $db->getAllArticles();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Oriented - Services</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" /> <!-- https://fonts.google.com/ -->    
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-business-oriented.css" rel="stylesheet" />
</head>
<!--

TemplateMo 549 Business Oriented

https://templatemo.com/tm-549-business-oriented

-->
<body>
<div id="parallax-1" class="parallax-window" data-parallax="scroll" data-image-src="https://images.pexels.com/photos/574069/pexels-photo-574069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="tm-logo">
                    <i class="fas fa-industry fa-5x mr-5"></i>
                    <span class="text-uppercase tm-logo-text">mITness</span>
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

    <section class="col-lg-6" style="padding-bottom: 200px; padding-left: 30px">
        <h3 class="tm-title-gray mb-4" style="padding-top: 100px;">Všetky články</h3>
        <hr class="mb-5 tm-hr">

        <?php
        foreach ($articles as $item){
            echo '
                            <div class="tm-strategy-box mb-5" style="height: 200px;overflow: hidden">
                                <img src="'.$item['image'].'" alt="Image" class="img-fluid tm-strategy-img" style="width: 200px; height: 200px">
                                <div>
                                    <h4 class="tm-text-primary">'.$item['header'].'</h4>
                                    <p class="tm-strategy-text">'.$item['text'].'</p>
                                </div> 
                                <form method="post" action="detail.php" style="padding-top: 160px; padding-left: 20px">
                                    <input type="submit" name="submit" value="Viac">
                                    <input type="hidden" name="id" value="'.$item['id'].'">
                                   
                                </form>
                            </div>
            ';
        }

        ?>

    </section>

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
            $('#parallax-3').parallax({ imageSrc: 'img/biz-oriented-footer-2.jpg' });
        });
    </script>
</body>
</html>