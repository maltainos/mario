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
                                <h4 class="text-uppercase">Faca uma busca</h4>&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="rigth">
                                <a data-toggle="tooltip" href="{{ url('/') }}" class="btn btn-primary">
                                    <i class="fa fa-angle-left" style="font-weight: bold;"></i>
                                    <span>VALTAR</span>
                                </a>
                            </div>
                        </div>
                        <div class="form-content">
                            <form action="/search" method="get" style="width: 75%; margin: 20px auto;" id="form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Ex.: jonhdoe@mail.com">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefone</label>
                                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="Ex.: +258 849240496">
                                </div>
                                <div class="form-group" style="padding: 0;">
                                    <label for="code">Request Tracer ID</label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Ex.: UNIZA-XXXX">
                                </div>

                                <div class="breadcomb-report">
                                    <button type="submit" class="btn">
                                        <i class="fa fa-search">&nbsp;Buscar</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection
