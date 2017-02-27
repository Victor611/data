Social
<div class="form-group{{ $errors->has('href_linkedin') ? ' has-error' : '' }}">
	<input name="href_linkedin" placeholder="linkedin" type="text" class="form-control"  value="{{ old('href_linkedin') }}{{$content->href_linkedin or ''}}">
	@if ($errors->has('href_linkedin'))<span class="help-block"><strong>{{ $errors->first('href_linkedin') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('href_twitter') ? ' has-error' : '' }}">
	<input name="href_twitter" placeholder="twitter" type="text" class="form-control" value="{{ old('href_twitter') }}{{$content->href_twitter or ''}}">
	@if ($errors->has('href_twitter'))<span class="help-block"><strong>{{ $errors->first('href_twitter') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('href_facebook') ? ' has-error' : '' }}">
	<input name="href_facebook" placeholder="facebook" type="text" class="form-control"  value="{{ old('href_facebook') }}{{$content->href_facebook or ''}}">
	@if ($errors->has('href_facebook'))<span class="help-block"><strong>{{ $errors->first('href_facebook') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('href_google') ? ' has-error' : '' }}">
	<input name="href_google" placeholder="google" type="text" class="form-control"  value="{{ old('href_google') }}{{$content->href_google or ''}}">
	@if ($errors->has('href_google'))<span class="help-block"><strong>{{ $errors->first('href_google') }}</strong></span>@endif
</div>
<hr>
