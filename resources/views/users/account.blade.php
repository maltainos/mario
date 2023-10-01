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
										<h2>Users Management | New User</h2>
                                        <p>User management module</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a data-toggle="tooltip" href="{{ url('/users') }}" data-placement="left" title="List User" class="btn">
                                        <i class="fa fa-eye"></i>
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

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <form action="/users" method="post" style="width: 60%; margin: 0 auto;" id="form-data">
                            @csrf

                            <div class="cmp-tb-hd text-center">
                                <h2>Formulario de Cadastro de Utilizador</h2>
                            </div>

                            <div class="form-group">
                                <label for="firstName">Nome</label>
                                <input type="firstName" class="form-control" id="firstName" name="firstName" placeholder="Jonh">
                              </div>
                              <div class="form-group">
                                <label for="lastName">Apelido</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe">
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6" style="padding: 0;">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="jonhdoe@mail.com">
                                  </div>
                                  <div class="form-group col-md-6" style="padding-right: 0px;">
                                    <label for="phone">Telefone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+258849240496">
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6" style="padding: 0;">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                  </div>
                                  <div class="form-group col-md-6" style="padding-right: 0px;">
                                    <label for="password1">Confirme password</label>
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Confirme Password">
                                  </div>
                              </div>


                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="status" name="status">
                                <label class="form-check-label" for="status">Email Verification Status (Enable | Disabled)</label>
                              </div>
                              <div class="breadcomb-report">
                                <button type="submit" class="btn">
                                    <i class="fa fa-save"> Guardar</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    @endsection
