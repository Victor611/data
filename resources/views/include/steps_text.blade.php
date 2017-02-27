@foreach($block as $step_text)
    @if($step_text->position == 1)
        <?php
        switch (App::getLocale()) {
            case('en'):
                $st_title = $step_text->titleen;
                break;
            case('ru'):
                $st_title = $step_text->titleru;
                break;
            case('uk'):
                $st_title = $step_text->titleuk;
                break;
        };?>
    @endif
@endforeach
<section class="steps-text-section">
    <div class="container">
        <h2 class="title text-center">{{$st_title}}</h2>

        <div class="step-text-row">
            @foreach($block as $step_text)
                <?php
                switch (App::getLocale()) {
                    case('en'):
                        $st_number = $step_text->introen;
                        $st_text = $step_text->texten;
                        break;
                    case('ru'):
                        $st_number = $step_text->introru;
                        $st_text = $step_text->textru;
                        break;
                    case('uk'):
                        $st_number = $step_text->introuk;
                        $st_text = $step_text->textuk;
                        break;
                };?>
                <div class="block">
                    <h3 class="title">
                        <span class="number">{{$st_number}}</span><br/>
                        <span class="text">{{$st_text}}</span>
                    </h3>
                </div>
            @endforeach
        </div>
    </div>
</section>