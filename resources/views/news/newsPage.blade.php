@extends('layouts.news')
@section('title', 'Статья')
@section('content')
<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <div class="single-post nobottommargin">

                    <!-- Single Post
                    ============================================= -->

                    <div class="entry clearfix">

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 11 Марта 2016</li>
                            <li><i class="icon-facetime-video"></i> Видео рубрика</li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            {{$title}}
                        </div><!-- .entry-title end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">
                        
                            {{$shorttext}}

                            <div class="image-discription">
                                <img src="{{ URL::asset($image) }}" alt="Название картинки">
                                <div class="image-row">
                                    <div class="image-row-title ">
                                        <span>REUTERS / Khalil Ashawi</span> Автор: Иван Иванов
                                    </div>
                                    <div class="image-row-text">
                                        <p>В преддверии празднования юбилея первого полета человека в космос телеканал «МИР 24» рассказывает об интересных фактах, связанных с этим событием. Что делают космонавты перед полетом? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nihil autem nobis magnam ipsum dignissimos atque</p>
                                    </div>
                                </div>
                            </div>
                            
                            {{nl2br($text)}}

                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud
                            ============================================= -->
                            <div class="tagcloud clearfix bottommargin">
                                @foreach ($tags as $currentTag)
                                <a href="#">{{ $currentTag }}</a>
                                @endforeach
                            </div><!-- .tagcloud end -->

                            <div class="clear"></div>

                            <!-- Post Single - Share
                            ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>Поделитесь в соцсетях:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->

                </div>

                <!-- Posts
                ============================================= -->
                <div id="posts" class="post-grid grid-3 clearfix">

                    <div class="entry clearfix">
                        <div class="entry-image">
                            <a href="img/empty-1.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-1.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Ложных террористов разоблачили из за ошибки</a></h2>
                        </div>
                        <div class="entry-content">
                            <p>В праве России терроризм определяется как идеология насилия и практика воздействия на общественное сознание, на принятие решений органами государственной власти. </p>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-image">
                            <a href="img/empty-1.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-1.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Что случилось 1 января, 1969 год, Ну погоди!</a></h2>
                        </div>
                        <div class="entry-content">
                            <p>История этого мультфильма началась в 1969 году. Режиссёром Геннадием Сокольским была снята «нулевая» серия, главная идея которой легла в основу знаменитого сериала. </p>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="entry-image">
                            <a href="img/empty-1.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-1.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Что умеют круглые гаджеты и банковские карты</a></h2>
                        </div>
                        <div class="entry-content">
                            <p>В самом начале разработки Windows Vista Microsoft уже начала экспериментировать с гаджетами. Сначала боковая панель была включена в Windows как часть проводника. </p>
                        </div>
                    </div>

                </div><!-- #posts end -->   

                <p><a href="#"><img src="{{ URL::asset('img/ad-big.jpg') }}" alt="Реклама"></a></p>

                <!-- Posts
                ============================================= -->
                <div id="posts" class="post-grid grid-3 clearfix">

                    <div class="entry clearfix noborder nobottommargin">
                        <div class="entry-image">
                            <a href="img/empty-2.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-2.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Геофизики предрекли неизбежную катастрофу Земли</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-clock"></i> 11:14, 24 февраля</li>
                        </ul>
                    </div>

                    <div class="entry clearfix noborder nobottommargin">
                        <div class="entry-image">
                            <a href="img/empty-2.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-2.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Когда зверски болит голова: мясные рецепты от похмелья</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-clock"></i> 11:14, 24 февраля</li>
                        </ul>
                    </div>

                    <div class="entry clearfix noborder nobottommargin">
                        <div class="entry-image">
                            <a href="img/empty-2.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-2.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Неравные браки: старость не радость, а время для свадьбы</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-clock"></i> 10:45, 12 февраля</li>
                        </ul>
                    </div>

                    <div class="entry clearfix noborder nobottommargin">
                        <div class="entry-image">
                            <a href="img/empty-2.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-2.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Австралийская кухня: учимся готовить и ничему не удивляемся</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-clock"></i> 21:34, 14 февраля</li>
                        </ul>
                    </div>

                    <div class="entry clearfix noborder nobottommargin">
                        <div class="entry-image">
                            <a href="img/empty-2.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-2.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Минтруд планирует удвоить пособие по безработице</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-clock"></i> 11:15, 19 февраля</li>
                        </ul>
                    </div>

                    <div class="entry clearfix noborder nobottommargin">
                        <div class="entry-image">
                            <a href="img/empty-2.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-2.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Мужчины и женщины хотят заниматься сексом в разное время суток</a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-clock"></i> 13:19, 21 февраля</li>
                        </ul>
                    </div>

                </div><!-- #posts end -->

                <p><a href="#"><img src="{{ URL::asset('img/ad-yd.jpg') }}" alt="Реклама"></a></p>

                <!-- Posts
                ============================================= -->
                <div id="posts" class="post-grid grid-2 clearfix">

                    <div class="entry clearfix noborder nobottommargin">
                        <div class="entry-image">
                            <a href="img/empty-1.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-1.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">Made in China: плюсы и минусы внедорожника Chery Tiggo 5</a></h2>
                        </div>
                        <div class="entry-content">
                            <p>В праве России терроризм определяется как идеология насилия и практика воздействия на общественное сознание, на принятие решений органами государственной власти. </p>
                        </div>
                    </div>

                    <div class="entry clearfix noborder nobottommargin">
                        <div class="entry-image">
                            <a href="img/empty-1.jpg" data-lightbox="image"><img class="image_fade" src="{{ URL::asset('img/empty-1.jpg') }}" alt="Статья"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">«Мы просто бежали от войны»: как живут в России беженцы из Сирии</a></h2>
                        </div>
                        <div class="entry-content">
                            <p>История этого мультфильма началась в 1969 году. Режиссёром Геннадием Сокольским была снята «нулевая» серия, главная идея которой легла в основу сериала. </p>
                        </div>
                    </div>

                </div><!-- #posts end -->   

            </div><!-- .postcontent end -->



            <!-- Sidebar
            ============================================= -->
            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">

                    <a href="#"><img src="{{ URL::asset('img/ad-1.jpg') }}" alt="Реклама"></a>

                    <div id="text" class="widget clearfix">

                        <h4>Новости дня</h4>
                        <p><a href="#"><b>Дорогое топливо: Госдума и Совфед одобрили повышение акцизов на бензин <i class="icon-line-video"></i></a></b></p>
                        <p><a href="#">Как стать звездой Instagram: 5 лучших приложений для селфи <i class="icon-line-video"></i></a></p>
                        <p><a href="#">Что такое депрессия и как от нее избавиться <i class="icon-line-video"></i></a></p>
                        <p><a href="#">Предупредить трагедию: в домах в Астане проверяют отопительное оборудование <i class="icon-line-camera"></i></a></p>
                        <p><a href="#">Путин отказал террористам в возможности полного перемирия в Сирии <i class="icon-line-video"></i></a></p>
                        <a href="#" class="button button-mini">Все новости</a>

                    </div>                                                                                      

                    <div class="widget clearfix">
                        <h4>Сбербанк России</h4>
                        <p style="font-size: small"><img src="{{ URL::asset('img/tgb-1.jpg') }}" alt="Реклама" align="left">Сбербанк проводит широкий спектр операций с наличностью. Выдача наличных средств без ограничения суммы в пределах остатка на счете клиента. Клиенты имеют возможность получить необходимые консультации по вопросу открытия <a href="#">юридических и индивидуальных предпринимателей</a></p>
                        <h4>Автомобили Porsche</h4>
                        <p style="font-size: small"><img src="{{ URL::asset('img/tgb-2.jpg') }}" alt="Реклама" align="left">У каждой легенды есть свое начало. Легенда 718 началась еще в 1953 году. На гоночном треке. Задача была вскоре были достигнуты конкретные цели. Новые 4-цилиндровые двигатели с турбонаддувом и типичной для Porsche оппозитной конструкцией свидетельствуют не только о нашем ответственном <a href="#">отношении к окружающей среде</a>, но и заботе.</p>                                 
                    </div>

                    <div id="p-carousel" class="widget clearfix">

                        <h4>Фотолента</h4>
                        <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="{{ URL::asset('img/f-1.jpg') }}" alt="Фото">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc center nobottompadding">
                                        <a href="#">Кухня: Чешские брамбораки и запеченная гигантская рулька </a>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="portfolio-single.html">
                                            <img src="{{ URL::asset('img/f-2.jpg') }}" alt="Фото">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="img/f-2.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc center nobottompadding">
                                        <a href="#">Очередь к посольству Франции в Москве не уменьшается</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="widget clearfix noborder nomargin">
                        <a href="#"><img src="{{ URL::asset('img/ad-2.jpg') }}" alt="Реклама"></a>
                    </div>

                    <div id="post-lists" class="widget clearfix">

                        <h4 class="highlight-me">Новости партнеров</h4>
                        <div id="post-list-footer">

                            <div class="spost clearfix noborder nobottommargin">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="{{ URL::asset('img/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <a href="#">Шведский журналист: "Кто придумал эту выдумку про РФ?"</a></
                                    </div>
                                </div>
                            </div>

                            <div class="spost clearfix noborder nomargin">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="{{ URL::asset('img/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <a href="#">Европа очнулась: банки тоннами забирают золото из США</a>
                                    </div>
                                </div>
                            </div>

                            <div class="spost clearfix noborder nomargin">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="{{ URL::asset('img/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <a href="#">Hokkaido: Юридически два курильских острова – уже японские</a>
                                    </div>
                                </div>
                            </div>

                            <div class="spost clearfix noborder nomargin">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="{{ URL::asset('img/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <a href="#">Эксперты: "Турция лишится всей авиации из-за ссор с РФ"</a>
                                    </div>
                                </div>
                            </div>

                            <div class="spost clearfix noborder nomargin">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="{{ URL::asset('img/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <a href="#">Единственный в России производитель БМП стал банкротом</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="widget clearfix noborder nomargin">
                        <a href="#"><img src="{{ URL::asset('img/ad-3.jpg') }}" alt="Реклама"></a>
                    </div>

                    <div class="widget clearfix">

                        <h4>Вы дальнобойщиков поддерживаете?</h4>
                        <input type="radio" name="browser" value="1"> Конечно да, они как мы<Br>
                        <input type="radio" name="browser" value="2"> Не поддерживаю, мешают<Br>
                        <input type="radio" name="browser" value="3"> Что такое Платон?<Br>
                        <input type="radio" name="browser" value="3"> Они мне не нравятся<Br>
                        <input type="radio" name="browser" value="3"> Я поодерживаю всех!<Br>
                        <input type="radio" name="browser" value="3"> Я мне дадут?<Br>
                        <input type="radio" name="browser" value="3"> Я непонимаю ваших вопросов<Br>
                        <Br>
                        <a href="#" class="button button-mini"><i class="icon-checkmark"></i>Голосуем</a>
                    </div>                          

                </div>

            </div><!-- .sidebar end -->

        </div>

    </div>

</section><!-- #content end -->
@stop