Function
<div class="form-group{{ $errors->has('joben') ? ' has-error' : '' }}">
	<input name="joben" placeholder="joben" type="text" class="form-control"  value="{{ old('joben') }}{{$content->joben or ''}}">
	@if ($errors->has('joben'))<span class="help-block"><strong>{{ $errors->first('joben') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('jobru') ? ' has-error' : '' }}">
	<input name="jobru" placeholder="jobru" type="text" class="form-control" value="{{ old('jobru') }}{{$content->jobru or ''}}">
	@if ($errors->has('jobru'))<span class="help-block"><strong>{{ $errors->first('jobru') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('jobuk') ? ' has-error' : '' }}">
	<input name="jobuk" placeholder="jobuk" type="text" class="form-control"  value="{{ old('jobuk') }}{{$content->jobuk or ''}}">
	@if ($errors->has('jobuk'))<span class="help-block"><strong>{{ $errors->first('jobuk') }}</strong></span>@endif
</div>
<hr>