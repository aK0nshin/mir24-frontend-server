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

                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            <h2>Академик Акчурин: Роботы никогда не заменят живых хирургов</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 11 Марта 2016</li>
                            <li><i class="icon-camera-retro"></i> Фото: Максим Блинов, РИА Новости.</li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image">
                            <a href="#"><img src="{{ URL::asset('img/page.jpg') }}" alt="Название картинки"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">
                        
                            <p><strong>И действительно, для многих российских водителей сесть нетрезвым за руль скорее авантюра, чем преступление. Мол, с кем не бывает. Хотя именно в пьяных ДТП самый высокий процент погибших и раненых. В неадекватном состоянии водители значительно превышают скорость, иногда и не пытаются увернуться от столкновения или хотя бы затормозить.</strong></p>

                            <p>В преддверии празднования юбилея первого полета человека в космос телеканал «МИР 24» рассказывает об интересных фактах, связанных с этим событием. Что делают космонавты перед полетом? Пока команда инженеров готовит корабль к старту, экипаж смотрит картину Владимира Мотыля «Белое солнце пустыни». Со времен первых покорителей космоса такой киносеанс стал традицией.</p>

                            <p>Эксперты считают этот фильм эталоном кинооператорской работы. На его примере космонавтам объясняют, как работать с камерой и как выстраивать кадр на орбите. Из иллюминатора космического корабля можно отчетливо разглядеть египетские пирамиды, большие мегаполисы и крупные шоссе. Великую китайскую стену, вопреки расхожему мнению, увидеть будет крайне сложно.</p>

                            <blockquote><p>В объектив камер попадает не только вид Земли из космоса. Как бы мы иначе узнали, что на Луне есть памятник погибшим космонавтам. Его установил экипаж «Аполлона-15» в 1971 году.</p></blockquote>

                            @include('partials.item-promo', array('item' => 'Hello World'))

                            <p>Два года назад минчанка Анна Назарчук столкнулась с серьезной проблемой - невынашиванием беременности. Когда надежда на счастливое материнство почти угасла, девушка узнала: определить причину выкидышей можно, благодаря специальному анализу генов.</p>

                            <p>Сегодня пациенты института могут узнать о склонности к нескольким недугам: сахарному диабету, <a href="#">артериальной гипертензии</a> остеопорозу, некоторым сердечно-сосудистым заболеваниям. Все эти патологии многофакторные. То есть их развитие провоцируют не только «неправильные» гены, но и условия жизни человека. А значит, шанс не заболеть все же есть.</p>

                            <p>В качестве доводов в пользу избрания замминистра другой меры пресечения адвокаты представили положительные характеристики на Пирумова от руководства Эрмитажа, Малого театра, Троице-Сергиевой лавры, главного раввина России Берла Лазара и представителей армянской религиозной общины.</p>

                            <p>Спецслужба представила расшифровку аудиозаписи, которая велась на одной из встреч с «партнерами» чиновника, на заседании суда. По мнению ФСБ, запись подтверждает его вину. Сегодня защита Пирумова пытается обжаловать его арест.</p>
                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud
                            ============================================= -->
                            <div class="tagcloud clearfix bottommargin">
                                <a href="#">политика</a>
                                <a href="#">спорт</a>
                                <a href="#">новости</a>
                                <a href="#">медия</a>
                                <a href="#">криминал</a>
                                <a href="#">музыка</a>
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

                    <!-- Post Menu
                    ============================================= -->
                    <div class="post-navigation clearfix">

                        <div class="col_half nobottommargin">
                            <a href="#">&lArr; Вернуться в раздел "Общество"</a>
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            <a href="#">Вернуться к списку всех новостей &rArr;</a>
                        </div>

                    </div><!-- .post-navigation end --> 

                </div>

            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">

                    <div class="widget clearfix">

                        <h4>Выбор редакции</h4>

                    </div>

                    <div class="widget clearfix">

                        <h4>Фотоленты</h4>

                    </div>

                    <div class="widget clearfix">

                        <h4>Лица мира</h4>

                    </div>
                    
                    <div class="widget clearfix">

                        <h4>Телеканал МИР 24</h4>

                    </div>  

                    <div class="widget clearfix">

                        <h4>Все новости</h4>

                    </div>  

                    <div class="widget clearfix">

                        <h4>Мир рекомендует</h4>

                    </div>                              

                </div>

            </div><!-- .sidebar end -->

        </div>

    </div>

</section><!-- #content end -->
@stop