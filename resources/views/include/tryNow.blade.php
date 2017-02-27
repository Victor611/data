@foreach($block as $tryNow)
@if($tryNow->position == 1)
    <?php switch (App::getLocale()) {
        case('en'): $title = $tryNow->titleen; $intro = $tryNow->introen; $btnname = $tryNow->btnnameen; break;
        case('ru'): $title = $tryNow->titleru; $intro = $tryNow->introru; $btnname = $tryNow->btnnameru; break;
        case('uk'): $title = $tryNow->titleuk; $intro = $tryNow->introuk; $btnname = $tryNow->btnnameuk; break;
    };
    ?>
    <section class="section tn-section text-center home-tn-section"
             id="try_now"
             style="background: #253340 url('../assets/images/background/{{$tryNow->imgsrc}}') no-repeat 50% top; background-size: cover;">
        <div class="container">
            <h2 class="title ">{!!$title!!}</h2>
            <p class="intro">{!!$intro!!}</p>
            <p>
                <a class="btn btn-tn btn-tn-primary"
                   href="/{{App::getLocale()}}/{!!$tryNow->btnhref!!}">
                    {{$btnname}}
                </a>
            </p>
        </div>
    </section>
@endif
@endforeach
