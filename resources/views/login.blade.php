<!doctype html>
<html class="no-js" lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Manager App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <!-- font awesome CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}">
    <!-- main CSS ============================================ -->
    <!--link rel="stylesheet" href="{{ url('/css/main.css') }}" -->
    <!-- style CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <!-- responsive CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">

</head>

<body>
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <form method="POST" action="{{url('/login')}}">
                @csrf
                <div class="nk-form" style="border-top: 7px solid blue;">
                    <div class="dept-name">
                        <div class="left">
                            <h4 class="text-uppercase">Autenticacao</h4>&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                        <div class="nk-int-st">
                            <input type="text" class="form-control" name="email" placeholder="E-mail">
                            @if($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="input-group mg-t-15">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                        <div class="nk-int-st">
                            <input type="password" class="form-control" name="password" placeholder="Senha">
                        </div>
                    </div>
                    <div class="fm-checkbox">
                        <label><input type="checkbox" name="remember" class="i-checks"> <i></i> Manter sessao iniciada</label>
                    </div>
                    <a href="#l-register" data-ma-action="nk-login-switch" data-ma-block="#l-register" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></a>
                    <div style="display: flex; justify-content: end;">
                        <div class="breadcomb-report" style="margin-right: 10px;">
                            <a href="{{ url('/') }}" class="btn" style="background: red;">
                                <i class="fa fa">&nbsp;Voltar</i>
                            </a>
                        </div>
                        <div class="breadcomb-report">
                            <button type="submit" class="btn">
                                <i class="fa fa-unlock">&nbsp;Autenticar</i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="nk-navigation nk-lg-ic">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
            </div>
        </div>

        <!-- Forgot Password -->
        <div class="nk-block" id="l-forget-password">
            <div class="nk-form">
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                </div>

                <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
            </div>

            <div class="nk-navigation nk-lg-ic rg-ic-stl">
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
            </div>
        </div>
    </div>
    <!-- Login Register area End-->
    <!-- jquery ============================================ -->
    <script src="{{ url('/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS ============================================ -->
    <script src="{{ url('/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu JS ============================================ -->
    <script src="{{ url('/js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- main JS ============================================ -->
    <script src="{{ url('js/main.js') }}"></script>

 </body>

 </html>
