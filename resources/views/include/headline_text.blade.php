@foreach($block as $text)
    @if($text->position == 1)
    <?php
    switch( App::getLocale() ){
        case( 'en' ): $title = $text->titleen; $intro = $text->introen; break;
        case( 'ru' ): $title = $text->titleru; $intro = $text->introru; break;
        case( 'uk' ): $title = $text->titleuk; $intro = $text->introuk; break;
    };
    ?>
    <section class="headline-text">
        <div class="headline-text-bg" style="background: #253340 url('../assets/images/{{$text->imagesrc}}') no-repeat 50% top; background-size: cover;" ></div>
        <div class="headline-text-block">
            <div class="container text-center">
                <h2 class="title" id="headline-text">{{$title}}</h2>
                <div class="text-container">
                    <div class="text text-justify">{!! $intro !!}</div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endforeach