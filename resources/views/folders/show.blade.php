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
										<h2 class="text-uppercase">Gestao de Fichehiros</h2>
                                        <p>Faca a gestao dos ficheiros na pasta</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button class="btn" disabled>
                                        <i class="fa fa-plus-circle"></i>
                                        <span class="text-uppercase">Ver arquivos</span>
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
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="contact-list"style="border-top: 7px solid #44f;">
                        <div class="dept-name" style="width:100%; border-bottom: 1px solid #ddd; display: flex; align-items: center; justify-content: space-between">
                            <div class="left" style="display: flex; align-items: center;">
                                <h4 class="text-uppercase">{{ $folder->name }}</h4>&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-folder-open-o" style="font-size: 44px; color: yellow; margin-bottom: 20px;"></i>
                            </div>
                            <div class="rigth">
                                <a data-toggle="tooltip" href="{{ url('direccao/'.$folder->direcao->alias) }}" class="btn btn-primary">
                                    <i class="fa fa-angle-left" style="font-weight: bold;"></i>
                                    <span>VALTAR</span>
                                </a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tracer Code</th>
                                        <th>Assunto</th>
                                        <th>Codigo</th>
                                        <th>Nome</th>
                                        <th>Apelido</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($folder->expedientes as $file)
                                    <tr>
                                        <td>{{ $file->tracer_code}}</td>
                                        <td>{{ $file->name }}</td>
                                        <td>{{ $file->code }}</td>
                                        <td>{{ $file->first_name }}</td>
                                        <td>{{ $file->last_name }}</td>
                                        <td>{{ $file->email }}</td>
                                        <td>{{ $file->phone }}</td>
                                        <td>
                                            <a data-toggle="tooltip" data-placement="left" href="{{url('/files/'.$file->tracer_code)}}" class="btn btn-info btn-sm" title="Visualizar">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="" data-toggle="tooltip" data-placement="right" class="btn btn-danger btn-sm" title="Eliminar">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        @if (count($folder->expedientes) == 0)
                            <div class="alert alert-info text-center">Nenhuma ficheiro encontrada..!</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection
