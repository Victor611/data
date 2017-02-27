Примечание
<div class="form-group{{ $errors->has('noteen') ? ' has-error' : '' }}">
	<input name="noteen" placeholder="noteen" type="text" class="form-control"  value="{{ old('noteen') }}{{$content->noteen or ''}}">
	@if ($errors->has('noteen'))<span class="help-block"><strong>{{ $errors->first('noteen') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('noteru') ? ' has-error' : '' }}">
	<input name="noteru" placeholder="noteru" type="text" class="form-control" value="{{ old('noteru') }}{{$content->noteru or ''}}">
	@if ($errors->has('noteru'))<span class="help-block"><strong>{{ $errors->first('noteru') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('noteuk') ? ' has-error' : '' }}">
	<input name="noteuk" placeholder="noteuk" type="text" class="form-control"  value="{{ old('noteuk') }}{{$content->noteuk or ''}}">
	@if ($errors->has('noteuk'))<span class="help-block"><strong>{{ $errors->first('noteuk') }}</strong></span>@endif
</div>
<hr>