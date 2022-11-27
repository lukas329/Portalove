<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];
$introData = $db->getIntroData();
$infoData = $db->getInfoData();
$menu = $db->getMenu();
$articles = $db->getArticles();
$outroData=$db->getOutro();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Oriented CSS Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="fontawesome/css/all.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/templatemo-business-oriented.css?v=<?php echo time(); ?>">
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

    <div class="container-fluid mt-7">
        <div class="row mb-6">
            <section class="col-lg-6 mb-lg-0 mb-5">
                <div class="tm-intro">
                    <?php
                        foreach ($introData as $item){
                            echo '
                            <h3 class="tm-title-gray mb-4">'.$item['header'].'
                            <hr class="mb-5 tm-hr">
                            <br>
                            <p style="font-size: 18px" class="tm-strategy-text">'.$item['text'].'</p>
                            <img src="'.$item['image'].'"alt="Company Background Image" class="img-fluid tm-mb-3" 
                            style="max-height: 400px; width: 500px">
                            
                            
                            ';
                        }
                    ?>

                </div>
            </section>
            <section class="col-lg-6">
                <h3 class="tm-title-gray mb-4">Naše priority</h3>
                <hr class="mb-5 tm-hr">

                    <?php
                        foreach ($infoData as $item){
                            echo '
                            <div class="tm-strategy-box mb-5">
                            <img src="'.$item['image'].'" alt="Image" class="img-fluid tm-strategy-img" style="width: 150px; height: 150px">
                            <div>
                            <h4 class="tm-text-primary">'.$item['header'].'</h4>
                            <p class="tm-strategy-text">'.$item['text'].'</p>
                            </div> </div>
                            ';
                        }

                    ?>

            </section>
        </div>
        <!-- Services -->
        <h3 class="tm-title-gray mb-4">Články</h3>
        <div class="row mb-7">
            <?php
            foreach ($articles as $item){
                echo '
                <div class="col-lg-4 col-md-6" style="max-height: 600px; overflow: hidden">
                    <div class="tm-bg-gray tm-box">
                        <div class="text-center mb-3">
                            <img src="'.$item['image'].'"alt="Image article" class="img-fluid tm-mb-3" style="width: 300px; height: 150px">
                        </div>
                        <h4 class="tm-text-primary tm-h3 mb-5">'.$item['header'].'</h4>
                        <form method="post" action="detail.php">
                            <input type="submit" name="submit" value="Viac">
                            <input type="hidden" name="id" value="'.$item['id'].'">
                           
                        </form>
                        <p>'.$item['text'].' </p>
                        
                    </div>
                </div>
                ';
            }
            ?>
        </div>

        <form method="post" action="articles.php" style="padding-bottom: 100px">
            <input type="submit" name="article" value="Všetky články" >
        </form>
    </div>


    <div id="parallax-2" class="parallax-window parallax-window-2" data-parallax="scroll"
        data-image-src="img/biz-oriented-footer.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php
                    foreach ($outroData as $item){
                        echo '
                        <div class="tm-overlay tm-bg-white">
                            <h4 class="tm-text-primary mb-5">'.$item['header'].'</h4>
                            <p class="mb-5">'.$item['text'].'</p>
                            <a href="contact.php" class="btn btn-primary">Idem na to!</a>
                        </div>
                        ';
                    }
                    ?>

                </div>
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
            $('#parallax-2').parallax({ imageSrc: 'img/biz-oriented-footer.jpg' });
        });
    </script>
</body>

</html>