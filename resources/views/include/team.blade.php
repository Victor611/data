@foreach($block as $team)
    @if($team->position == 1)
        <?php
        switch (App::getLocale()) {
            case('en'):
                $t_title = $team->titleen;
                break;
            case('ru'):
                $t_title = $team->titleru;
                break;
            case('uk'):
                $t_title = $team->titleuk;
                break;
        };?>
    @endif
@endforeach
<section class="team-section" id="command">
    <div class="container">
        <h2 class="title text-center">{{$t_title}}</h2>

        <div class="team-row">
            @foreach($block as $team)
                <?php
                switch (App::getLocale()) {
                    case('en'):
                        $st_name = $team->nameen;
                        $job = $team->joben;
                        break;
                    case('ru'):
                        $st_name = $team->nameru;
                        $job = $team->jobru;
                        break;
                    case('uk'):
                        $st_name = $team->nameuk;
                        $job = $team->jobuk;
                        break;
                };?>
            <div class="block">
                <div class="member-inner">
                    <figure class="profile">
                        <img class="img-responsive" src="/assets/images/{{$team->imagesrc}}default_avatar.jpg" alt=""/>
                        <figcaption class="info">
                            <span class="name">{{$st_name}}</span>
                            <br />
                            <span class="job-title">{{$job}}</span>
                        </figcaption>
                    </figure>
                    <div class="soc">
                        <ul class="soc-icon">
                            @if($team->href_linkedin)
                            <li data-toggle="tooltip" data-placement="top" title="Linkedin">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            @elseif($team->href_twitter)
                            <li data-toggle="tooltip" data-placement="bottom" title="Twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            @elseif($team->href_facebook)
                            <li data-toggle="tooltip" data-placement="top" title="facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            @elseif($team->href_google)
                            <li data-toggle="tooltip" data-placement="top" title="google">
                                <a href="#"><i class="fa fa-google"></i></a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
