@extends('layouts.master-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">

				<div class="panel-body">
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
					@endif

					<!-- /.row -->
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Outros Usuarios</h3>

									<div class="box-tools">
										<div class="input-group input-group-sm" style="width: 150px;">
											<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

											<div class="input-group-btn">
												<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
								<!-- /.box-header -->
								<div class="box-body table-responsive no-padding">
									<table class="table table-hover">
										<tr>
											<th>#</th>
											<th>Nome do Usuário</th>
											<th>Data de Registo</th>
											<th>estado</th>
											<th>Acções</th>
										</tr>
										@foreach($usuarios as $usuario)
										@if(Auth::user()!=$usuario)
										<tr>
											<td>#</td>
											<td>{{$usuario->name}}</td>
											<td>{{$usuario->created_at}}</td>
											<td>{{$usuario->estado}}</td>
											<td>
												<form method="POST" action="/usuarios/{{$usuario->id}}">
													@if($usuario->estado=='off')
													<a class="btn btn-success" type="submit"><i class="fa fa-toggle-off"></i>  On</a>
													@else
													<a class="btn btn-danger" type="submit"><i class="fa fa-toggle-off"></i>  Off</a>
													@endif
												</form>
												
											</td>
										</tr>
										@endif
										@endforeach
									</table>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
