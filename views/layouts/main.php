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
                <a href="#"><h2>E</h2></a>
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






<div class="about" id="about">
    <div class="container">
        <div class="col-md-6 col-sm-6 about-left">
            <h3>О нас :</h3>
            <h6>Автошкола "АвтоТалант"</h6>
            <label class="about-line"></label>
            <p>Тут описание автошколы </p>
            <p class="w3l"> It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            <!-- <a href="#portfolio" class="scroll">SEE PORTFOLIO</a>-->
            <div class="learn">
                <a href="#" data-toggle="modal" data-target="#AboutAvtoTalant">Подробнее</a>
            </div>

            <div id="AboutAvtoTalant" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h3>Автошкола "АвтоТалант"</h3>
                            <h1>Открываемые категории: A, B, C</h1><br>
                            <b>Автошкола Талант –находиться в Шевченковском, Днепровском и Святошинском районе.</b>
                            <p>Автошкола проводит подготовку, переподготовку водителей, а также восстановление навыков на кат.В (легковой автомобиль) на механической коробке передач (МКПП) и автоматической коробке передач(АКПП) ,а также кат.А, А1.(мопед, мотоцикл).<br>
                                В нашей школе работают высококвалифицированные специалисты по теоретическому и практическому обучению. Все преподаватели имеют аттестационное свидетельство МВД Украины. Большой опыт работы в преподавательской сфере.<br>
                                Оборудованны теоретические классы по последним  требованиям гос. автоинспекции ( стенды, плакаты, компьютеры, тренажеры, мульти-медийным оборудованием  и видеоматериалами).<br>
                                Машины для обучения также оборудованны дополнительными педалями, зеркалами, опознавательным знаком и дополнительным оборудованием для упражнений и маневрирований. Занятия по вождению проходят на специально оборудованных площадках (автодром ) и по дорогам столицы.<br>
                                Наборы в группы проходят в разное время (утро, вечер,выходной день а также группа по пятницам ).<br>
                                По окончанию обучению организованая сдача экзаменов в ГАИ в сопровождении администрации автошколы.<br>
                                Мы даем вам возможность пройти качественное, професиональное и индивидуальное обучение.<br>
                                Наш колектив это большая дружная команда. Все кто проходил у нас обучение всегда советуют своим друзьям . Приходите к нам и вы в этом убедитесь сами. Мы постараемся вас научить ездить безопасно по дорогам столицы.<br>
                            <h3> И так коротко о Нас :</h3><br>
                            <b> •	Длительность обучения 2,5 месяца<br>
                                •	Категории А, А1,В.<br>
                                •	высококвалифицированные специалисты<br>
                                •	индивидуальный график<br>
                                •	качественное обучение<br>
                                •	современные классы<br>
                                •	поэтапная оплата<br>
                                •	бесплатные внутренние экзамены<br>
                                •	бесплатное прослушивание пропущенных занятий по теории<br>
                                •	Организованная сдача экзаменов в МРЕО<br></b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6  col-sm-6 about-right">
            <img src="/images/banner_avtotalant.png" alt="" />
        </div>

    </div>

</div>





<div class="services" id="services">
    <div class="container">
        <div class="services-header">
            <h3>Филиалы автошколы "АвтоТалант"</h3>
            <h5>Выбери свою автошколу</h5>
            <center><p>График работы администраторов на филиалах

                    ( с 15.00-19.00) будние дни.

                    Суб.воскр.выходной.</p></center>
            <label class="services-line"></label>
            <h6></h6>

        </div>
        <div class="col-md-4  col-sm-3 service-grid1">
            <h4>М. Святошин</h4>
            <p>М.Нивки, м.Святошин.

                Ул.Чистяковская, 2, этаж 5,каб.510

                Тел.093-600- 10-10, 098-484- 04-04, 050-086- 44-41,</p>
            <a href="#" data-toggle="modal" data-target="#myModal">Расписание</a>
        </div>
        <div class="col-md-4  col-sm-3 service-grid2">
            <h4>М. Левобережная</h4>
            <p>М. Левобережная

                Ул. Марины Расковой (Эвгения Сверстюка), 11-Б, БЦ « Армарис», этаж 4, кааб.420.

                Тел. 093-600- 10-10, 098-484- 04-04, 050-086- 44-42</p>
            <a href="#" data-toggle="modal" data-target="#myModal1">Расписание</a>
        </div>
        <div class="col-md-4  col-sm-3 service-grid3">
            <h4>М. Лукьяновская</h4>
            <p>Ул.Герцена, 6 (Мельникова, 18), этаж 1.

                Тел.093-600- 10-10, 098-484- 04-04, 050-086- 44-43</p>
            <a href="#" data-toggle="modal" data-target="#myModal2">Расписание</a>
        </div>





        <div class="clearfix"></div>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="/images/m1.jpg" alt="" />
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.1367050224267!2d30.39312248760521!3d50.4571789840994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc5e3b90de27%3A0x57d0f2004b628dce!2z0LLRg9C70LjRhtGPINCn0LjRgdGC0Y_QutGW0LLRgdGM0LrQsCwgMg!5e0!3m2!1suk!2sua!4v1484989663411" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

                        <p>Расписание автошколы м. Святошин</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="/images/m2.jpg" alt="" />
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4272.72701725397!2d30.597023864123166!3d50.44894785769835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cff19dd9fd39%3A0x5f3eaa983bbd19ca!2z0J7QntCeICLQmtCy0LDRgNGCLdCQIg!5e0!3m2!1suk!2sua!4v1484991128761" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <p>Расписание автошколы м. Левобережная </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="/images/m3.jpg" alt="" />
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7183.211068445773!2d30.468842088067063!3d50.466267450777714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cdd782e1df71%3A0x5beee0b30aecf1d2!2z0LLRg9C70LjRhtGPINCT0LXRgNGG0LXQvdCwLCA2LCDQmtC40ZfQsg!5e0!3m2!1suk!2sua!4v1484992395107" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <p>Расписание автошколы м. Лукьяновка</p>
                    </div>
                </div>
            </div>
        </div>




    </div>

</div>




<!--Price-->

<div class="price" id="price">
    <div class="container">
        <div class="col-md-6 col-sm-6 price-left">
            <h3>Цены :</h3>
            <h6>Автошкола "АвтоТалант"</h6>
            <label class="price-line"></label>
            <h3>Минимальный  - 3500грн</h3>
            <h3>Оптимальный  - 4100грн</h3>
            <h3>Максимальный - 4700грн</h3>
            <!-- <a href="#portfolio" class="scroll">SEE PORTFOLIO</a>-->
            <div class="learn">
                <a href="#" data-toggle="modal" data-target="#PriceAvtoTalant">Подробнее</a>
            </div>

            <div id="PriceAvtoTalant" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h3>Автошкола "АвтоТалант"</h3>
                            <h1>Минимальный пакет, Оптимальный, Максимальный.</h1>
                            <li>Минимальный (3500 грн.- теоретический курс, практический курс (20 ак.часов на МКПП), горюче

                                смазочные материалы,внутренние экзамены сдачи,перездачи)</li>

                            <li> Оптимальный ( 4100 грн.- .- теоретический курс, практический курс (30 ак.часов на МКПП), горюче

                                смазочные материалы,внутренние экзамены сдачи,перездачи)</li>

                            <li> Максимальный ( 4700 грн.- .- теоретический курс, практический курс (40 ак.часов на МКПП), горюче

                                смазочные материалы,внутренние экзамены сдачи,перездачи)</li>

                            <p> 1 академический час=45 мин.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6  col-sm-6 price-right">
            <img src="/images/banner_avtotalant.png" alt="" />
        </div>

    </div>

</div>
<!--//Price//-->



<div class="testimonials">

    <h3>TESTIMONIALS</h3>
    <h4>Contrary to popular belief</h4>
    <label class="services-line"></label>
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <div class="row">
            <div class="col-xs-offset-3 col-xs-6">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="carousel-content">
                            <div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Aliquam sed ante volutpat, tristique lectus eget, malesuada dolor. Maecenas tristique consectetur tempor. Sed facilisis hendrerit lacus, sit amet venenatis nisi volutpat ut. Sed tristique posuere pellentesque. Curabitur mollis sem rutrum ex dapibus ultricies.<i class="fa fa-quote-right" aria-hidden="true"></i><p>
                                <h5>-Leo Channel</h5>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-content">
                            <div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Maecenas sed elementum nunc. Nulla pellentesque sem ligula. Vestibulum non est venenatis, finibus sem et, commodo ipsum. Curabitur et auctor justo. Etiam rhoncus purus a bibendum euismod. Vestibulum ante ipsum primis in faucibus orci luctus et  posuere.<i class="fa fa-quote-right" aria-hidden="true"></i></p>

                                <h5>-Marc Jacobs</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-content">
                            <div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Duis dictum neque vel metus tincidunt tristique. Aliquam nec risus quis orci imperdiet iaculis. Pellentesque rutrum scelerisque dapibus. Pellentesque placerat, ante at fermentum ultricies, erat lacus lobortis odio, ac tincidunt leo arcu sit amet majority .<i class="fa fa-quote-right" aria-hidden="true"></i></p>

                                <h5>-Carrie Bradshaw</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control" href="#carousel-example" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>

    </div>

</div>



<!--portfolio-->
<div id="portfolio" class="portfolio">
    <div class="container">
        <h3>Портфолио</h3>
        <h4>Наши фотоотчеты:</h4>
        <label class="portfolio-line"></label>
        <h6>Смотри фотографии по всем филиям автошколы...</h6>
        <div class="sap_tabs">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item"><span>м.Святошино/Нивки</span></li>
                    <li class="resp-tab-item"><span>М. Левобережная</span></li>
                    <li class="resp-tab-item"><span>М. Лукьяновка</span></li>
                </ul>
                <div class="clearfix"> </div>
                <div class="resp-tabs-container">


                    <!--м.Святошино-->
                    <div class="tab-1 resp-tab-content">


                        <div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid1">
                            <a href="images/Nivki/20170220_145434.jpg" data-lightbox="example-set" data-title="Автошкола 'Автоталант' метро Нивки/Святошино">
                                <img src="/images/Nivki/20170220_145434.jpg" class="img-responsive zoom-img" alt=""/>
                                <div class="b-wrapper">
                                    <h5>м.Святошино/Нивки</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
                            <a href="images/Nivki/20170220_153106.jpg" data-lightbox="example-set" data-title="Автошкола 'Автоталант' метро Нивки/Святошино">
                                <img src="/images/Nivki/20170220_153106.jpg" class="img-responsive zoom-img" alt=""/>
                                <div class="b-wrapper">
                                    <h5>м.Святошино/Нивки</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid3">
                            <a href="images/Nivki/20170220_153150.jpg" data-lightbox="example-set" data-title="Автошкола 'Автоталант' метро Нивки/Святошино">
                                <img src="/images/Nivki/20170220_153150.jpg" class="img-responsive zoom-img" alt=""/>
                                <div class="b-wrapper">
                                    <h5>м.Святошино/Нивки</h5>
                                </div>
                            </a>
                        </div>


                        <div class="clearfix"> </div>
                    </div>
                    <!--м.Святошино-->


                    <!--м. Левобережная-->
                    <div class="tab-1 resp-tab-content">

                        <div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid1">
                            <a href="images/Levoberezhka/IMG_20170220_151254.jpg" data-lightbox="example-set" data-title="Автошкола 'Автоталант'метро Левобережная">
                                <img src="/images/Levoberezhka/IMG_20170220_151254.jpg" class="img-responsive zoom-img" alt=""/>
                                <div class="b-wrapper">
                                    <h5>м.Левобережная</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 portfolio-grids  portfolio-grid2">
                            <a href="images/Levoberezhka/IMG_20170220_152234.jpg" data-lightbox="example-set" data-title="Автошкола 'Автоталант'метро Левобережная">
                                <img src="/images/Levoberezhka/IMG_20170220_152234.jpg" class="img-responsive zoom-img" alt=""/>
                                <div class="b-wrapper">
                                    <h5>м.Левобережная</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 portfolio-grids  portfolio-grid3">
                            <a href="/images/Levoberezhka/IMG_20170220_152413.jpg" data-lightbox="example-set" data-title="Автошкола 'Автоталант'метро Левобережная">
                                <img src="/images/Levoberezhka/IMG_20170220_152413.jpg" class="img-responsive zoom-img" alt=""/>
                                <div class="b-wrapper">
                                    <h5>м.Левобережная</h5>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--м. Левобережная-->





                    <!--м.Лукьяновка-->
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid1">
                            <a href="images/Lykianovka/IMG_20170220_150308.jpg" data-lightbox="example-set" data-title="Автошкола 'Автоталант'метро Лукьяновка">
                                <img src="/images/Lykianovka/IMG_20170220_150308.jpg" class="img-responsive zoom-img" alt=""/>
                                <div class="b-wrapper">
                                    <h5>м.Лукьяновка</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
                            <a href="images/Lykianovka/IMG_20170220_150653.jpg" data-lightbox="example-set" data-title="Автошкола 'Автоталант'метро Лукьяновка">
                                <img src="/images/Lykianovka/IMG_20170220_150653.jpg" class="img-responsive zoom-img" alt=""/>
                                <div class="b-wrapper">
                                    <h5>м.Лукьяновка</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 portfolio-grids  portfolio-grid3">
                            <a href="images/Lykianovka/IMG_20170220_150736.jpg" data-lightbox="example-set" data-title="Автошкола 'Автоталант'метро Лукьяновка">
                                <img src="/images/Lykianovka/IMG_20170220_150736.jpg" class="img-responsive zoom-img" alt=""/>
                                <div class="b-wrapper">
                                    <h5>м.Лукьяновка</h5>
                                </div>
                            </a>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <!--м.Лукьяновка-->




                </div>
            </div>
        </div>
    </div>
</div>
<!--//portfolio-->




<div class="team" id="team">
    <div class="container">
        <div class="team-header">
            <h3>Преподователи</h3>
            <h5>Все наши преподаватели</h5>
            <label class="portfolio-line"></label>
            <h6>Наша команда, подобрана из лучших специалистов страны...</h6>

        </div>
        <div class="col-md-3 col-sm-3 team-grid team-grid1 animated wow slideInUp" data-wow-delay=".5s">
            <img src="/images/prikol/33331.jpg" alt=" " class="img-responsive" />
            <div class="p-mask">
                <h4>Eva Green</h4>
                <ul>
                    <li><a class="twitter" href="#"></a></li>
                    <li><a class="facebook" href="#"></a></li>
                    <li><a class="pinterest" href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 team-grid team-grid2 animated wow slideInUp" data-wow-delay=".5s">
            <img src="/images/prikol/3332.jpg" alt=" " class="img-responsive" />
            <div class="p-mask">
                <h4>Kristen Stewart</h4>
                <ul>
                    <li><a class="twitter" href="#"></a></li>
                    <li><a class="facebook" href="#"></a></li>
                    <li><a class="pinterest" href="#"></a></li>
                </ul>

            </div>
        </div>
        <div class="col-md-3 col-sm-3 team-grid team-grid3 animated wow slideInUp" data-wow-delay=".5s">
            <img src="/images/prikol/3333.jpg" alt=" " class="img-responsive" />
            <div class="p-mask">
                <h4>Daniel Jill</h4>
                <ul>
                    <li><a class="twitter" href="#"></a></li>
                    <li><a class="facebook" href="#"></a></li>
                    <li><a class="pinterest" href="#"></a></li>
                </ul>

            </div>
        </div>
        <div class="col-md-3 col-sm-3 team-grid team-grid4 animated wow slideInUp" data-wow-delay=".5s">
            <img src="/images/prikol/3334.jpg" alt=" " class="img-responsive" />
            <div class="p-mask agileinfo">
                <h4>John Miller</h4>
                <ul>
                    <li><a class="twitter" href="#"></a></li>
                    <li><a class="facebook" href="#"></a></li>
                    <li><a class="pinterest" href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="contact" id="contact">
    <div class="container">
        <div class="col-md-6 col-sm-6 contact-left">
            <h3>Пакет документов необходимых для записи и обучения в автошколе :</h3>
            <label class="headline"></label>
            <font color="white"> <li> 1. Паспорт ксерокопия(1-я, 2-я страница и прописка ), либо документ заменяющий с

                    действующей пропиской.</li>

                <li> 2. Идентификационный код ксерокопия.</li>

                <li>3. Фото 4 шт.( цветные ,3,5*4,5, либо 3*4), желательно без уголка на матовой основе.</li>

                <li> 4. Заполнить заявление прийдя на филиал.</li></font>

        </div>
        <div class="col-md-6 col-sm-6 contact-right">
            <h3>CONTACT US</h3>
            <form action="#" method="post">
                <input type="text" name="your email" placeholder="YOUR EMAIL"><br>
                <textarea rows="4" cols="50" name="your message" placeholder="YOUR MESSAGE"></textarea>
                <input type="submit"  class="hvr-rectangle-in" value="SEND">
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
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