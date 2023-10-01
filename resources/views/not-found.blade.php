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
                                <h2>PAGE NOT FOUND.!</h2>
                                <img src="" alt="">
                                <p>Sorry, this page is not exists</p>
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
