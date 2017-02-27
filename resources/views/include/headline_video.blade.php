@foreach($block as $video)
@if($video->position == 1)
<?php
    switch( App::getLocale() ){
        case( 'en' ): $title = $video->titleen; break;
        case( 'ru' ): $title = $video->titleru; break;
        case( 'uk' ): $title = $video->titleuk; break;
    };
?>
<section class="headline-video">
    <div class="headline-video-bg" style="background: #253340 url('../assets/images/{{$video->imagesrc}}') no-repeat 50% top; background-size: cover;" ></div>
    <div class="headline-video-block">
        <div class="container text-center">
            <h2 class="title" id="headline-video">{{$title}}</h2>
            <div class="video-container">
                @if($video->publishvideo == 1)
                    <video src="../assets/video/{{$video->videosrc}}" controls></video>
                @elseif($video->publishframe == 1)
                    <iframe id="vimeo-video"
                            src="{{$video->framesrc}}"
                            width="720"
                            height="405"
                            frameborder="0"
                            webkitallowfullscreen mozallowfullscreen allowfullscreen>
                    </iframe>
                @endif
                   
            </div>
        </div>
    </div>
</section>
@endif
@endforeach