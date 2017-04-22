<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
<head>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="keywords" content="#" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps -->




    <!-- Web-Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- //Web-Fonts -->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="banner" id="banner">
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="#"><h2>АвтоТалант</h2></a>
            </div>


            <!-- Navigation -->

            <div class="menu">
                <div class="container">
                    <button class="btn-nav">
                        <div class="bar arrow-top-r"></div>
                        <div class="bar arrow-middle-r"></div>
                        <div class="bar arrow-bottom-r"></div>
                    </button>
                    <nav class="nav-container hidden hideNav">
                        <ul class="nav-list">
                            <li class="list-item"><a class="scroll" href="#banner"><img  src="/fonts/user.png"></a></li>
                            <li class="list-item"><a class="scroll" href="#services"><img  src="/fonts/frostwire.png"></a></li>
                            <li class="list-item"><a class="scroll" href="#price"><img  src="/fonts/scilab.png"></a></li>
                            <li class="list-item"><a class="scroll" href="#team"><img  src="/fonts/configusers.png"></a></li>
                            <li class="list-item"><a class="scroll" href="#portfolio"><img  src="/fonts/gphoto.png"></a></li>

                            <li class="list-item"><a class="scroll" href="#contact"><img  src="/fonts/ekiga.png"></a></li>

                        </ul>
                    </nav>
                </div>
            </div>

            <!-- //Navigation -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>

</div>






<?=  $content ?>








<div class="footer">
    <div class="container">
        <p class="agileinfo"> &copy; 2016. All Rights Reserved | Design by <a href="">Zharkov@Co</a></p>
    </div>
</div>

<!-- Default-JavaScript-File --> <script type="text/javascript" src="/js/jquery.min.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap --> <script type="text/javascript" src="/js/bootstrap.js"></script>

<!-- Navigation-JavaScript -->
<script type="text/javascript" src="/js/jquery-func.js"></script>
<script>
    $(window).load(function() {
        $(".btn-nav").on("click tap", function() {
            $(".nav-container").toggleClass("showNav hideNav").removeClass("hidden");
            $(this).toggleClass("animated");
        });
    });
</script>
<!-- //Navigation-JavaScript -->
<!--script for portfolio-->
<script src="/js/lightbox-plus-jquery.min.js"> </script>
<script src="/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<!--//script for portfolio-->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //start-smoth-scrolling -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>