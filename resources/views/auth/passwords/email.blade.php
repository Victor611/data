@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div class="headline-bg demo-headline-bg"></div><!--Поменять картинку-->
    <!-- ******Signup Section****** -->
    <section class="access-section section" style="min-height: calc(100%);">
        <h2 class="title  text-center" id="application">Reset Password</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body text-center" style="padding:25px;">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form role="form" method="POST" action="{{ url('/password/email') }}">
                                {{ csrf_field() }}

                                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-md-6 col-md-offset-3 form-group">
                                        <input id="email"
                                               type="email"
                                               class="form-control"
                                               name="email"
                                               placeholder="E-Mail"
                                               value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-md-offset-3 form-group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i>Send Password Reset Link
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
