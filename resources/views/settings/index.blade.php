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
										<i class="fa fa-cog" aria-hidden="true"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Settings</h2>
                                        <p>App Configuration</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a data-toggle="tooltip" href="{{ url('/expediente/new') }}" data-placement="left" title="Novo Expediente" class="btn">
                                        <i class="fa fa-plus-circle"></i>
                                    </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->

    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active">
                            <a data-toggle="tab" href="#Geral">
                                <i class="notika-icon notika-form"></i>Geral
                            </a>
                        </li>
                        <li><a data-toggle="tab" href="#Dire"><i class="notika-icon notika-house"></i>Direccoes</a>
                        </li>
                        <li><a data-toggle="tab" href="#Users"><i class="notika-icon notika-mail"></i>Usuarios</a>
                        </li>
                        <li><a data-toggle="tab" href="#Security"><i class="notika-icon notika-windows"></i>Seguranca</a>
                        </li>
                        <li><a data-toggle="tab" href="#Mail"><i class="notika-icon notika-edit"></i>Mail</a>
                        </li>
                        <li><a data-toggle="tab" href="#System"><i class="notika-icon notika-bar-chart"></i>Sistema</a>
                        </li>
                    </ul>

                    <div class="tab-content custom-menu-content">
                        <div id="Geral" class="tab-pane in active flipInX">
                            <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                                <div class="row">
                                    <div class="col-md-8 col-xl-8 col-sm-8 col-xs-12">
                                        <div class="curved-inner-pro">
                                            <div class="curved-ctn">
                                                <h2>Geral</h2>
                                                <p>Configuracao geral do sistema</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xl-4 col-sm-4 col-xs-6">
                                                <h4>App Name :</h4>
                                            </div>
                                            <div class="col-md-8 col-xl-8 col-sm-8 col-xs-6">
                                                {{ $appName }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xl-4 col-sm-4 col-xs-6">
                                                <h4>App Domain :</h4>
                                            </div>
                                            <div class="col-md-8 col-xl-8 col-sm-8 col-xs-6">
                                                {{ app_path(); }}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-xl-4 col-sm-4 col-xs-6">
                                                <h4>App Main Role :</h4>
                                            </div>
                                            <div class="col-md-8 col-xl-8 col-sm-8 col-xs-6">
                                                Administrator
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-xl-4 col-sm-4 col-xs-6">
                                                <h4>App Context Path :</h4>
                                            </div>
                                            <div class="col-md-8 col-xl-8 col-sm-8 col-xs-6">
                                                Learning
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-xl-4 col-sm-4 col-xs-6">
                                                <h4>Version :</h4>
                                            </div>
                                            <div class="col-md-8 col-xl-8 col-sm-8 col-xs-6">
                                                App v.01
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-xl-4 col-sm-4 col-xs-6">
                                                <h4>Author :</h4>
                                            </div>
                                            <div class="col-md-8 col-xl-8 col-sm-8 col-xs-6">
                                                Nelson Zaona Joao Albino
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-xl-4 col-sm-4 col-xs-6">
                                                <h4>Licence :</h4>
                                            </div>
                                            <div class="col-md-8 col-xl-8 col-sm-8 col-xs-6">
                                                Open Source
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4 col-sm-4 col-xs-12">
                                        <div class="curved-inner-pro">
                                            <div class="curved-ctn">
                                                <h2>App Logo</h2>
                                                <p>Logotipo Official do Sistema e Aplicacao Online</p>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <img src="{{ url('/img/download.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Dire" class="tab-pane in flipInX">
                            <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                                <div class="row" style="width: 100%;">
                                    <div class="col-md-12 col-xl-12 col-sm-12 col-xs-12">
                                        <div class="curved-inner-pro">
                                            <div class="curved-ctn">
                                                <h2>Direccoes</h2>
                                                <p>Configuracao geral do sistema</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="container">
                                                <form action="/direccao" method="post">
                                                    @csrf
                                                    <div class="row g-3">
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="name" placeholder="Direccao" aria-label="Direccao">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"> Guardar</i></button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="table-responsive">
                                                    <table id="data-table-basic" class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#.</th>
                                                                <th>Direccao</th>
                                                                <th>Folders</th>
                                                                <th>Files</th>
                                                                <th>Manager</th>
                                                                <th>Created At</th>
                                                                <th>Editar</th>
                                                                <th>Eliminar</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($direcoes as $direcao)
                                                            <tr>
                                                                <td>.#</td>
                                                                <td>{{ $direcao->name }}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Guest</td>
                                                                <td>{{ $direcao->created_at }}</td>
                                                                <td>
                                                                    <button class="btn btn-primary">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <button class="btn btn-danger">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        {{ $direcoes->links() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Users" class="tab-pane in flipInX">
                            <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                                <div class="row" style="width: 100%;">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-ctn">
                                                <h2>Usuarios</h2>
                                                <p>App Configuration</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                        <div class="breadcomb-report">
                                            <a data-toggle="tooltip" href="{{ url('/users/new') }}" data-placement="left" title="Novo Usuario" class="btn">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <table id="data-table-basic" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#.</th>
                                                    <th>Nome</th>
                                                    <th>Apelido</th>
                                                    <th>Email</th>
                                                    <th>Estado de Email</th>
                                                    <th>Permissoes</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>.#</td>
                                                    <td>{{ $user->first_name }}</td>
                                                    <td>{{ $user->last_name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->email_verification_status ? 'Verificado' : 'Nao verificado' }}</td>
                                                    <td>Guest</td>
                                                    <td>
                                                        <button class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <nav aria-label="Page navigation">
                                            @if ($users->hasPages())
                                            <ul class="pagination text-center">
                                                @if ($users->onFirstPage())
                                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                                @else
                                                <li><a href="{{ $users->previousPageUrl() }}" rel="prev">Previous</a></li>
                                                @endif

                                                @if ($users->hasMorePages())
                                                    <li class="page-item"><a class="page-link"  href="{{ $users->nextPageUrl() }}">Next</a></li>
                                                @else
                                                    <li class="page-item disabled"><a class="page-link">Next</a></li>
                                                @endif
                                            </ul>
                                            @endif
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="Security" class="tab-pane in flipInX">
                            <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 col-sm-12 col-xs-12">
                                        <div class="curved-inner-pro">
                                            <div class="curved-ctn">
                                                <h2>Securanca</h2>
                                                <p>Configuracao geral do sistema</p>
                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Mail" class="tab-pane in flipInX">
                            <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 col-sm-12 col-xs-12">
                                        <div class="curved-inner-pro">
                                            <div class="curved-ctn">
                                                <h2>Servidor de Email</h2>
                                                <p>Configuracao geral do sistema</p>
                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="System" class="tab-pane in flipInX">
                            <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 col-sm-12 col-xs-12">
                                        <div class="curved-inner-pro">
                                            <div class="curved-ctn">
                                                <h2>Sistema</h2>
                                                <p>Configuracao geral do sistema</p>
                                            </div>
                                        </div>
                                        <div class="row">

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

@endsection
