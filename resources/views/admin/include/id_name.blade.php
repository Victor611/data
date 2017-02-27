<div class="form-group{{ $errors->has('id_name') ? ' has-error' : '' }}">
    <label>id:</label>
    <input id="id_name"
           type="text"
           class="form-control"
           name="id_name"
           placeholder="id блока"
           value="{{ old('bid_name') }}{{$content->id_name or $id}}">
    @if ($errors->has('id_name'))
        <span class="help-block">
            <strong>{{ $errors->first('id_name') }}</strong>
        </span>
    @endif
</div>