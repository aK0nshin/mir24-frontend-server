<!DOCTYPE html>
<html dir="ltr" lang="ru-RU">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="МИР 24" />

    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/elastic.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script   src="https://code.jquery.com/jquery-1.11.3.min.js"   integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}" ></script>

    <!-- Page Title
    ============================================= -->
    <title>МИР 24 | @yield('title')</title>

</head>

<body class="stretched">
    <!-- Page Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="#" class="standard-logo" data-dark-logo="img/logo-dark.png"><img src="{{ URL::asset('img/logo.png') }}" alt="МИР 24"></a>
                        <a href="#" class="retina-logo" data-dark-logo="img/logo-dark@2x.png"><img src="{{ URL::asset('img/logo@2x.png') }}" alt="МИР 24"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Menu
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul>
                            <li><a href="#"><div>Политика</div></a></li>
                            <li class="current"><a href="#"><div>Общество</div></a></li>
                            <li><a href="#"><div>Главное</div></a>
                                <ul>
                                    <li><a href="#"><div>Подраздел 1</div></a></li>
                                    <li><a href="#"><div>Подраздел 2</div></a></li>
                                    <li><a href="#"><div>Подраздел 3</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div>Культура</div></a></li>
                            <li><a href="#"><div>В содружестве</div></a></li>
                            <li><a href="#"><div>В мире</div></a></li>
                        </ul>

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="#" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Что будем искать?">
                            </form>
                        </div><!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->
        
        <!-- Page Menu
        ============================================= -->
        <div id="page-menu">

            <div id="page-menu-wrap">

                <div class="container clearfix">

                    <div class="menu-title">Второе меню</div>

                    <nav>
                        <ul>
                            <li class="current"><a href="#">Стиль жизни</a></li>
                            <li><a href="#">Мода</a></li>
                            <li><a href="#">Технологии</a>
                                <ul>
                                    <li><a href="#">Химия</a></li>
                                    <li><a href="#">Космонавтика</a></li>
                                    <li><a href="#">Природоведение</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Обзоры</a>
                                <ul>
                                    <li><a href="#">Кухни мира</a></li>
                                    <li><a href="#">Секреты красоты</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Путеводитель</a></li>
                            <li><a href="#">Обзоры</a></li>
                            <li><a href="#">Вакансии</a></li>
                        </ul>
                    </nav>

                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

                </div>

            </div>

        </div><!-- #page-menu end -->
            <section id="slider" class="slider-parallax clearfix">

            <div id="ei-slider" class="ei-slider">
                <ul class="ei-slider-large">

                    <li class="dark">
                        <img src="{{ URL::asset('img/back-big-1.jpg') }}" alt="Slider 1" />
                        <div class="ei-title">
                            <h2><span>Поехали!</span></h2>
                            <h3><span>Ровно в 05:01 мск ракета-носитель "Союз-2.1а" с тремя спутниками "на борту" рванула ввысь, открыв принципиально новую страницу в истории отечественной космонавтики.</span></h3>
                        </div>
                    </li>

        </section>

    <!-- Content
    ============================================= -->
<div class="container">
@yield('content')
</div> <!-- #content end -->

    <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">

            <div class="container">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">          

                        <div class="col_half">

                            <div class="widget clearfix">

                            <img src="{{ URL::asset('img/logo-invert.png') }}" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px;">

                            <p>Свидетельство о регистрации СМИ ЭЛ № ФС77-50091 от 06 июня 2012 года. Свидетельство выдано Федеральной службой по надзору в сфере связи, информационных технологий и массовых коммуникаций. Все права на любые материалы, опубликованные на сайте, защищены в соответствии с российским и международным законодательством об авторском праве и смежных правах. При полном или частичном использовании текстовых материалов МТРК «Мир» активная гиперссылка на главную страницу www.mir24.tv обязательна. </p>

                            </div>

                        </div>

                        <div class="col_half col_last">

                            <div class="widget clearfix">

                            <p>Российская Федерация 115326, Москва, улица Пятницкая, 25</br>
                            107076, Москва, улица Краснобогатырская, 44 (студия)</br>
                            Tel/fax: (495) 648-07-92, 964-08-01, e-mail: mir24@mirtv.ru</br>
                            Коммерческая дирекция: (495) 748-13-90</br>
                            Развитие сети: (495) 748-35-96</br>
                            По вопросам размещения рекламы обращайтесь в рекламное агентство Fohat.</p>

                            <div class="line" style="margin: 20px 0;"></div>
                            
                            <small>Если Вы заметили опечатку, выделите её и нажмите "Ctrl+Enter"</small>

                            </div>

                        </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        <div class="copyrights-menu copyright-links clearfix">
                            <a href="#">Главная</a>/<a href="#">О компании</a>/<a href="#">Реклама</a>/<a href="#">Вакансии</a>/<a href="#">Контакты</a>
                        </div>
                        &copy; 2000 — 2016 МТРК «Мир»
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="#" class="social-icon si-small si-borderless si-rounded nobottommargin si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-rounded nobottommargin si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-rounded nobottommargin si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-rounded nobottommargin si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-rounded nobottommargin si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-rounded nobottommargin si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-rounded nobottommargin si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-rounded nobottommargin si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>

</body>
</html>