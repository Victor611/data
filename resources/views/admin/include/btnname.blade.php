Button name
<div class="form-group{{ $errors->has('btnnameen') ? ' has-error' : '' }}">
    <input name="btnnameen" placeholder="btnnameen" type="text" class="form-control"  value="{{ old('btnnameen') }}{{$content->btnnameen or ''}}">
    @if ($errors->has('btnnameen'))<span class="help-block"><strong>{{ $errors->first('btnnameen') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('btnnameru') ? ' has-error' : '' }}">
    <input name="btnnameru" placeholder="btnnameru" type="text" class="form-control" value="{{ old('btnnameru') }}{{$content->btnnameru or ''}}">
    @if ($errors->has('btnnameru'))<span class="help-block"><strong>{{ $errors->first('btnnameru') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('btnnameuk') ? ' has-error' : '' }}">
    <input name="btnnameuk" placeholder="btnnameuk" type="text" class="form-control"  value="{{ old('btnnameuk') }}{{$content->btnnameuk or ''}}">
    @if ($errors->has('btnnameuk'))<span class="help-block"><strong>{{ $errors->first('btnnameuk') }}</strong></span>@endif
</div>
<hr>