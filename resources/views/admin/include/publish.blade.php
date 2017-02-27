<div class="form-group">
    <label class="col-sm-3 control-label">Публиковать?</label>
    <div class="col-sm-9 checkbox">
        <div class="btn-group input-group check-trigger" data-toggle="buttons">
            <label class="btn {{(isset($content->publish) && $content->publish == '1')?'btn-success':'btn-default'}}">
                <input type="radio" name="publish" value="1" >Yes</label>
            <label class="btn {{(isset($content->publish) && $content->publish == '0')?'btn-danger':'btn-default'}}">
                <input type="radio" name="publish" value="0"  >No</label>

        </div>
    </div>
</div>