@extends('layouts.app')

@section('content')

    <div class="bg-slider"></div>
    <!--Carousel-->
    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
    <!-- Marker Slider -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Content Slider -->
        <div class="carousel-inner " id="menu">
            <!------ 1 Slide -------->
            <div class="item active">
                <img src="../assets/images/background/bg-header-5.jpg" alt="...">
                <div class="carousel-caption carousel-center">
                    <h2 class="title">Big Data &ndash; энергия для бизнесса</h2>
                    <p class="intro"> Для смелых и конкурентных стратегий в интернет &ndash; маркетинге</p>
                    <p><a class="btn btn-tn btn-tn-primary" href="#data">Подробнее</a></p>
                    <button type="button"
                            class="play-trigger btn-link modal_video"
                            data-toggle="modal"
                            data-target="#modal-video" >
                        <i class="fa fa-youtube-play"></i>
                        Смотреть презентацию
                    </button>
                </div>
            </div>

            <!------ 2 Slide -------->
            <div class="item">
                <img src="../assets/images/background/bg-header-6.jpg" alt="...">
                <div class="carousel-caption carousel-center">
                    <h2 class="title">Масштабирование продаж для E-commerce</h2>
                    <p class="intro">Алгоритмы исскусственного интелекта для конкурентных стратегий: привлечения новых клиентов, привлечения новых клиентов, стимулирования повторных покупок, увеличения среднего чека и роста продаж</p>
                    <p><a class="btn btn-tn btn-tn-primary" href="#ecommerce">Подробнее</a></p>
                    <button type="button"
                            class="play-trigger btn-link modal_video"
                            data-toggle="modal"
                            data-target="#modal-video" >
                        <i class="fa fa-youtube-play"></i>
                        Смотреть презентацию
                    </button>
                </div>
            </div>

            <!------ 3 Slide -------->
            <div class="item">
                <img src="../assets/images/background/bg-header-7.jpg" alt="...">
                <div class="carousel-caption carousel-center">
                    <h2 class="title">Programmatic Buying + уникальная аудитория</h2>
                    <p class="intro">Революция в технологиях закупки интеренет рекламы. Управляй ключевыми метриками в режиме реального времени. Для каждого сегмента аудитории &ndash; своя стратегия</p>
                    <p><a class="btn btn-tn btn-tn-primary" href="#programmatic">Попробовать</a></p>
                    <button type="button"
                            class="play-trigger btn-link modal_video"
                            data-toggle="modal"
                            data-target="#modal-video" >
                        <i class="fa fa-youtube-play"></i>
                        Смотреть презентацию
                    </button>
                </div>
            </div>

            <!------ 4 Slide -------->
            <div class="item">
                <img src="../assets/images/background/bg-header-8.jpg" alt="...">
                <div class="carousel-caption carousel-center">
                    <h2 class="title">Mobile #1 &ndash; уже в Украине</h2>
                    <p class="intro">Рост конверсий &ndash; 300%. Все форматы, уникальные сегменты аудитории, ретаргетинг</p>
                    <p><a class="btn btn-tn btn-tn-primary" href="#mobile">Подробнее</a></p>
                    <button type="button"
                            class="play-trigger btn-link modal_video"
                            data-toggle="modal"
                            data-target="#modal-video" >
                        <i class="fa fa-youtube-play"></i>
                        Смотреть презентацию
                    </button>
                </div>
            </div>
        </div>

        <!-- Sleder Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <a id="carousel_control" class="carusel_pause" >
            <i class="fa fa-pause" aria-hidden="true"></i>
        </a>

    </div>
    <!-- End Carousel -->

    <!-- Index Content -->
    <div class="sections-wrapper">
        <!-- Index Product -->
        <section class="section our-products">
            <div class="container" id="menu">
                <h2 class="title text-center">Узнайте о наших продуктах</h2>
                <p class="intro text-center">Применение Big Data позволило улучшить попадание в целевую аудиторию более чем в полтора раза</p>
                <!-- Big Data -->
                <div class="row item">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h3 class="title text-center" id="data">Данные делают любую рекламную кампанию более эффективной</h3>
                    </div>
                    <div class="content col-xs-12 col-sm-6 col-md-6">

                        <div class="desc text-justify">
                            <p>Платформа управления данными позволяет превратить массивы необработанной информации в эффективные решения для бизнеса. Big Data включает в себя данные First, Second, Third party data, а также все данные платформ CRM.</p>
                            <p>Мы умеем собирать, анализировать и применять данные для маркетинговых кампаний.</p>
                            <p>Инструменты С8.Data позволяют собирать уникальные аудитории и покупать данные у мировых поставщиков:</p>
                            <p>Использование данных позволяет увеличить эффективность маркетинговых и рекламных  компаний для Programmatic Buying, E-commerce & Mobile.</p>
						</div>
                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="../assets/images/people/profile-s-1.png" alt="" />
                            </div>
                            <div class="quote-content">
                                <blockquote><p><a href="#">Big Data</a> Data Managment Platform (DMP), более 50 уникальных сегментов аудитории</p></blockquote>
                                <p class="source">Алена, Киев</p>
                            </div>
                        </div>
                    </div>

                    <figure class="figure col-md-offset-1 col-sm-offset-0 hidden-xs col-sm-6 col-md-4">
                        <img class="img-responsive" src="../assets/images/figures/figure-1.jpg" alt="" />
                    </figure>
                </div>
                <!-- End Big Data -->
                <!-- E-commerce -->
                <div class="row item">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h3 class="title text-center" id="ecommerce">Конкурентные стратегии</h3>
                    </div>
                    <div class="content col-md-push-6 col-sm-push-0 col-xs-push-0 col-xs-12  col-md-6">
                        <div class="desc text-justify">
                            <p>Для маркетолога всегда актуальна проблема точного попадания в движущуюся цель. Покупатели ваших товаров и услуг находятся в постоянном поиске, исследованиях и сравнениях. </p>
						<p>С помощью анализа Big Data, алгоритмов Programmatic и Machine learnig,  мы решаем прикладные задачи на каждом этапе воронки продаж: от формирования знания и спроса &ndash; до покупки. </p>
						<p>Ретаргетинг, CRM-таргетинг, CPC и CPA-оптимизация &ndash; <strong>мощные инструменты в конкурентной борьбе!</strong></p>
						<p>Наше уникальное предложение – CRM таргетинг.</p>
						<p>Интеграция с CRM – это smart управление продажами</p>
						<p>Пополняйте вашу CRM неограниченным объемом данных для самого лучшего обслуживания клиентов, сегментации целевой аудитории и точного таргетирования для увеличения продаж.</p>
					</div>

                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="../assets/images/people/profile-s-2.png" alt="" />
                            </div>
                            <div class="quote-content">
                                <blockquote><p>Масштабирование продаж для <a href="#">E-commerce </a></p></blockquote>
                                <p class="source">Дмитрий, Киев</p>
                            </div>
                        </div>
                    </div>
                    <figure class="figure col-md-pull-6 col-sm-pull-0 hidden-xs col-md-5">
                        <img class="img-responsive" src="../assets/images/figures/figure-2.jpg" alt="" />
                    </figure>
                </div>
                <!-- End E-commerce -->
                <!-- Programmatic -->
                <div class="row item ">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h3 class="title text-center" id="programmatic">Programmatic — энергия бизнеса</h3>
                    </div>
                    <div class="content col-xs-12 col-md-4">
                        <div class="desc text-justify">
                            <p>Революция в технологиях закупки интернет рекламы. Управляй ключевыми метриками в режиме реального времени. Для каждого сегмента аудитории — своя стратегия<</p>
                            <p>Data Management Platform (DMP) и Programmatic Buying для рекламных и маркетинговых коммуникаций в интернете, роста продаж. Данные — для смелых конкурентных стратегий.</p>
                        </div>
                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="../assets/images/people/profile-s-3.png" alt="" />
                            </div>
                            <div class="quote-content">
                                <blockquote><p><a href="#">Programmatic</a> Buying и Искусственный интеллект для Data-driven Marketing</p></blockquote>
                                <p class="source">Марина, Киев</p>
                            </div>
                        </div>
                    </div>
                    <figure class="figure col-md-offset-1 col-sm-offset-0 hidden-xs col-md-7">
                        <img class="img-responsive" src="../assets/images/figures/figure-3.png" alt="" />
                    </figure>
                </div>
                <!-- End Programmatic -->
                <!-- Mobile -->
                <div class="row item last-item">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h3 class="title text-center" id="mobile">Главный экран в жизни современного человека &ndash; смартфон.</h3>
                    </div>
                    <div class="content col-md-push-8 col-sm-push-0 col-xs-push-0 col-xs-12 col-md-4">

                        <div class="desc text-justify">
                            <p>Если вы не внедрили «mobile» в свои маркетинговые коммуникации &ndash; вы проиграли.</p>
                            <p>Мобильный трафик растет в нашей стране на 40% год! Покупатели ищут информацию о товарах и услугах, проверяют цены, читают отзывы  до и во время походов в магазин.</p>
                            <p>С8.Data – крупнейший поставщик мобильного трафика в Украине. Применяйте инструменты Programmatic mobile,  ретаргетинга в мобильных утсройствах, гиперлокации для масштабирования продаж!</p>
                            <p><strong>Мы предлагаем самое эффективное оружие против конкурентов &ndash; Big Data + Mobile.</strong></p>
                        </div>

                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="../assets/images/people/profile-s-4.png" alt="" />
                            </div>
                            <div class="quote-content">
                                <blockquote><p><a href="#">Mobile</a> &ndash; это будущее маркетинга</p></blockquote>
                                <p class="source">Владимир, Киев</p>
                            </div>
                        </div>
                    </div>
                    <figure class="figure col-md-pull-4 col-sm-pull-0 hidden-xs col-md-7">
                        <img class="img-responsive" src="../assets/images/figures/figure-4.jpg" alt="" />
                    </figure>
                </div>
                <!-- End Mobile -->

                <div class="feature-lead text-center">
                    <h4 class="title">Хотите знать больше?</h4>
                    <p><a class="btn btn-tn btn-tn-secondary" href="#">Подробнее</a></p>
                </div>
            </div>
        </section>
        <!-- End Index Product -->

        <!-- Carousel 2 -->
        <section class="section graf hidden-xs">
            <div class="container">
                <h2 class="title text-center">Рост конверсий &ndash; 300%</h2>
                <div id="graf-carousel" class="carousel slide" data-ride="carousel" data-interval="1000" data-pause='hover'>
                    <ol class="carousel-indicators">
                        <li data-target="#graf-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#graf-carousel" data-slide-to="1"></li>
                        <li data-target="#graf-carousel" data-slide-to="2"></li>
                        <li data-target="#graf-carousel" data-slide-to="3"></li>
                        <li data-target="#graf-carousel" data-slide-to="4"></li>
                        <li data-target="#graf-carousel" data-slide-to="5"></li>
                    </ol>

                    <div class="carousel-inner" style="height: 280px;">
                        <div class="item active">
                            <img style="margin:0 auto;" src="../assets/images/carousel_graf/graf1.png" alt="...">
                            <div class="content" style="margin:0 auto;">
                                <blockquote>
                                    {{--<img style="margin:0 auto;" src="assets/images/carousel_graf/graf1.png" alt="...">--}}
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p><i class="fa fa-quote-right" aria-hidden="true"></i>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <img style="margin:0 auto;" src="../assets/images/carousel_graf/graf2.png" alt="" />
                        </div>
                        <div class="item">
                            <img style="margin:0 auto;" src="../assets/images/carousel_graf/graf3.png" alt="" />
                        </div>
                        <div class="item">
                            <img style="margin:0 auto;" src="../assets/images/carousel_graf/graf4.png" alt="" />
                        </div>
                        <div class="item">
                            <img style="margin:0 auto;" src="../assets/images/carousel_graf/graf5.png" alt="" />
                        </div>
                        <div class="item">
                            <div class="content" style="margin:0 auto;">
                                <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p><i class="fa fa-quote-right" aria-hidden="true"></i>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Carousel 2 -->

        <!-- Our Clients -->
        <section class="section our-clients">
            <div class="container text-center">
                <h2 class="title">Уже с нами:</h2>
                <ul class="our-clients-list list-inline row">
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-1.png" alt="" /></a></li>
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-2.png" alt="" /></a></li>
                    <li class="xs-break col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-3.png" alt="" /></a></li>
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-4.png" alt="" /></a></li>
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-5.png" alt="" /></a></li>
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-6.png" alt="" /></a></li>
                </ul>
                <ul class="our-clients-list list-inline row">
                    <li class="hidden-xs col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-7.png" alt="" /></a></li>
                    <li class="hidden-xs col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-8.png" alt="" /></a></li>
                    <li class="xs-break hidden-xs col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-9.png" alt="" /></a></li>
                    <li class="hidden-xs col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-10.png" alt="" /></a></li>
                    <li class="hidden-xs col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-11.png" alt="" /></a></li>
                    <li class="hidden-xs col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-12.png" alt="" /></a></li>
                </ul>
                <ul class="our-clients-list list-inline row last">
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-13.png" alt="" /></a></li>
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-14.png" alt="" /></a></li>
                    <li class="xs-break col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-15.png" alt="" /></a></li>
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-16.png" alt="" /></a></li>
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-17.png" alt="" /></a></li>
                    <li class="col-xs-4 col-sm-2"><a href="#"><img class="img-responsive img-margin" src="../assets/images/press/press-18.png" alt="" /></a></li>
                </ul>

            </div>
        </section>
        <!-- End Our Clients -->

        <!-- Try Now -->
        <section class="section tn-section text-center home-tn-section" style="background-image: url('../../assets/images/background/bg-footer-1.jpg');">
            <div class="container">
               <h2 class="title ">Готовы ощутить преимущества Big Data?</h2>
               <p class="intro">К нам присоединились уже <span class="counting">300,000</span> человек :)</p>
               <p><a class="btn btn-tn btn-tn-primary" href="/demo#application" >Попробовать сейчас</a></p>
            </div>
        </section>
        <!-- End Try Now -->

    </div>
    <!-- End Index Content -->
@endsection


