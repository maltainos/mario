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
										<h2>Folder Managment</h2>
                                        <p>Criar pasta para organizar seus arquivos</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">

                                    <div class="modal fade" id="myModaltwo" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h2 class="text-center">Crie uma nova pasta</h2>
                                                    <div class="folder-form">
                                                        <form action="{{ url('/folders') }}" method="POST">
                                                            @csrf
                                                            <div class="form-group mb-3 text-left">
                                                                <label for="folderName">Nome da pasta</label>
                                                                <input type="text" id="folderName" class="form-control" name="name" value="New Folder">
                                                            </div>
                                                            <div class="form-group mb-3 text-left">
                                                                <label for="direcaoId">Direcao</label>
                                                                <select id="direcaoId" class="form-control" name="direcao">
                                                                    @foreach ($direccoes as $direcao)
                                                                        <option value="{{ $direcao->id}}">{{ $direcao->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="float-center">
                                                                <button type="button" class="btn btn-default notika-btn-orange" data-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-default" id="salvarPasta">Salvar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModaltwo">
                                        <i class="fa fa-plus-circle"> <i class="fa fa-folder-open-o 2x" aria-hidden="true"></i></i>
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
                    <div class="data-table-list">

                        <div class="table-responsive">
                            <table id="tableFolders" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Nome da Pasta</th>
                                        <th>Localizacao</th>
                                        <th>Criador</th>
                                        <th>Itens</th>
                                        <th>Data & Hora criado:</th>
                                        <!-- <th>Editar | Eliminar</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($folders as $folder)
                                    <tr>
                                        <td>{{ $folder->codigo }}</td>
                                        <td><i class="fa fa-folder-open-o" aria-hidden="true"></i>{{ $folder->name }}</td>
                                        <td>{{ $folder->direcao->name }}</td>
                                        <td>Mariana Joao</td>
                                        <td>60</td>
                                        <td>{{ $folder->created_at}}</td>
                                        <!--
                                        <td>
                                            <a data-toggle="tooltip" href="{{ url('/folder/new') }}" data-placement="left" title="New Folder" class="btn">
                                                <i class="fa fa-pencil" style="font-size: 24px;"></i>
                                            </a>|
                                            <a data-toggle="tooltip" href="{{ url('/folder/new') }}" data-placement="left" title="New Folder" class="btn">
                                                <i class="fa fa-trash" style="font-size: 24px;"></i>
                                            </a>
                                        </td> -->
                                    </tr>
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

@section('scripts')
    <script>
        btnSalvar =  $("#salvarPasta");
        tableFolder = $("#tableFolders");

        $('document').ready(function(){

            btnSalvar.on('click', function(event){
                event.preventDefault();
                csrfValue = $("input[name = '_token']").val();
                name = $("#folderName").val();
                folderDirecaoId = $("#direcaoId").val();
                url = "{{url('/api/folders')}}";

                params = { folderName : name, direcaoId : folderDirecaoId, _token : csrfValue };
                console.log(params);
                $.post(url, params, function(response){
                    addTableNewRow(response);
                }).fail(function(response){
                    $('#myModaltwo').attr('disdata-dismiss', 'modal');
                    console.log("Fail: "+ response);
                })
            });

        });

        function addTableNewRow(data){

            console.log(data.name);
            var newRow = $("<tr>")
            var cols = '<td>UNIZA1230</td>';
            cols += "<td>"+data.name+"</td>";
            cols += "<td>Folder</td>";
            cols += '<td>Nelson</td>';
            cols += '<td>5</td>';
            cols += '<td>'+data.created_at+'</td>';
            cols += '<td>Butoes</td>';
            cols += '</tr>';
            newRow.append(cols);
            //tableFolder.empty();
            tableFolder.append(newRow);
        }


    </script>
@endsection
