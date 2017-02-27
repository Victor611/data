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
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" type="image/png" href="../../assets/images/favicon.png">
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/plugins/bootstrap/css/bootstrap.min.css') }}"/>
    <!-- CLEditor css -->

    <!-- Fonts CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/plugins/font-awesome/css/font-awesome.css') }}"/>
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/styles.css') }}"/>

    <script type="text/javascript" src="{{ asset('../assets/plugins/jquery-1.12.3.min.js') }}"></script>
    <script src="{{asset('../../assets/plugins/tinymce/tinymce.min.js')}}"></script>
</head>

<body class="home-page">

<!-- Header -->
<header id="header" class="header navbar-fixed-top" style="background:#253340;">
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
                    <li class="active nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/profile') }}"><i class="fa  fa-user"></i> Profile</a></li>
                            <li><a href="{{ url('/logout') }}"><i
                                            class="fa fa-btn fa-sign-out"></i>{{trans('header.logout')}}</a></li>
                        </ul>
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

<!-- Javascript -->


<script type="text/javascript" src="{{ asset('../assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('../assets/plugins/bootstrap-hover-dropdown.min.js') }}"></script>

<script>
    $(document).ready(function () {

        $(".check-trigger").children("label:nth-child(1)").click(function () {
            $(this).removeClass("btn-default").addClass("btn-success");
            $(".check-trigger").children("label:nth-child(2)").each(function () {
                $(this).removeClass("btn-danger").addClass("btn-default");
//$(this).removeClass("btn-default").addClass("btn-success");
            });
        });
        $(".check-trigger").children("label:nth-child(2)").click(function () {
            $(this).removeClass("btn-default").addClass("btn-danger");
            $(".check-trigger").children("label:nth-child(1)").each(function () {
                $(this).removeClass("btn-success").addClass("btn-default");
            });
        });
    });
</script>

<!--==========Control Modal============-->

<!--==========End Control Modal============-->
</body>
</html>