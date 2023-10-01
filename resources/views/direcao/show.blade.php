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
										<h2 class="text-uppercase">Gestao de Arquivos</h2>
                                        <p>Faca a gestao das pastas e expedientes</p>
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
                                <h4 class="text-uppercase">{{ $direcao->name }}</h4>&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-folder-open-o" style="font-size: 44px; color: yellow; margin-bottom: 20px;"></i>
                            </div>
                            <div class="rigth">
                                <a data-toggle="tooltip" href="{{ url('direcao/folders/new') }}" data-placement="left" title="Nova pasta" class="btn btn-primary">
                                    <i class="fa fa-plus-circle"> NOVA PASTA</i>
                                </a>
                            </div>
                        </div>
                        @foreach ($direcao->folders as $folder)
                            <div class="contact-win" style="box-shadow: -1px 2px 3px -1px #ccc; padding: 10px; margin: 20px 0px;">
                                <div class="contact-img" style="display: flex; align-items: center; justify-content:center;">
                                    <div class="icon">
                                        <i class="fa fa-folder-open-o" style="font-size: 44px"></i>
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="name">
                                        <h5><a href="{{url('/direccao/folders/'.$folder->alias)}}">{{ $folder->name }}</a></h5>
                                    </div>
                                </div>
                                <div class="conct-sc-ic">
                                    <a class="btn">{{ $folder->expedientes->count() }}</a>
                                </div>
                            </div>
                        @endforeach

                        @if (count($direcao->folders) == 0)
                            <div class="alert alert-info text-center">Nenhuma pasta encontrada..!</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection
