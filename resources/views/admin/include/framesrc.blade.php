Frame
<div class="checkbox"><label><input type="checkbox"> Опубликавать фрейм?</label></div><hr>
<div class="form-group{{ $errors->has('framesrc') ? ' has-error' : '' }}">
	<input name="framesrc" placeholder="framesrc" type="text" class="form-control"  value="{{ old('framesrc') }}{{$content->framesrc or ''}}">
	@if ($errors->has('framesrc'))<span class="help-block"><strong>{{ $errors->first('framesrc') }}</strong></span>@endif
</div>
<hr>