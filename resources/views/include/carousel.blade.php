<?php $active = 0; $slide = 0;?>
<!--Carousel-->
<div class="carousel slide" id="carousel" data-ride="carousel">
    
		<!-- Marker Slider -->
    <ol class="carousel-indicators">
		@while($slide<count($block))
        <li data-target="#carousel"
			data-slide-to="$slide"
			class="{{$slide==0?"active":''}}">
		</li>
		<?php $slide++;?>	
		@endwhile
    </ol>

    <!-- Content Slider -->
    <div class="carousel-inner ">			
		@foreach($block as $carousel)
		<?php
		switch( App::getLocale() ){
			case( 'en' ):$title = $carousel->titleen; $intro = $carousel->introen; $btnname = $carousel->btnnameen; $modalname = $carousel->modalnameen; break;
			case( 'ru' ):$title = $carousel->titleru; $intro = $carousel->introru; $btnname = $carousel->btnnameru; $modalname = $carousel->modalnameru; break;
			case( 'uk' ):$title = $carousel->titleuk; $intro = $carousel->introuk; $btnname = $carousel->btnnameuk; $modalname = $carousel->modalnameuk; break;
		};
		?>
		<div class="item {{$active==0?"active":''}}"><?php $active++;?>
			<img src="../assets/images/{{$carousel->imgsrc}}" alt="...">
			<div class="carousel-caption carousel-center">
				<h2 class="title">{!!$title!!}</h2>
				<p class="intro"> {!!$intro!!}</p>
				@if(!empty($carousel->btnhref))
				<p><a 	class="btn btn-tn btn-tn-primary"
						href="/{{App::getLocale()}}/{{$carousel->btnhref}}">
					{{$btnname}}
				</a></p>
				@endif
				<?php $modal=false;?>
				@if(!empty($carousel->modalhref))
				<?php $modal=true;?>
				<button type="button"
						class="play-trigger btn-link modal_video"
						data-toggle="modal"
						data-target="#modal-video">
					<i class="fa fa-youtube-play"></i>
					{{$modalname}}
				</button>
				@endif
			</div>
		</div>
		@endforeach
	</div>
			
    <!-- Slider Controls -->
    <a class="left carousel-control" href="#carousel" data-slide="prev">
        <i class="fa fa-caret-left" aria-hidden="true"></i>
    </a>
    <a class="right carousel-control" href="#carousel" data-slide="next">
        <i class="fa fa-caret-right " aria-hidden="true"></i>
    </a>
    <a class="carusel_pause" id="carousel_control">
        <i class="fa fa-pause" aria-hidden="true"></i>
    </a>
</div>
<!-- End Carousel -->

@if($modal)
	<!-- Presentation Modal -->
	@foreach($block as $modal)
	<div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="video-container">
						<iframe id="vimeo-video"
								src="{{$modal->modalhref}}"
								frameborder="0"
								width="100%"
								height="450"
								allowfullscreen="true"
								mozallowfullscreen="true"
								webkitallowfullscreen="true">
						</iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<!-- End Presentation Modal -->
@endif
