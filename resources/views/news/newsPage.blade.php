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
                            <?php echo $title; ?>
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

                            <?php echo $text; ?>
                        
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