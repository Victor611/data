@extends('layouts.app')

@section('content')
    <div class="headline-bg contact-headline-bg"></div><!--//headline-bg-->

    <!-- ******Contact Section****** -->
    <section class="contact-section section section-on-bg">
        <div class="container" id="contact">
            <h2 class="title text-center">Свяжитесь с нами</h2>

            <div class="row text-center">
                <div class="contact-form-inner col-md-offset-2 col-sm-offset-1 col-xs-offset-0 col-xs-12  col-sm-10 col-md-8">
                    <p class="intro text-center">Пожалуйста, заполните форму ниже и наша команда в ближайшее время
                        свяжеться с Вами.</p>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-10 col-md-8 col-md-offset-2">
                            <form role="form" method="POST" action="{{ url('/'.App::getLocale().'/demo') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="contact" value="1">
                                <div class="form-group company{{ $errors->has('contact_company') ? ' has-error' : '' }}">
                                    <input id="company"
                                           type="text"
                                           class="form-control"
                                           name="contact_company"
                                           placeholder="Компания, должность *"
                                           value="{{ old('contact_company') }}"
                                    >
                                    @if ($errors->has('contact_company'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_company') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group name{{ $errors->has('contact_name') ? ' has-error' : '' }}">
                                    <input id="name"
                                           type="text"
                                           class="form-control"
                                           name="contact_name"
                                           placeholder="Фамилия, Имя *"
                                           value="{{ old('contact_name') }}"
                                    >
                                    @if ($errors->has('contact_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group email{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                                    <input id="email"
                                           type="email"
                                           class="form-control"
                                           name="contact_email"
                                           placeholder="e-mail *"
                                           value="{{ old('contact_email') }}"
                                    >
                                    @if ($errors->has('contact_email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group phone{{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                                    <input id="phone"
                                           type="phone"
                                           class="form-control"
                                           name="contact_phone"
                                           placeholder="Телефон *"
                                           value="{{ old('contact_phone') }}"
                                    >
                                    @if ($errors->has('contact_phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_phone') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group message{{ $errors->has('contact_message') ? ' has-error' : '' }}">
                                    <textarea id="message"
                                              class="form-control"
                                              name="contact_message"
                                              placeholder="Сообщение *"
                                              value="{{ old('contact_message') }}"
                                              rows="3"></textarea>
                                    @if ($errors->has('contact_message'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_message') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-block btn-tn-primary">Получить</button>
                                <p class="note">* - поля обязательные к заполнению</p>
                            </form><!--//contact-form-->
                        </div>
                    </div><!--//row-->
                </div>
            </div><!--//row-->
            <div id="form-messages"></div>
        </div><!--//container-->
    </section><!--//contact-section-->
    <!--Modal-->
    <div class="modal fade" id="Modal2" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>{{Session::has('ok')?Session::get('ok'):''}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ******Other Contact Section****** -->
    <section class="contact-other-section section">
        <div class="container text-center">
            <h2 class="title">Другие способы связаться с нами</h2>
            <p class="intro">Если вам необходима помощь в работе с рекламными продуктами, то дополнительно Вы можете
                связаться с командой С8 Data следующими способами:</p>
            <div class="row">
                <ul class="other-info list-unstyled col-md-6 col-sm-10 col-xs-12 col-md-offset-3 col-sm-offset-1 xs-offset-0">
                    <li><i class="fa fa-envelope-o"></i><a href="#">info@C8data.com</a></li>
                    <li><i class="fa fa-phone"></i>+38 (044) 220-06-09</li>
                    <li><i class="fa fa-map-marker"></i>49000 <br/> Украина, Киев <br/> ул. Пирогова, 6а</li>
                </ul>
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//contact-other-section-->

    <!-- ******Map Section****** -->
    <section class="map-section section">
    <div class="container text-center">
    <h2 class="title">Как нас найти</h2>
    <p class="intro">Наш офис расположен в живописнейшем месте, в районе ботанического сада им. акад. О.В.Фомина, всего в 5 минутах ходьбы от станции м. "Университет" в центральной части города Киева. Офис расположен в тихом дворе в отдалении от оживлённых автомобильных дорог, но в то же время в пяти минутах ходьбы от станции метро и остановок общественного транспорта. Сочетание этих факторов делают нашу работу комфортной и беззаботной.</p>
    <div class="gmap-wrapper">
    <div class="gmap-wrapper col-md-8 col-md-offset-2" id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2540.7545548935477!2d30.5057555!3d50.4456723!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1482501282716" width="400" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><!--//gmap-wrapper-->
    </div><!--//gmap-wrapper-->
    </div><!--//container-->
    </section><!--//map-section-->
    </div><!--//wrapper-->
@endsection