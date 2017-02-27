<section class="content-text-img-section">
    <div class="section content-text-img">
        <div class="container">
            @foreach($block as $cti)
                <?php switch (App::getLocale()):
                    case('en'):
                        $title = $cti->titleen;
                        $intro = $cti->introen;
                        break;
                    case('ru'):
                        $title = $cti->titleru;
                        $intro = $cti->introru;
                        break;
                    case('uk'):
                        $title = $cti->titleuk;
                        $intro = $cti->introuk;
                        break;
                endswitch;
                switch($cti->c_class):
                    case('1'): $c_class = 'col-xs-12 col-sm-6 col-md-6'; $i_class = 'col-md-offset-1 col-sm-offset-0 hidden-xs col-sm-6 col-md-4';  break;
                    case('2'): $c_class = 'col-xs-12 col-md-4'; $i_class = 'col-md-offset-1 col-sm-offset-0 hidden-xs col-md-7';  break;
                    case('3'): $c_class = 'col-md-push-6 col-sm-push-0 col-xs-push-0 col-xs-12  col-md-6'; $i_class = 'col-md-pull-6 col-sm-pull-0 hidden-xs col-md-5';  break;
                    case('4'): $c_class = 'col-md-push-8 col-sm-push-0 col-xs-push-0 col-xs-12 col-md-4'; $i_class = 'col-md-pull-4 col-sm-pull-0 hidden-xs col-md-7';  break;
                endswitch;
                ?>
                <div class="row item" id="{{$cti->anchor}}">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h3 class="title text-center">{{$title}}</h3>
                    </div>

                    <div class="content {{$c_class}}">
                        <div class="desc text-justify">{!! $intro !!}</div>
                        @if($cti->publishquote)
                            <div class="quote">
                                @if(!empty($cti->imgsrc))
                                <div class="quote-profile"><img class="img-responsive img-circle"
                                                                src="../assets/images/{{$cti->figuresrc}}" alt=""/>
                                </div>
                                @endif
                                <div class="quote-content">
                                    <blockquote>{!! $cti->quote !!}</blockquote>
                                </div>
                            </div>
                        @endif
                    </div>

                    <figure class="figure {{$i_class}}">
                        <img class="img-responsive" src="../assets/images/{{$cti->imgsrc}}" alt=""/>
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</section>
