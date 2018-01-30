<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Widara, Belajar Benar</title>
    <link rel="icon" type="image/png" href="../views/uploads/images/favicon.png" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="../web/css/bootstrap.css" media="none" onload="this.media='all';">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" id="header">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../views/uploads/images/widara.png" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#about">Tentang Kami
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="divider-vertical"></li>
                <li class="nav-item">
                    <a class="nav-link" href="#program">Program</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="nav-item">
                    <a class="nav-link" href="#schedule">Jadwal</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

  
        <?= $content ?>
   

<footer>
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
        
<div class="col-md-3">
    <div class="widget widget-footer">
        <div class="widget-title my-4">
            <h5>Sosial Media</h5>
        </div>
        <div class="widget-text">
            <ul>
                <li>
                    <a target="_blank" data-service="instagram" href="#">
                        <div class="d-flex flex-row">
                            <div class="pr-2">
                                <i class="fa fa-instagram fa-lg"></i>
                            </div>
                            <div class="pl-1">
                                widara
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a target="_blank" data-service="twitter" href="#">
                        <div class="d-flex flex-row">
                            <div class="pr-2">
                                <i class="fa fa-twitter fa-lg"></i>
                            </div>
                            <div class="pl-1">
                                widara
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a target="_blank" data-service="facebook" href="#">
                        <div class="d-flex flex-row">
                            <div class="pr-2">
                                <i class="fa fa-facebook fa-lg"></i>
                            </div>
                            <div class="pl-2">
                                widara
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

                <div class="col-md-2">
                    <div class="widget widget-footer">
                        <div class="widget-title my-4">
                            <h5>Support</h5>
                        </div>
                        <div class="widget-text">
                            <ul>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Karir</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="widget widget-footer">
                        <div class="widget-title my-4">
                            <h5>Program</h5>
                        </div>
                        <div class="widget-text">
                            <ul>
                                <li>
                                    <a href="#">Jadwal</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="widget widget-footer">
                        <div class="widget-title my-4">
                            <h5>Office</h5>
                        </div>
                        <div class="widget-text">
                            <ul>
                                <li>Jl. Bantul KM 8 Tegaldowo RT 05 Blok B No 18 Dk. Grujugan Bantul Yogyakarta 55711</li>
                                <li>Phone 082376800500</li>
                                <li>Email tia@widara.co.id</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-12 py-4">
                    copyright &copy; 2018 PT. Widya Dharma Terraindo
                    </div>
                </div>
            </div>
        </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
