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
										<i class="fa fa-user"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Users Management | List User</h2>
                                        <p>User management module</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a data-toggle="tooltip" href="{{ url('/users/new') }}" data-placement="left" title="New User" class="btn">
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

    <section>
        <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
        </div>
    </section>

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list" style="border-top: 7px solid blue;">

                        <div class="table-responsive">
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
                                        <td>{{ $user->role }}</td>
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
        </div>
    </div>
    <!-- Data Table area End-->

@endsection()
