@extends('layouts.app')
@section('content')
	@foreach($blocks as $block)
		@if($block->position == 1)
			@if($block->name == 'carousel' ||
				$block->name == 'headline_video' ||
				$block->name == 'headline_text' ||
				$block->name == 'headline_form_demo' ||
				$block->name == 'headline_form_contact' )
				<div class="bg-menu"></div>
			@else
				<div class="bg-menu-small"></div>
			@endif
		@endif
	@endforeach
	@foreach($inc as $key=>$block)
		<?php $key = substr($key, 2);?>
		@include("include.".$key)
	@endforeach
@endsection