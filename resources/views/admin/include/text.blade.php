Text
<div class="form-group{{ $errors->has('texten') ? ' has-error' : '' }}">
	<input name="texten" placeholder="texten" type="text" class="form-control"  value="{{ old('texten') }}{!! $content->texten or '' !!}">
	@if ($errors->has('texten'))<span class="help-block"><strong>{{ $errors->first('texten') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('textru') ? ' has-error' : '' }}">
	<input name="textru" placeholder="textru" type="text" class="form-control" value="{{ old('textru') }}{!! $content->textru or '' !!}">
	@if ($errors->has('textru'))<span class="help-block"><strong>{{ $errors->first('textru') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('textuk') ? ' has-error' : '' }}">
	<input name="textuk" placeholder="textuk" type="text" class="form-control"  value="{{ old('textuk') }}{!! $content->textuk or '' !!}">
	@if ($errors->has('textuk'))<span class="help-block"><strong>{{ $errors->first('textuk') }}</strong></span>@endif
</div>
<hr>