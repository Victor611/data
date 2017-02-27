Anchor
<div class="form-group{{ $errors->has('anchor') ? ' has-error' : '' }}">
	<input name="anchor" placeholder="якорь" type="text" class="form-control"  value="{{ old('anchor') }}{{$content->anchor or ''}}">
	@if ($errors->has('anchor'))<span class="help-block"><strong>{{ $errors->first('anchor') }}</strong></span>@endif
</div>