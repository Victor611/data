@foreach($block as $ctbtn)
    @if($ctbtn->position == 1)
        <?php switch (App::getLocale()) {
            case('en'): $title = $ctbtn->titleen; $intro = $ctbtn->introen; $btnname = $ctbtn->btnnameen; break;
            case('ru'): $title = $ctbtn->titleru; $intro = $ctbtn->introru; $btnname = $ctbtn->btnnameru; break;
            case('uk'): $title = $ctbtn->titleuk; $intro = $ctbtn->introuk; $btnname = $ctbtn->btnnameuk; break;
        };
        ?>
<section class="content-text-btn" >
    <div class="container">
        <div class="text-btn-container" >
            <div class="row text-btn text-center">
                <h3 class="title">{{$title}}</h3>
                <p>{!! $intro !!}</p>
                <a class="btn btn-tn btn-tn-secondary" href="{{$ctbtn->btnhref}}">{{$btnname}}</a>
            </div>
        </div>
    </div>
</section>
@endif
@endforeach