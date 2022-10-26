<?php
    $path =  dirname(__FILE__);
    define("ROOT", $path);

    require (ROOT.'/config/start.php');
?>

<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Одностраничный шаблон сайта Landing Page от bayguzin.ru</title>
<!--=================================
Meta tags
=================================-->
<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
<!--=================================
Style Sheets
=================================-->
<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/animations.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.flickr.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link rel="stylesheet" href="css/main.css">

<script async src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body class="eschool" data-spy="scroll" data-target="#navbar" data-offset="70">

<!--====================================
Body Content
=======================================-->
<div class="navbar-custom">
    <div class="container">
        <a href="index.php" class="logo red">ДОСААФ</a>
        <nav id="navbar">
            <a href="#" class="nav-triger"><span class="fa fa-navicon"></span></a>
            <ul class="main-menu nav">
                <li><a href="#section0">Вступление</a></li>
                <li><a href="#section1">Цены</a></li>
                <li><a href="#section2">О нас</a></li>
                <li><a href="#section4">Отзывы</a></li>
                <li><a href="#section5">Контакты</a></li>
                <li><a href="#section3">Авто</a></li>
            </ul>
        </nav>

    </div>
</div>

<section id="section0" class="header">
    <div class="container">
        <div class="headerInner">
            <h2>Автошкола "ДОСААФ"<br>Димитровград</h2>
            <p>Отправить заявку на <b class="red">обучение</b></p>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                	<form>
                    	<input type="text" placeholder="Ваше Имя">
						<input type="email" placeholder="Ваш Email">
                    	<input type="tel" placeholder="Ваш номер телефона">
						<button class="btn btn-default btn-head mt-20 mb-50">Отправить заявку</button>
                	</form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="excellence mb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <figure class="mt-50"><img src="/img/car.png" alt=""></figure>
                    </div>
                    <div class="col-sm-6">
                        <h5 style="color:#000">Хватит мечтать, пора становиться <span
                                style="color:#ffc000">водителем!</span></h5>
                        <p>
                            Наши слушатели проходят обучение на высоком уровне и оптимальных ценовых условиях. Базовый
                            курс обучения в нашей автошколе включает в себя теорию, практику вождения, учебные
                            материалы, выдачу свидетельства установленного образца, а также организованную сдачу
                            экзаменов под руководством представителя автошколы. Наша автошкола может предложить Вам
                            поэтапную форму оплаты обучения ( в рассрочку).
                        </p>
                            Уважаемые кандидаты в водители! Первым, что вам потребуется перед тем как записаться в нашу
                            школу — это глубокое убеждение в том, что вы идете к нам за освоением знаний правил дорожного
                            движения и приобретением достаточных навыков вождения транспортного средства, а не просто
                            получить права.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section1" class="our-courses parallax parallax_one" data-stellar-background-ratio="0.5" style="background-position: center bottom">
    <div class="overlay"></div>
    <div class="parallax_inner">
    <div class="container">
        <div class="row">
        	<div class="text-center mb-50 head">
            	<h2 style="color:#fff" class="mb-25">Тарифы и цены</h2>
			</div>
            <div class="col-sm-4" style="text-align:center; color:#fff; ">
                <figure style="color:#ffc000">
                	<h4>24 000<i class="fa fa-rub" aria-hidden="true"></i></h4>
                </figure>
                <div class="info">
                    <h6>Категория «В»</h6>
                    <p>Легковые автомобили</p>
                </div>
            </div>

            <div class="col-sm-4" style="text-align:center; color:#fff">
                <figure style="color:#ffc000">
                	<h4>6 000<i class="fa fa-rub" aria-hidden="true"></i></h4>
                </figure>
                <div class="info">
                    <h6>Категория «А1»</h6>
                    <p>Внедорожные транспортные средства, квадроцикл, снегоход</p>
                </div>
            </div>

            <div class="col-sm-4" style="text-align:center; color:#fff">
                <figure style="color:#ffc000">
                	<h4>26 950<i class="fa fa-rub" aria-hidden="true"></i></h4>
                </figure>
                <div class="info">
                    <h6>Категория «С»</h6>
                    <p>Грузовые автомобили и Автомобильная техника Министерства обороны</p>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>

<section id="section2" class="our-courses mt-30 mb-50">
    <div class="container">
        <div class="text-center mb-50 head">
            <h2 class="mb-25">О <span>НАШЕЙ</span> Компании</h2>
            <p>
                Предметом и целью деятельности Учреждения является обучение граждан, профессиональная подготовка граждан
                по военно-учётным специальностям для Вооруженных Сил Российской Федерации, других войск, воинских
                формирований и органов по программам Министерства обороны Российской Федерации;
                Подготовка специалистов массовых технических профессий согласно перечню в приложении к лицензии на право
                ведения образовательной деятельности по программам профессиональной подготовки. Преподавание, учебная и
                служебная документация в учреждении ведутся на государственном языке РФ.
            </p>
        </div>
        <div class="row courses top">
            <div class="col-sm-4 course text-bold clearfix">
                <figure class="pull-left mt-10"><i style="font-size:80px; color:#5A9BD1" class="fa fa-check-circle" aria-hidden="true"></i></figure>
                <div class="info">
                	<h5>Преимущество №1</h5>
                    <p>Имеются современные компьютерные и тренажерные классы, оборудованые учебными пособиями</p></div>
            </div>
            <div class="col-sm-4 course text-bold clearfix">
                <figure class="pull-left mt-10"><i style="font-size:80px; color:#FFC000" class="fa fa-check-circle" aria-hidden="true"></i></figure>
                <div class="info">
                	<h5>Преимущество №2</h5>
                    <p>В нашей автошколе работают высококвалифицированные преподаватели теоретического курса</p>
                </div>
            </div>
            <div class="col-sm-4 course text-bold clearfix">
                <figure class="pull-left mt-10"><i style="font-size:80px; color:#EE6555" class="fa fa-check-circle" aria-hidden="true"></i></figure>
                <div class="info">
                	<h5>Преимущество №3</h5>
                    <p>В нашей автошколе имеется постоянно обновляющейся автопарк различных моделей грузовых и легковых автомобилей</p>
                </div>
            </div>

		</div>
        <div class="text-center mb-50 head">
            <p>После успешного окончания автошколы вы получите свидетельство установленного образца, которое дает право
                на сдачу экзамена на получение водительского удостоверения в любой точке России.</p>
            <p>
                Теоретические занятия по изучению правил дорожного движения проводятся в дневное и вечернее время. Консультации и занятия в компьютерном классе — днем и вечером в удобное для Вас время.Подготовка теоретического экзамена на компьютерах по принципу приема экзамена в ГИБДД.
            </p>
        </div>
    </div>
</section>


<section id="section4" class="testimonials text-bold text-center color-white parallax parallax_two" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="parallax_inner owl-carousel" data-slides="1" data-slides-md="1" data-slides-sm="1" data-margin="0" data-loop="true" data-dots="true" data-nav="false">
        <div class="container">
            <h5>Хорошая автошкола</h5>
            <p>
                С большим удовольствием учусь в этой автошколе. Благодаря инструктору по вождению смогла пересилить свой страх и начать водить машину. Теория проходит в уютных классах, преподаватель каждому объясняет как нужно себя вести в разных ситуациях. Процесс обучения протекает очень хорошо, потому что с каждым днем я все больше уверенно себя чувствую за рулем и обращаю внимание на знаки.
            </p>
        </div>
        <div class="container">
            <h5>Мне понравилось</h5>
            <p>
                С большим удовольствием учусь в этой автошколе. Благодаря инструктору по вождению смогла пересилить свой страх и начать водить машину. Теория проходит в уютных классах, преподаватель каждому объясняет как нужно себя вести в разных ситуациях. Процесс обучения протекает очень хорошо, потому что с каждым днем я все больше уверенно себя чувствую за рулем и обращаю внимание на знаки.
            </p>
        </div>
        <div class="container">
            <h5>Отлично</h5>
            <p>
                Все замечательно,стараются научить по максимуму ,с желанием в помощи сдать и получить права,расписание строиться из возможностей обучающихся ,все просто замечательно )
            </p>
        </div>
    </div>
</section>

<section class="trial mt-40 mb-30 text-bold text-center" id="section5">
    <div class="container">
        <h3>Появились вопросы? Звоните не откладывая</h3>
        <h2 style="color:#000"><i style="color:#ffc000" class="fa fa-phone-square" aria-hidden="true"></i> 8(84235)2-09-46</h2>
    </div>
</section>

<section id="section3" class="our-courses parallax parallax_one" data-stellar-background-ratio="0.5" style="background-position: center bottom">
    <div class="overlay"></div>
    <div class="parallax_inner">
        <div class="container">
            <div class="text-center mb-50 head">
                <h2 class="mb-25" style="color:#fff">Наши <span style="color:#ffc000">автомобили</span></h2>
            </div>
            <div class="row courses">
                <div class="col-md-4 col-sm-6 course text-bold clearfix">
                    <div class="course_inner">
                    <figure class="pull-left mt-10"><img alt="" style="height:170px;" src="img/ford_focus_3.png"></figure>
                    <div class="info">
                        <h5 style="color:#fff">Легковые</h5>
                        <p>ВАЗ 21074</p>
                        <p>SKODA Fabia</p>
                        <p>LADA 219060</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 course text-bold clearfix">
                    <div class="course_inner">
                    <figure class="pull-left mt-10"><img alt="" style="height:170px;" src="img/ford_focus_32.png"></figure>
                    <div class="info">
                        <h5 style="color:#fff">Мотоциклы</h5>
                        <p>Внедорожные транспортные средства</p>
                        <p>Квадроцикл </p>
                        <p>Снегоход </p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 course text-bold clearfix">
                    <div class="course_inner">
                    <figure class="pull-left mt-10"><img alt="" style="height:170px;" src="img/3307.png"></figure>
                    <div class="info">
                        <h5 style="color:#fff">Грузовые</h5>
                        <p>КАМАЗ 43101</p>
                        <p>КАМАЗ 43106 </p>
                        <p>КАМАЗ 43114 </p>
                        <p>УРАЛ 4320 </p>
                    </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>




<!--<section id="section5" class="trial mt-40 mb-30 text-bold">
    <div class="container">
        <h2 class="text-center" style="color:#000">Контактная информация</h2>
        <div class="row">
    	 	<div class="col-xs-12 col-sm-6" >
    	 		<h6>Телефон:</h6>
    	 		<h3 style="color:#000"><i style="color:#ffc000" class="fa fa-phone-square" aria-hidden="true"></i> +7 (888) 999-99-99</h3>
        	</div>
        	<div class="col-xs-12 col-sm-6" style="text-align:left">
    	 		<h6>Email:</h6>
    	 		<h3 style="color:#000"><i style="color:#ffc000" class="fa fa-envelope" aria-hidden="true"></i><a style="color:#000" href="mailto:email"> ваш email</a></h3>
        	</div>
    	</div>
    	<div class="text-center">
    		<a class="btn btn-default" href="">Заказать звонок</a>
    	</div>

    </div>
</section>-->

<footer class="text-center text-bold">
    <span>«Димитровградская АШ ДОСААФ России» | <a href="" style="color: #909090;">Ульяновская область, г. Димитровград, ул.Куйбышева 310 а</a></span>
</footer>
<!--===============================
Script Source
=================================-->

<script src="js/jquery.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.easing-1.3.pack.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/bootstrap-scrollspy.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
