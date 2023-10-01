<!doctype html>
<html class="no-js" lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Universidade Zambeze - Gestao de Expediente</title>
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
    <!-- meanmenu CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('/css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <!-- main CSS ============================================ -->
    <!--link rel="stylesheet" href="{{ url('/css/main.css') }}" -->
    <!-- style CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <!-- responsive CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <h3>Manager App</h3>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            @if(Auth::user())
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">
                                    <span class="btn btn-sm btn-primary">
                                        <i class="fa fa-home"></i>
                                        <span>Dashboard</span>
                                    </span>
                                </a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link">
                                    <span class="btn btn-sm btn-danger">
                                        <i class="fa fa-home"></i>
                                        <span>Tracer</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/income/new') }}" class="nav-link">
                                    <span class="btn btn-sm btn-info">
                                        <i class="fa fa-plus-circle"></i>
                                        Expediente
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                @if(Auth::user())
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <span class="btn btn-dark">
                                        <i class="fa fa-user"></i>
                                        {{ Auth::user()->name() }}
                                    </span>
                                </a>
                                @endif
                                @if(!Auth::user())
                                <a href="{{url('/login')}}" class="nav-link">
                                    <span class="btn btn-danger">
                                        <i class="fa fa-user"></i>
                                        Login
                                    </span>
                                </a>
                                @endif
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-message-info">
                                       <ul>
                                            <li>
                                                @if(Auth::user())
                                                <a href="{{ url('/account') }}">
                                                    <div class="hd-message-sn">
                                                        <div class="hd-message-img chat-img">
                                                            <span><i class="fa fa-user"></i></span>
                                                        </div>
                                                        <div class="hd-mg-ctn">
                                                            <h3>{{ Auth::user()->name() }}</h3>
                                                            <p>Manager your account</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endif
                                            </li>
                                            <li>
                                                <a href="{{ url('/folders') }}">
                                                    <div class="hd-message-sn">
                                                        <div class="hd-message-img chat-img">
                                                            <span><i class="fa fa-folder-open-o" aria-hidden="true"></i></span>
                                                        </div>
                                                        <div class="hd-mg-ctn">
                                                            <h3>Folders</h3>
                                                            <p>System Folders</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/settings') }}">
                                                    <div class="hd-message-sn">
                                                        <div class="hd-message-img chat-img">
                                                            <span><i class="fa fa-cog" aria-hidden="true"></i></span>
                                                        </div>
                                                        <div class="hd-mg-ctn">
                                                            <h3>Settings</h3>
                                                            <p>System administration</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/account') }}">
                                                    <div class="hd-message-sn">
                                                        <div class="hd-message-img chat-img">
                                                            <span><i class="fa fa-shield" aria-hidden="true"></i></span>
                                                        </div>
                                                        <div class="hd-mg-ctn">
                                                            <h3>Privacy & Security</h3>
                                                            <p>System Security Police</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="hd-message-sn" style="display: flex; justify-content: center;">
                                                    <form action="{{ url('/logout') }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-primary" type="submit">
                                                            <span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                                                            <span>Terminar Sessao</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </li>
                                       </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->

    @yield('content')


     <!-- Start Footer area-->
     <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>MANAGER SYSTEM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    @yield('script')
    <!-- jquery ============================================ -->
    <script src="{{ url('/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS ============================================ -->
    <script src="{{ url('/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu JS ============================================ -->
    <script src="{{ url('/js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- main JS ============================================ -->
    <script src="{{ url('js/main.js') }}"></script>
    @yield('scripts')

</body>

</html>
