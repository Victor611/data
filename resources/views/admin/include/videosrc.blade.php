Video
<div class="checkbox"><label><input type="checkbox"> Опубликавать видео?</label></div><hr>
<div class="form-group{{ $errors->has('videosrc') ? ' has-error' : '' }}">
	<input name="videosrc" placeholder="videosrc" type="text" class="form-control"  value="{{ old('videosrc') }}{{$content->videosrc or ''}}">
	@if ($errors->has('videosrc'))<span class="help-block"><strong>{{ $errors->first('videosrc') }}</strong></span>@endif
</div>
<hr>