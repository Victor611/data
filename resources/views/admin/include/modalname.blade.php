Modal name
<div class="form-group{{ $errors->has('modalnameen') ? ' has-error' : '' }}">
	<input name="modalnameen" placeholder="modalnameen" type="text" class="form-control"  value="{{ old('modalnameen') }}{{$content->modalnameen or ''}}">
	@if ($errors->has('modalnameen'))<span class="help-block"><strong>{{ $errors->first('modalnameen') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('modalnameru') ? ' has-error' : '' }}">
	<input name="modalnameru" placeholder="modalnameru" type="text" class="form-control" value="{{ old('modalnameru') }}{{$content->modalnameru or ''}}">
	@if ($errors->has('modalnameru'))<span class="help-block"><strong>{{ $errors->first('modalnameru') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('modalnameuk') ? ' has-error' : '' }}">
	<input name="modalnameuk" placeholder="modalnameuk" type="text" class="form-control"  value="{{ old('modalnameuk') }}{{$content->modalnameuk or ''}}">
	@if ($errors->has('modalnameuk'))<span class="help-block"><strong>{{ $errors->first('modalnameuk') }}</strong></span>@endif
</div>
<hr>