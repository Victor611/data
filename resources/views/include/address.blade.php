<section class="address-section section">
    <div class="container text-justify">
        @foreach($block as $address)
            @if($address->position == 1)
                <?php
                switch (App::getLocale()) {
                    case('en'):
                        $a_title = $address->titleen;
                        $a_intro = $address->introen;
                        break;
                    case('ru'):
                        $a_title = $address->titleru;
                        $a_intro = $address->introru;
                        break;
                    case('uk'):
                        $a_title = $address->titleuk;
                        $a_intro = $address->introuk;
                        break;
                };?>
            @endif
        @endforeach
            <h2 class="title">{{$a_title}}</h2>
            <p class="intro">{{$a_intro}}</p>

        <div class="row">
            <ul class="address list-unstyled col-md-6 col-sm-10 col-xs-12 col-md-offset-3 col-sm-offset-1 xs-offset-0">
                @foreach($block as $address)
                    <?php
                    switch (App::getLocale()) {
                        case('en'):
                            $a_text = $address->texten;
                            break;
                        case('ru'):
                            $a_text = $address->textru;
                            break;
                        case('uk'):
                            $a_text = $address->textuk;
                            break;
                    };?>
                    <li><i class="fa fa-{{$address->class}}"></i>{!! $a_text !!}</li>
                @endforeach
            </ul>
        </div><!--//row-->
    </div><!--//container-->
</section><!--//contact-other-section-->