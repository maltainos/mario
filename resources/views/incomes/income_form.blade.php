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
										<h2 class="text-uppercase">Gestao de Expediente | Novo Expediente</h2>
                                        <p>Modulo de Entrada de Expediente</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a data-toggle="tooltip" href="{{ url('/income') }}" class="btn btn-sm btn-dark">
                                        <i class="fa fa-eye"></i>
                                        <span>LISTA DE ENTRADAS</span>
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
                    <div class="form-element-list" style="border-top: 7px solid #44f;">
                        <div class="dept-name" style="width:100%; display: flex; align-items: center; justify-content: space-between">
                            <div class="left" style="display: flex; align-items: center;">
                                <h4 class="text-uppercase">Novo expediente</h4>&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-file" style="font-size: 36px; margin-bottom: 4px;"></i>
                            </div>
                        </div>
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="/income" method="post" style="margin: 10px auto;">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="code">Codigo</label>
                                    <input type="text" class="form-control" id="firstName" name="code" placeholder="Ex: 1798472630">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lastName">Apelido</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="firstName">Nome</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Jonh Martin">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="course">Curso</label>
                                    <select class="form-control" id="course" name="course">
                                        <option value="Eng. Informatica">Eng. Informatica</option>
                                        <option value="Eng. Mecatronica">Eng. Mecatronica</option>
                                        <option value="Eng. Civil">Eng. Civil</option>
                                        <option value="Eng. de Processo Industriais">Eng. de Processo Industriais</option>
                                        <option value="Eng. Electrica">Eng. Electrica</option>
                                        <option value="Ciencias Actuarias">Ciencias Actuarias</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="period">Periodo</label>
                                    <select class="form-control" id="period" name="period">
                                        <option value="Laboral">Laboral</option>
                                        <option value="Pos-Laboral">Pos - Laboral</option>
                                        <option value="Ension a Distancia">Ensino a Distancia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Ex: jonhdoe@mail.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Telefone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Ex: +258849240496">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">Assunto</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex: PEDIDO DE CONGELAMENTO DE NOTA">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="departament">Departamento</label>
                                    <select class="form-control" id="departament" name="departament_id">
                                        <option value="">Escolha uma direcao</option>
                                        @foreach ($direcoes as $direcao)
                                            <option value="/{{$direcao->alias}}">{{ $direcao->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="folderId">Pasta</label>
                                    <select class="form-control" id="folderId" name="folderId" disabled></select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="file">Anexar Ficheiros</label>
                                    <input type="file" class="form-control" id="password" name="file" placeholder="file">
                                </div>
                                <div class="form-group col-md-4 text-center">
                                    <div style="display: flex; justify-content:center;">
                                        <i class="fa fa-file-pdf-o" style="font-size: 120px; margin-bottom: 4px; color: red;"></i>
                                    </div>
                                    <label for="">No file attached</label>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="editor">Notas</label>
                                <textarea id="editor" name="notes" class="form-control" rows="10"></textarea>
                            </div>
                            <div class="breadcomb-report">
                                <button type="submit" class="btn" disabled id="btnSave">
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
@section('scripts')
<script>

    departmentChange =  $("#departament");
    pastaDefault =  $("#folderId");
    btnSave = $("#btnSave");

    $('document').ready(function(){

        departmentChange.on('change', function(event){
            csrfValue = $("input[name = '_token']").val();
            departamentId = departmentChange.val();
            url = "{{url('/api/departments/')}}"+departamentId;

            params = { _token : csrfValue };
            $.get(url, params, function(response){
                populateSelectFolders(response);
            }).fail(function(response){
                console.log("Fail: "+ response);
            })
        });

    });

    function populateSelectFolders(data){
        pastaDefault.removeAttr('disabled', 'true');
        btnSave.removeAttr('disabled', 'true');
        pastaDefault.empty();
        data.forEach(element => {
            pastaDefault.append('<option value="' + element.id + '">' + element.name + '</option>');
        });
    }
    </script>
@endsection
