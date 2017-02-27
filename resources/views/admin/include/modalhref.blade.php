Modal href
<div class="form-group{{ $errors->has('modalhref') ? ' has-error' : '' }}">
	<input name="modalhref" placeholder="modalhref" type="text" class="form-control"  value="{{ old('modalhref') }}{{$content->modalhref or ''}}">
	@if ($errors->has('modalhref'))<span class="help-block"><strong>{{ $errors->first('modalhref') }}</strong></span>@endif
</div>