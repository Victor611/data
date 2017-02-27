<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label>Имя</label>
    <input id="name"
           type="text"
           class="form-control"
           name="name"
           placeholder="Name"
           value="{{ old('name') }}{{$content->name or ''}}">
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>