<div class="form-group">
	<label class="col-sm-12 control-label">Загрузите фото</label>
	<div class="col-sm-12">
		<img src="{{url('../assets/images')}}/{{$content->figuresrc or ''}}" style="width:150px; heidth:150px; float:left; margin-right:25px;">
		<input type="file" name="figuresrc" id="fileupload">
		<p id="max" class="bg-danger" style="color: red; border-radius: 5px; margin:10px 0 0 0; padding: inherit;"></p>
	</div>
</div>
<hr>