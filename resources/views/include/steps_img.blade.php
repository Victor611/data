@foreach($block as $step_img)
    @if($step_img->position == 1)
        <?php
        switch (App::getLocale()) {
            case('en'):
                $si_title = $step_img->titleen;
                break;
            case('ru'):
                $si_title = $step_img->titleru;
                break;
            case('uk'):
                $si_title = $step_img->titleuk;
                break;
        };?>
    @endif
@endforeach
<!-- Steps -->
<section class="steps-img-section">
    <div class="container">
        <h2 class="title text-center">{{$si_title}}</h2>
        <div class="step-img-row">
            @foreach($block as $step_img)
                <?php
                switch (App::getLocale()) {
                    case('en'):
                        $si_intro = $step_img->introen;
                        $si_text = $step_img->texten;
                        break;
                    case('ru'):
                        $si_intro = $step_img->introru;
                        $si_text = $step_img->textru;
                        break;
                    case('uk'):
                        $si_intro = $step_img->introuk;
                        $si_text = $step_img->textuk;
                        break;
                };?>
                <div class="block">
                    <h3 class="title">
                    <span class="number">
                        <img src="../assets/images/{{$step_img->imagesrc}}">
                    </span><br/>
                        <span class="text">{{$si_intro}}</span>
                    </h3>

                    <p>{{$si_text}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>