<div class="form-group{{ $errors->has('blocks') ? ' has-error' : '' }}">
    <div class="form-group">
        <label for="sel1">Имя блока:</label>
        <select class="form-control" name="blocks">
            <?php $block_name = c8data\Http\Controllers\BlocksController::block_name();?>
            @foreach($block_name as $b_n)
                    <option value="{{$b_n}}" @if(isset($content->blocks) && $b_n == $content->blocks) selected @endif >{{$b_n}}</option>
            @endforeach
        </select>
    </div>
</div>