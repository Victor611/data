Ссылка
<div class="form-group{{ $errors->has('href') ? ' has-error' : '' }}">
	<input name="href" placeholder="href" type="text" class="form-control"  value="{{ old('href') }}{{$content->href or ''}}">
	@if ($errors->has('href'))<span class="help-block"><strong>{{ $errors->first('href') }}</strong></span>@endif
</div>