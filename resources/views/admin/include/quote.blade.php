<script>tinymce.init({ selector:'#quote' });</script>
Quote
<div class="form-group{{ $errors->has('quote') ? ' has-error' : '' }}">
	<input id="quote" name="quote" placeholder="quote" type="text" class="form-control"  value="{{ old('quote') }}{{$content->quote or ''}}">
	@if ($errors->has('quote'))<span class="help-block"><strong>{{ $errors->first('quote') }}</strong></span>@endif
</div>
<hr>	