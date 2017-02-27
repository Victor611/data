<div class="form-group">
	<label class="col-sm-3 control-label">Загрузите обложку</label>                                
		<div class="col-sm-6">

			<img src="{{url('../assets/images')}}/{{$content->imgsrc or ''}}" style="width:150px; heidth:150px; float:left; margin-right:25px;">
			<input type="file" name="imgsrc" id="fileupload">
		</div>
	</div>
</div>