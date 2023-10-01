@extends('layout.app')

@section('content')


    <!-- Data Table area Start-->
    <div class="data-table-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list" style="border-top: 7px solid blue; border-bottom: 7px solid blue;">
                        <div class="dept-name" style="width:100%; display: flex; align-items: center; justify-content:center;">
                            <div class="content text-center">
                                <h2>SUCESSO.!</h2>
                                <img src="" alt="">
                                <h4 class="text-uppercase">Parabens seu pedido foi enviado com sucesso</h4>
                                <div>
                                @if(Session::has('success'))
                                    <p>Faca o rastreio pelo codigo</p>
                                    <span class="text-uppercase"><strong>#tracer code:</strong>
                                        {{ Session::get('success') }}
                                    </span>
                                @endif
                                </div>
                                <a class="btn btn-primary" href="{{url('/search')}}">
                                    <i class="fa fa-"></i>
                                    <span class="text-uppercase">Voltar</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection
