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
										<h2 class="text-uppercase">Rastreio de Correspondencias</h2>
                                        <p class="text-uppercase">Verifique o estado do seu pedido</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button class="btn" disabled>
                                        <i class="fa fa-map"></i>
                                        <span class="text-uppercase">Tracer</span>
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

    <!-- Data Table area Start-->
    <div class="data-table-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list" style="border-top: 7px solid blue;">
                        <div class="dept-name" style="width:100%; display: flex; align-items: center; justify-content: space-between">
                            <div class="left" style="display: flex; align-items: center;">
                                <h4 class="text-uppercase">{{$title}}</h4>&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="form-content">

                            @if (count($searchResult) != 0)
                            <div class="result">
                                <div class="panel">
                                    <div class="panel-footer" style="display: flex; justify-content: space-between;">
                                        <div class="title">
                                            <h5>Resultado da sua pesquisa #Tracer Code: {{ $searchResult[0]->tracer_code}}</h5>
                                        </div>
                                        <div class="status">
                                            @if(!$searchResult[0]->status)
                                            <button class="btn btn-primary" disabled>
                                                <span>Em progessso...</span>
                                            </button>
                                            @endif
                                            @if($searchResult[0]->status)
                                            <button class="btn btn-success" disabled>
                                                <span>Terminado</span>
                                            </button>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <h6>Assunto:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>{{ $searchResult[0]->name}}</p>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <h6>Codigo Estudante:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>{{ $searchResult[0]->code}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6>Apelido:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>{{ $searchResult[0]->last_name}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6>Outros Nomes:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>{{ $searchResult[0]->first_name}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6>Email:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>{{ $searchResult[0]->email}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6>Telefone:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>+258 {{ $searchResult[0]->phone}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6>Attache:</h6>
                                                    </div>
                                                    <div class="col-md-9" style="display: flex;">
                                                        <a href="" class="btn btn-info">
                                                            <i class="fa fa-file-pdf-o" style="color: red;"></i>&nbsp;
                                                            {{ $searchResult[0]->file}}
                                                        </a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6>Notes:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p class="text-justify">{{ $searchResult[0]->notes}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <h6>Data Entrada:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>{{ $searchResult[0]->created_at}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6>Departamento:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>{{ $searchResult[0]->folder->direcao->name}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6>Arquivado:</h6>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <p>{{ $searchResult[0]->folder->name}}</p>
                                                    </div>

                                                    <div class="col-md-3" style="color: red;">
                                                        <h6>Progesso:</h6>
                                                    </div>
                                                    <div class="col-md-9" style="color: red;">
                                                        <p class="text-uppercase">{{ $searchResult[0]->progress}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display: flex; justify-content:end; align-items:center;">
                                            <a class="btn btn-success" style="margin-right: 10px;" href="">Liberar Resultado</a>
                                            <a class="btn btn-info" href="{{url("/files/".$searchResult[0]->tracer_code."/send")}}">Reencaminhar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection
