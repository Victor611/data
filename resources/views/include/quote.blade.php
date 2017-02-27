@foreach($block as $quote)
    @if($quote->position == 1)
        <?php
        switch( App::getLocale() ){
            case( 'en' ): $quote = $quote->introen; break;
            case( 'ru' ): $quote = $quote->introru; break;
            case( 'uk' ): $quote = $quote->introuk; break;
        };
        ?>
        <section class="quote-section">
            <div class="container quote-container">
                <div class="quote"><blockquote>{!! $quote !!}</blockquote></div>
            </div>
        </section>
    @endif
@endforeach