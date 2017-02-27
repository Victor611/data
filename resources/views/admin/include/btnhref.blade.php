Button href
<div class="form-group{{ $errors->has('btnhref') ? ' has-error' : '' }}">
	<input name="btnhref" placeholder="btnhref" type="text" class="form-control"  value="{{ old('btnhref') }}{{$content->btnhref or ''}}">
	@if ($errors->has('btnhref'))<span class="help-block"><strong>{{ $errors->first('btnhref') }}</strong></span>@endif
</div>