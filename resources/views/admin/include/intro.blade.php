<script>tinymce.init({ selector:'textarea' });</script>
Intro
<div class="form-group{{ $errors->has('introen') ? ' has-error' : '' }}">
    <textarea id="introen" name="introen" placeholder="introen" class="form-control" >{{ old('introen') }}{{$content->introen or ''}}</textarea>
    @if ($errors->has('introen'))<span class="help-block"><strong>{{ $errors->first('introen') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('introru') ? ' has-error' : '' }}">
    <textarea id="introru" name="introru" placeholder="introru" class="form-control" >{{ old('introru') }}{{$content->introru or ''}}</textarea>
    @if ($errors->has('introru'))<span class="help-block"><strong>{{ $errors->first('introru') }}</strong></span>@endif
</div>
<div class="form-group{{ $errors->has('introuk') ? ' has-error' : '' }}">
    <textarea id="introuk" name="introuk" placeholder="introuk"  class="form-control" >{{ old('introuk') }}{{$content->introuk or ''}}</textarea>
    @if ($errors->has('introuk'))<span class="help-block"><strong>{{ $errors->first('introuk') }}</strong></span>@endif
</div>
<hr>