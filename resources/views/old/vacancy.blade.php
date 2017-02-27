@extends('layouts.app')

@section('content')
    <div class="headline-bg vacancy-headline-bg"></div>
    <!-- ******Signup Section****** -->
    <section class="vacancy-section section section-on-bg" >
        <h2 class="title container text-center" id="vacancy">Вакансии</h2>
        <div class="vacancy-container container">
            <div class="vacancy-container-inner" >
                <div class="about" style="margin:30px;">
                    <p class="text-justify">В C8 data особо ценят и поощряют инновации.Мы не только проявляем творческий подход к разработке наших решений, но и уделяем немало внимания корпоративной культуре.Мы непрерывно совершенствуем наши процессы, опираясь на идеи и предложения наших сотрудников.Это дает каждому из нас возможность внести вклад в развитие и успех компании.</p>
                    <h3 class="text-center" style="margin:50px;">Присоединяйтесь к команде</h3>
                    <p class="text-center">Мы всегда рады приветствовать в нашей команде новых интересных людей.</p>

                </div>
                <div class="vacancy-accordion panel-group" id="accordion">
                    <p class="text-left"><b>Проверьте наши вакансии.</b></p>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Вакансия #1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                Вакансии нет
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Вакансия #2
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Вакансии нет
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Вакансия #3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Вакансии нет
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Vacancy_Form-->
        <div class="vacancy_form container">
            <h3 class="text-center">Отправьте нам свое резюме</h3>
            <div class="row col-md-6 col-md-offset-3">

                <form role="form" method="POST" action="{{ url('/'.App::getLocale().'/demo') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}<input type="hidden" name="vacant" value="1">
                    <div class="form-group vacancy{{ $errors->has('vacant_vacancy') ? ' has-error' : '' }}">
                        <input id="vacancy"
                               type="text"
                               class="form-control"
                               name="vacant_vacancy"
                               placeholder="Должность *"
                               value="{{ old('vacant_vacancy') }}"
                        >
                        @if ($errors->has('vacant_vacancy'))
                            <span class="help-block">
                                <strong>{{ $errors->first('vacant_vacancy') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group name{{ $errors->has('vacant_name') ? ' has-error' : '' }}">
                        <input id="name"
                               type="text"
                               class="form-control"
                               name="vacant_name"
                               placeholder="Фамилия, Имя *"
                               value="{{ old('vacant_name') }}"
                        >
                        @if ($errors->has('vacant_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('vacant_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group email{{ $errors->has('vacant_email') ? ' has-error' : '' }}">
                        <input id="email"
                               type="email"
                               class="form-control"
                               name="vacant_email"
                               placeholder="e-mail *"
                               value="{{ old('vacant_email') }}"
                        >
                        @if ($errors->has('vacant_email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('vacant_email') }}</strong>
                            </span>
                        @endif
                    </div>

                   <div class="form-group phone{{ $errors->has('vacant_phone') ? ' has-error' : '' }}">
                       <input  id="phone"
                               type="phone"
                               class="form-control"
                               name="vacant_phone"
                               placeholder="Телефон *"
                               value="{{ old('vacant_phone') }}"
                       >
                       @if ($errors->has('vacant_phone'))
                           <span class="help-block">
                               <strong>{{ $errors->first('vacant_phone') }}</strong>
                           </span>
                       @endif
                   </div>

                   <div class="form-group fileUpload btn btn-tn-primary{{ $errors->has('vacancy_file') ? ' has-error' : '' }}">
                       <span>Прикрепить резюме</span>
                       <input  id="vacancy"
                               type="file"
                               class="upload"
                               name="vacancy_file"
                       >

                   </div>
                    @if ($errors->has('vacancy_file'))
                        <span class="help-block">
                               <strong>{{ $errors->first('vacancy_file') }}</strong>
                           </span>
                    @endif
                   <button type="submit" class="btn btn-block btn-tn-primary">Отправить</button>
                   <p class="note">* - поля обязательные к заполнению</p>
               </form>
           </div>
        </div>

        <div class="vacancy text-center">
            <div class="container">
                <h2 class="title">За что мы любим <b>C8 Data</b>?</h2>
                <div class="vacancy_top row">
                    <div class="col-md-4">
                        <h3 class="title">Безупречное обслуживание:</h3>
                        <p class="intro">стремимся к совершенству во всем.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title">Интересные люди:</h3>
                        <p class="intro">команда талантливых и увлеченных своим делом профессионалов.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title">Поддержка:</h3>
                        <p class="intro">ценим инициативы и эксперименты.</p>
                    </div>
                </div>
                <div class="vacancy_bottom row">
                    <div class="col-md-4">
                        <h3 class="title">Гибкий подход:</h3>
                        <p class="intro">проявляем гибкость во всех направлениях деятельности.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title">Неповторимая рабочая атмосфера:</h3>
                        <p class="intro">дружный коллектив и веселые коктейль-вечеринки.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title">Возможности:</h3>
                        <p class="intro">предлагаем возможности для профессионального роста.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection