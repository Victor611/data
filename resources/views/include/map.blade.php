@foreach($block as $map)
    @if($map->position == 1)
        <?php switch (App::getLocale()) {
            case('en'): $title = $map->titleen; $intro = $map->introen; break;
            case('ru'): $title = $map->titleru; $intro = $map->introru; break;
            case('uk'): $title = $map->titleuk; $intro = $map->introuk; break;
        };
        ?>
        <section class="map-section section">
            <div class="container text-center">
                <h2 class="title">{{$title}}</h2>
                <p class="intro">{{$intro}}</p>
                <div class="gmap-wrapper">
                    <div class="gmap-wrapper col-md-8 col-md-offset-2" id="map">
                        <iframe src="{!! $map->href !!}" width="400" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div><!--//gmap-wrapper-->
                </div><!--//gmap-wrapper-->
            </div><!--//container-->
        </section><!--//map-section-->
    @endif
@endforeach