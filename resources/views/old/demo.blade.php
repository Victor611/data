@extends('layouts.app')

@section('content')
    <div class="headline-bg demo-headline-bg"></div>
    <!-- ******Signup Section****** --> 
    
    <section class="access-section section">
        <h2 class="title  text-center" id="application">Заявка</h2>
        <div class="container">
            <div class="row">
                <div class="form-box col-md-offset-2 col-xs-offset-0 col-xs-12 col-md-8">     
                    <div class="form-box-inner">

                        <p class="intro text-center">Спасибо за ваш интерес к С8.Data. Пожалуйста, заполните форму ниже и наша команда в ближайшее время свяжеться с Вами.</p>               
                            <div class="row">
                                <div class="col-xs-offset-0 col-xs-12 col-md-8 col-md-offset-2">
                                    <form role="form" method="POST" action="{{url('/'.App::getLocale().'/demo') }}">
                                            {{ csrf_field() }}<input type="hidden" name="demo" value="1">
                                        <div class="form-group company {{ $errors->has('bid_company') ? ' has-error' : '' }}">
                                            <input  id="company"
                                                    type="text"
                                                    class="form-control"
                                                    name="bid_company"
                                                    placeholder="Компания, должность *"
                                                    value="{{ old('bid_company') }}"
                                            >
                                            @if ($errors->has('bid_company'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('bid_company') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                            
                                        <div class="form-group name{{ $errors->has('bid_name') ? ' has-error' : '' }}">
                                            <input  id="name"
                                                    type="text"
                                                    class="form-control"
                                                    name="bid_name"
                                                    placeholder="Фамилия, Имя *"
                                                    value="{{ old('bid_name') }}"
                                            >
                                            @if ($errors->has('bid_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('bid_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                            
                                        <div class="form-group email{{ $errors->has('bid_email') ? ' has-error' : '' }}">
                                            <input  id="email"
                                                    type="email"
                                                    class="form-control"
                                                    name="bid_email"
                                                    placeholder="e-mail *"
                                                    value="{{ old('bid_email') }}"
                                            >
                                            @if ($errors->has('bid_email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('bid_email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                            
                                        <div class="form-group phone{{ $errors->has('bid_phone') ? ' has-error' : '' }}">
                                            <input  id="phone"
                                                    type="phone"
                                                    class="form-control"
                                                    name="bid_phone"
                                                    placeholder="Телефон *"
                                                    value="{{ old('bid_phone') }}"
                                            >
                                            @if ($errors->has('bid_phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('bid_phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-block btn-tn-primary">Отправить</button>
                                        <p class="note">* - поля обязательные к заполнению</p>
                                    </form>
                                </div><!--//form-container-->
                            </div><!--//row-->
                        <p>{{  $errors->has('m-name')? $errors->first('m-name'):''}}</p>
                            <div class="text-center" style="padding-top:100px;">
                                <h3 class="intro">Получить исследование</h3>
                                <p>У вас есть возможность бесплатно заказать исследование выполненное специалистами нашей компании относительно интересующего Вас продукта.</p>
                                <p>Или <a href="/contact#contact">свяжитесь с нами</a> чтобы получить больше информации.</p>
                                <a class="btn btn-tn btn-tn-secondary" data-toggle="modal" data-target="#Mod1">
                                    Получить
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    
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

    <div class="modal fade modal_present" id="Mod1" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>

                    </button>
                    <h4><b>Скачайте бессплатно исследования рынка:</b></h4>
                </div>

                <!-- Modal Body -->
                <div class="modal-body text-center">

                    <form role="form" method="POST" action="{{ url('/'.App::getLocale().'/demo') }}">
                        {{ csrf_field() }}
                        <div class="form-group text-left">
                            <input type="radio" name="present"  value="1" checked> Иследования рынка мобильной рекламы
                        </div>
                        <div class="form-group text-left">
                            <input type="radio" name="present" value="2" > Иследования рынка BIG Data
                        </div>
                        <div class="form-group text-left">
                            <input type="radio" name="present" value="3" > Иследования рынка медийной рекламы
                        </div>
                        <div class="form-group name{{ $errors->has('m_name') ? ' has-error' : '' }}">
                            <input id="name" type="text" name="m_name" class="form-control" placeholder="Фамилия, Имя *" value="{{ old('m_name') }}">
                            @if ($errors->has('m_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('m_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group email{{ $errors->has('m_email') ? ' has-error' : '' }}">
                            <input id="email" type="email" name="m_email" class="form-control" placeholder="e-mail *" value="{{ old('m_email') }}">
                            @if ($errors->has('m_email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('m_email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-tn btn-tn-secondary">Submit</button>
                    </form>
                    <p class="text-left">* - поля обязательные к заполнению</p>
                </div>
            </div>
        </div>
    </div>



@endsection