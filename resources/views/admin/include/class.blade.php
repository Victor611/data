Font-awesome
<div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
	<input name="class" placeholder="class" type="text" class="form-control"  value="{{ old('class') }}{{$content->class or ''}}">
	@if ($errors->has('class'))<span class="help-block"><strong>{{ $errors->first('class') }}</strong></span>@endif
</div>
<hr>