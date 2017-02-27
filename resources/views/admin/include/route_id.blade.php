<div class="form-group{{ $errors->has('route_id') ? ' has-error' : '' }}">
    <label>id страницы:</label>
    <input id="name"
           type="text"
           class="form-control"
           name="route_id"
           placeholder="id_route"
           value="{{ old('route_id') }}{{$content->route_id or $id->id}}">
    @if ($errors->has('bid_name'))
        <span class="help-block">
            <strong>{{ $errors->first('route_id') }}</strong>
        </span>
    @endif
</div>