@foreach($block as $hfd)
	@if($hfd->position == 1)
        <?php switch (App::getLocale()) {
            case('en'): $title = $hfd->titleen; $intro = $hfd->introen; $btnname = $hfd->btnnameen; $note = $hfd->noteen; break;
            case('ru'): $title = $hfd->titleru; $intro = $hfd->introru; $btnname = $hfd->btnnameru; $note = $hfd->noteru; break;
            case('uk'): $title = $hfd->titleuk; $intro = $hfd->introuk; $btnname = $hfd->btnnameuk; $note = $hfd->noteuk; break;
        };
        ?>
		<section class="headline-form-demo">
			<div class="headline-form-bg" style="background: #253340 url('../assets/images/{{$hfd->imgsrc}}') no-repeat 50% top; background-size: cover;" ></div>
			<div class="headline-form-block">
				<div class="container text-center">
					<h2 class="title" id="headline-form">{{$title}}</h2>
					<div class="form-container">
						<div class="form text-justify">
							<p class="intro">{{$intro}}</p>
							<div class="row">
								<div class="col-xs-offset-0 col-xs-12 col-md-8 col-md-offset-2 block-form">
									<form role="form" method="POST" action="{{ url('/'.App::getLocale().'/demo') }}">
										{{ csrf_field() }}<input type="hidden" name="demo" value="1">
										<div class="form-group company {{ $errors->has('bid_company') ? ' has-error' : '' }}">
											<input id="company"
												   type="text"
												   class="form-control"
												   name="bid_company"
												   placeholder="{{trans('form.company')}}"
												   value="{{ old('bid_company') }}">
											@if ($errors->has('bid_company'))
												<span class="help-block">
													<strong>{{ $errors->first('bid_company') }}</strong>
												</span>
											@endif
										</div>

										<div class="form-group name{{ $errors->has('bid_name') ? ' has-error' : '' }}">
											<input id="name"
												   type="text"
												   class="form-control"
												   name="bid_name"
												   placeholder="{{trans('form.name')}}"
												   value="{{ old('bid_name') }}">
											@if ($errors->has('bid_name'))
												<span class="help-block">
													<strong>{{ $errors->first('bid_name') }}</strong>
												</span>
											@endif
										</div>

										<div class="form-group email{{ $errors->has('bid_email') ? ' has-error' : '' }}">
											<input id="email"
												   type="email"
												   class="form-control"
												   name="bid_email"
												   placeholder="{{trans('form.email')}}"
												   value="{{ old('bid_email') }}">
											@if ($errors->has('bid_email'))
												<span class="help-block">
													<strong>{{ $errors->first('bid_email') }}</strong>
												</span>
											@endif
										</div>

										<div class="form-group phone{{ $errors->has('bid_phone') ? ' has-error' : '' }}">
											<input id="phone"
												   type="phone"
												   class="form-control"
												   name="bid_phone"
												   placeholder="{{trans('form.phone')}}"
												   value="{{ old('bid_phone') }}">
											@if ($errors->has('bid_phone'))
												<span class="help-block">
													<strong>{{ $errors->first('bid_phone') }}</strong>
												</span>
											@endif
										</div>
										<button type="submit" class="btn btn-block btn-tn-primary">{{$btnname}}</button>
										<p class="note">{{$note}}</p>
									</form>
								</div><!--//form-container-->
							</div><!--end row-->
						</div>
					</div>
				</div>
			</div>
		</section>
	@endif
@endforeach