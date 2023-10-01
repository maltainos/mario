@extends('layout.app')

@section('content')
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area mg-tb-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-folder-open-o 2x" aria-hidden="true"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2 class="text-uppercase">Correspondencias</h2>
                                        <p class="text-uppercase">Entrada & Saida de Correspondencias</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button class="btn" disabled>
                                        <i class="fa fa-plus-eyes"></i>
                                        <span class="text-uppercase">Departamentos</span>
                                    </button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->

    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                @foreach ($direcoes as $direcao)
                @if((Auth::user()->role == $direcao->alias) || (Auth::user()->role == 'Admin'))
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30" style="box-sizing: border-box; box-shadow: -1px 2px 3px -1px #ccc; margin-bottom: 6px;">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <div style="display: flex; align-items: center; justify-content:center;">
                                <div class="icon">
                                    <i class="fa fa-folder-open-o" style="font-size: 44px; color: blue;"></i>
                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="name">
                                    <h6><a href="{{url('/direccao/'.$direcao->alias)}}">{{ $direcao->name }}</a></h6>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="badge badge-sm badge-secondary">
                                {{ $direcao->folders->count() }}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                @if(Auth::user()->role != 'Admin')
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30" style="box-sizing: border-box; box-shadow: -1px 2px 3px -1px #ccc; margin-bottom: 6px;">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <div style="display: flex; align-items: center; justify-content:center;">
                                <div class="icon">
                                    <i class="fa fa-folder-open-o" style="font-size: 44px; color: blue;"></i>
                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="name">
                                    <h6><a href="">Recebidos Internamente</a></h6>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="badge badge-sm badge-secondary">
                                {{$tracerReceive->count()}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30" style="box-sizing: border-box; box-shadow: -1px 2px 3px -1px #ccc; margin-bottom: 6px;">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <div style="display: flex; align-items: center; justify-content:center;">
                                <div class="icon">
                                    <i class="fa fa-folder-open-o" style="font-size: 44px; color: blue;"></i>
                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="name">
                                    <h6><a href="">Enviados Internamente</a></h6>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="badge badge-sm badge-secondary">
                                {{$tracerSend->count()}}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Data Table area Start-->
    <div class="data-table-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list" style="border-top: 7px solid blue;">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 120px;">Tracer Code</th>
                                        <th>Assunto</th>
                                        <th>Nome</th>
                                        <th>Apelido</th>
                                        <th>Pasta</th>
                                        <th>Departamento</th>
                                        <th>See</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($files as $file)
                                    @if((Auth::user()->role == $file->folder->direcao->alias) || (Auth::user()->role == 'Admin'))
                                    <tr>
                                        <td>{{ $file->tracer_code}}</td>
                                        <td>{{ $file->name }}</td>
                                        <td>{{ $file->first_name }}</td>
                                        <td>{{ $file->last_name }}</td>
                                        <td>{{ $file->folder->name }}</td>
                                        <td>{{ $file->folder->direcao->name }}</td>
                                        <td>
                                            <a href="{{url('/files/'.$file->tracer_code)}}" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection
