<!DOCTYPE html>
{{--<!--[if IE 8]> <html lang="ru" class="ie8"> <![endif]-->--}}
{{--<!--[if IE 9]> <html lang="ru" class="ie9"> <![endif]-->--}}
{{--<!--[if !IE]><!--> <html lang="ru"> <!--<![endif]-->--}}
<head>
    <title>C8Data</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" type="image/png"  href="../../assets/images/favicon.png">
   <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.css">
    <!-- Style CSS -->
    <link  rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body class="home-page">

<!-- Header -->
<header id="header" class="header navbar-fixed-top">
    <div class="container">
        <h1 class="logo">
            <a href="/{{App::getLocale()}}/home">
                <span class="text">C8</span>
                <p>Data</p>
            </a>
        </h1>
        <nav class="main-nav navbar-right" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">

                    <li class=" @if($_SERVER["REQUEST_URI"] == '/'.App::getLocale().'/home') active nav-item
                            @else nav-item
                            @endif ">
                        <a href="/home">{{trans("header.home")}}</a>
                    </li>
                    <li class=" @if($_SERVER["REQUEST_URI"] =="/App::getLocale()/products") active nav-item
                                @else nav-item
                                @endif ">
                        <a href="/products">{{trans('header.products')}}</a>
                    </li>
                    <li class=" @if( $_SERVER["REQUEST_URI"] =="/App::getLocale()/about" ||
                                     $_SERVER["REQUEST_URI"] =="/App::getLocale()/contact"||
                                     $_SERVER["REQUEST_URI"] =="/App::getLocale()/vacancy"
                                    ) active nav-item dropdown
                                @else nav-item dropdown
                                @endif ">
                        <a  class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                            {{trans('header.about_company')}}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/about">{{trans('header.about')}}</a></li>
                            <li><a href="/vacancy">{{trans('header.vacancy')}}</a></li>
                            <li><a href="/contact">{{trans('header.contact')}}</a></li>

                        </ul>
                    </li>
                    <li class=" @if($_SERVER["REQUEST_URI"] =="#") active nav-item
                                @else nav-item
                                @endif ">
                        <a href="/Price.pdf" target="_blank">{{trans('header.price')}}</a>
                    </li>
                    @if (Auth::guest())
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#LoginModal">{{trans('header.login')}}</a>
                        </li>
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                    @else
                        <li class="active nav-item dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/admin') }}"><i class="fa fa-lock"></i> Admin</a></li>
                                <li><a href="{{ url('/profile') }}"><i class="fa  fa-user"></i> Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{trans('header.logout')}}</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class=" @if($_SERVER["REQUEST_URI"] =="/App::getLocale()/demo") active nav-item nav-item-tn last
                                @else nav-item nav-item-tn last
                                @endif ">
                        <a class="btn btn-tn btn-tn-secondary" href="/demo">{{trans('header.get_demo')}}</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Menu-->
    </div>
</header>

<div class="scrollup">
    <i class="fa fa-arrow-up"></i>
</div>

@yield('content')

<!---------FOOTER---------->
<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="footer-col links col-md-2 col-sm-4 hidden-xs">
                    <div class="footer-col-inner">
                        <h3 class="title">{{trans('footer.about_us')}}</h3>
                        <ul class="list-unstyled">
                            <li><a href="/{{App::getLocale()}}/about#about"><i class="fa fa-caret-right"></i>{{trans('footer.about')}}</a></li>
                            <li><a href="/{{App::getLocale()}}/about#command"><i class="fa fa-caret-right"></i>{{trans('footer.command')}}</a></li>
                            <li><a href="/{{App::getLocale()}}/vacancy#vacancy"><i class="fa fa-caret-right"></i>{{trans('footer.vacancy')}}</a></li>
                            <li><a href="/{{App::getLocale()}}/contact#contact"><i class="fa fa-caret-right"></i>{{trans('footer.contacts')}}</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End About -->
                <!-- Products -->
                <div class="footer-col links col-md-2 col-sm-4 hidden-xs">
                    <div class="footer-col-inner">
                        <h3 class="title">{{trans('footer.products')}}</h3>
                        <ul class="list-unstyled">
                            <li><a href="/{{App::getLocale()}}/products#data"><i class="fa fa-caret-right"></i>Data</a></li>
                            <li><a href="/{{App::getLocale()}}/products#ecommerce"><i class="fa fa-caret-right"></i>E-Commerce</a></li>
                            <li><a href="/{{App::getLocale()}}/products#programmatic"><i class="fa fa-caret-right"></i>Programmatic</a></li>
                            <li><a href="/{{App::getLocale()}}/products#mobile"><i class="fa fa-caret-right"></i>Mobile</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Products -->
                <!-- Help -->
                <div class="footer-col links col-md-2 col-sm-4 col-xs-6 sm-break">
                    <div class="footer-col-inner">
                        <h3 class="title">{{trans('footer.support')}}</h3>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fa fa-caret-right"></i>
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="/Price.pdf" target="_blank" title="Price" target="_blank">
                                    <i class="fa fa-caret-right"></i>
                                    {{trans('footer.price')}}
                                </a>
                            </li>
                            <li>
                                <a href="/PrivacyPolicy.pdf" target="_blank" title="Privacy Policy" target="_blank">
                                    <i class="fa fa-caret-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="/optout">
                                    <i class="fa fa-caret-right"></i>
                                    Opt out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Help -->
                <!-- Contacts -->
                <div class="footer-col contact col-xs-6 col-md-3 col-md-push-3">
                    <div class="footer-col-inner">
                        <h3 class="title">{{trans('footer.contacts')}}</h3>
                        <p class="adr clearfix">
                            <i class="fa fa-map-marker pull-left"></i>
                            <span class="adr-group pull-left">
                                <span class="street-address">01030, {{trans('footer.country')}}</span><br>
                                <span class="region">{{trans('footer.address')}}</span><br>
                            </span>
                        </p>
                        <p class="tel"><i class="fa fa-phone"></i>+38 (044) 220-06-09</p>
                        <p class="email">
                            <i class="fa fa-envelope-o"></i>
                            <a href="mailto:info@c8data.com">info@c8data.com</a>
                        </p>
                    </div>
                </div>
                <!-- End Contacts -->

                <!-- Social -->
                <div class="footer-col footer-col-social connect col-xs-6 col-md-3 col-md-pull-3">
                    <div class="footer-col-inner">
                        <ul class="social list-inline">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="row-end"><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Social -->
            </div>
        </div>
    </div>
    <!-- Copiright -->
    <div class="bottom-bar">
        <div class="container">
            <small class="copyright"> &copy; 2016 C8Data Company</small>
        </div>
    </div>
    <!-- End Copiright -->
</footer>


<!--Login Modal-->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog"
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
                <h4><b>{{trans('auth.authorization')}}</b></h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <form role="form" method="POST" action="/login">
                    {!! csrf_field() !!}
                    <div class="col-md-8 col-md-offset-2 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email"
                               type="email"
                               class="form-control"
                               name="email"
                               placeholder="E-mail"
                               value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-8 col-md-offset-2 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password"
                               type="password"
                               class="form-control"
                               placeholder="{{trans('auth.password')}}"
                               name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-8 col-md-offset-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> {{trans('auth.remember_me')}}
                            </label>
                        </div>
                    </div>

                    <div class="col-md-8 col-md-offset-2 form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> {{trans('auth.login')}}
                        </button>
                    </div>
                </form>
                <p class="text-right"><a class="btn btn-link" href="{{ url('/password/reset') }}">{{trans('auth.forgot_password')}}</a></p>
            </div>
        </div>
    </div>
</div>
<!--End Login Modal-->

<!-- CHANGE LANGUAGE -->
<div class="config-wrapper">
    <div class="config-wrapper-inner">
        <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-language"></i></a>
        <div id="config-panel" class="config-panel">
            <h5>Изменить язык</h5>
            <ul class="list-unstyled list-inline">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate"
                           hreflang="{{$localeCode}}"
                           href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                           <img src="/assets/images/flags/{{ $properties['name'] }}.gif">
                        </a>
                    </li>
                @endforeach
            </ul><!--//language-options-->
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div>
    </div>
</div>
<!-- END CHANGE LANGUAGE -->

<!-- Javascript -->
<script type="text/javascript" src="../../assets/plugins/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="../../assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="../../assets/plugins/FitVids/jquery.fitvids.js"></script>
<script type="text/javascript" src="../../assets/js/main.js"></script>
<script type="text/javascript" src="../../assets/js/scrollUp.js"></script>
<script type="text/javascript" src="../../assets/js/smooth_Anchor.js"></script>
<!--==========Control Modal============-->
<script>
    var ok = "<?php echo session('ok');?>";
    if(ok){
        $("#Modal2").modal('show');
    }
    var login = "{{session()->has('login')?session('login'):''}}";
    var error = "<?php echo (($errors->has('email') && $_SERVER["REQUEST_URI"] !== "/password/reset") ? $errors->first('email') : '');?>";
    var error1 = "<?php echo (($errors->has('password')) ? $errors->first('password') : '');?>";
    if(error ||error1 || login){
        $("#LoginModal").modal('show');
    }
    var m_error = "<?php echo (($errors->has("m_name")) ? $errors->first("m_name") : "");?>";
    var m_error1 = "<?php echo (($errors->has("m_email")) ? $errors->first("m_email") : "");?>";

    if(m_error || m_error1){
        $("#Mod1").modal('show');
    }
</script>
<!--==========End Control Modal============-->
</body>
</html>