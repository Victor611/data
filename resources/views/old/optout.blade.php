@extends('layouts.app')

@section('content')
    <div class="headline-bg optout-headline-bg"></div>
    <!-- ******Signup Section****** -->
    <section class="optout-section section section-on-bg" >
        <h2 class="title container text-center" id="about">Отказ от сбора неличной информации</h2>
        <div class="optout-container container">
            <div class="optout-container-inner" >
                <div class="about">
                    <p >Вы можете отказаться от сбора неличной информации о вас (opt-out) на данной странице. При этом С8 Data заменяет Cookie с уникальным идентификатором вашего браузера на специальную «opt-out» Cookie, наличие которой предотвратит вас от дальнейшего сбора и анализа неличной информации.</p>
                    <p >Так как Cookies привязаны к браузеру, в случае использования вами нескольких браузеров на одном или нескольких компьютерах вам необходимо будет повторить данную процедуру и в остальных браузерах.</p>
                    <p >В случае, если вы купите новый компьютер, установите другую версию операционной системы, браузера или каким-либо другим образом удалите «opt-out» Cookie, вам необходимо будет повторить процедуру еще раз.</p>
                    <div class="text-center" style="margin: 100px 0;">
                        <a class="btn btn-tn btn-tn-secondary" href="#">
                            Отказаться от сбора неличной информации
                        </a>
                    </div>
                </div><!--//form-box-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//signup-section-->
    </div><!--//upper-wrapper-->
@endsection