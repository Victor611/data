@foreach($block as $chsect)
	@if($chsect->position == 1)
        <?php switch (App::getLocale()) {
            case('en'): $title = $chsect->titleen; $intro = $chsect->introen; break;
            case('ru'): $title = $chsect->titleru; $intro = $chsect->introru; break;
            case('uk'): $title = $chsect->titleuk; $intro = $chsect->introuk; break;
        };
        ?>
<section class="content-header-section">
		<div class="row" id="content-header-section">
				<h2 class="title text-center">{{$title}}</h2>
				<p class="content-header-text text-center">{{$intro}}</p>
		</div>
</section>
	@endif
@endforeach