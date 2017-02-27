@foreach($block as $many_blocks)
    @if($many_blocks->position == 1)
        <?php switch (App::getLocale()) {
            case('en'): $title = $many_blocks->titleen; break;
            case('ru'): $title = $many_blocks->titleru; break;
            case('uk'): $title = $many_blocks->titleuk; break;
        };
        ?>
    @endif
@endforeach
<section class="many-blocks-section hidden-xs">
    <div class="container">
        <h2 class="title text-center">{{$title}}</h2>
        <div class="many-blocks-row">
            @foreach($block as $many_blocks)
            <div class="block">
                <span class="img">
                    <img src="../assets/images/{{$many_blocks->imgsrc}}">
                </span>
            </div>
            @endforeach
        </div>
    </div>
</section>