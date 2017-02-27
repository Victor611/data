Title
<div class="form-group{{ $errors->has('titleen') ? ' has-error' : '' }}">
    <input name="titleen" placeholder="titleen" type="text" class="form-control"  value="{{ old('titleen') }}{{$content->titleen or ''}}">
    @if ($errors->has('titleen'))<span class="help-block"><strong>{{ $errors->first('titleen') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('titleru') ? ' has-error' : '' }}">
    <input name="titleru" placeholder="titleru" type="text" class="form-control"  value="{{ old('titleru') }}{{$content->titleru or ''}}">
    @if ($errors->has('titleru'))<span class="help-block"><strong>{{ $errors->first('titleru') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('titleuk') ? ' has-error' : '' }}">
    <input name="titleuk" placeholder="titleuk" type="text" class="form-control"  value="{{ old('titleuk') }}{{$content->titleuk or ''}}">
    @if ($errors->has('titleuk'))<span class="help-block"><strong>{{ $errors->first('titleuk') }}</strong></span>@endif
</div>
<hr>