<?php $active = 0; $slide = 0;?>
<!-- Carousel-center -->
<section class="carousel-center-section hidden-xs">
    <div class="container">
        @foreach($block as $title)
        <?php
        switch( App::getLocale() ){
            case( 'en' ):$title = $header->titleen; breack;
            case( 'ru' ):$title = $header->titleru; ; breack;
            case( 'uk' ):$title = $header->titleuk;; breack;
        }?>
            <h2 class="title text-center">{{$title}}</h2>
        @endforeach
        <div id="carousel-center" class="carousel slide" data-ride="carousel" data-interval="1000" data-pause='hover'>
            <ol class="carousel-indicators">
                @while($slide<count($block))
                <li data-target="#carousel-center"
                	data-slide-to="$slide"
                	class="{{$slide==0?"active":''}}">
                </li>
                <?php $slide++;?>	
                @endwhile
            </ol>

            <div class="carousel-inner" style="height: 280px;">
            @foreach($block as $carousel)
            <?php
            switch( App::getLocale() ){
                case( 'en' ):$quote = $carousel->quoteen; $intro = $carousel->introen; break;
                case( 'ru' ):$quote = $carousel->quoteru; $intro = $carousel->introru; break;
                case( 'uk' ):$quote = $carousel->quoteuk; $intro = $carousel->introuk; break;
            };
            ?>
                <div class="item {{$active==0?"active":''}}"><?php $active++;?>
                    @if($carousel->publishimg == '1')
                        <img style="margin:0 auto;" src="assets/images/carousel_center/{{$carousel->imgsrc}}" alt="...">
                    @elseif($carousel->publishquote == '1')
                        <div class="quote">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>{{$quote}}</p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>
                    @else
                        <p class="intro">{{$intro}}</p>
                    @endif
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>