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
                            <div class="result">
                                <div class="panel">
                                    <div class="panel-footer" style="display: flex; justify-content: space-between;">
                                        <div class="title">
                                            <h5>Resultado da sua pesquisa {{ $title}}</h5>
                                        </div>
                                    </div>
                                    <div class="panel-body row">
                                        <div class="col-md-6">
                                            <div>
                                                <h4 class="text-uppercase">Informacao para envio</h4>&nbsp;&nbsp;&nbsp;
                                            </div>
                                            <form action="{{url("/files/".$searchResult[0]->tracer_code."/send")}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="action" value="Progresso">
                                                <div class="form-group col-md-12">
                                                    <label for="departaments">Origem:</label>
                                                    <select class="form-control" id="departaments" name="from">
                                                        @foreach ($departaments as $direcao)
                                                            @if($direcao->alias == (Auth::user()->role))
                                                                <option value="{{ $direcao->id }}">{{ $direcao->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="subject">Assunto</label>
                                                    <input type="text" class="form-control" id="password" name="subject" placeholder="Assunto">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="departaments">Encaminhar ao departamento:</label>
                                                    <select class="form-control" id="departaments" name="to">
                                                        @foreach ($departaments as $direcao)
                                                            @if($direcao->alias != (Auth::user()->role))
                                                                <option value="{{ $direcao->id }}">{{ $direcao->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="editor">Notas adicionais</label>
                                                    <textarea id="editor" name="notes" class="form-control" rows="10"></textarea>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <label for="file">Anexar Ficheiro adicional</label>
                                                        <input type="file" class="form-control" id="password" name="file" placeholder="file">
                                                    </div>
                                                    <div class="form-group col-md-4 text-center">
                                                        <div style="display: flex; justify-content:center;">
                                                            <i class="fa fa-file-pdf-o" style="font-size: 120px; margin-bottom: 4px; color: red;"></i>
                                                        </div>
                                                        <label for="">No file attached</label>
                                                    </div>
                                                </div>
                                                <div class="breadcomb-report">
                                                    <button type="submit" class="btn">
                                                        <i class="fa fa-save"> Enviar</i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <h4 class="text-uppercase">Informacao basica</h4>&nbsp;&nbsp;&nbsp;
                                            </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection
