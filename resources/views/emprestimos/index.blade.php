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
									<h3 class="box-title">Clientes</h3>

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
											<th>Nome Cliente</th>
											<th>Modalidade De Pagamento</th>
											<th>Data de Empréstimo</th>
											<th>Data de Devolução</th>
											<th>Valor do Empréstimo</th>
											<th>estado</th>
											<th>Acções</th>
										</tr>
										@foreach($emprestimos as $emprestimo)
										<tr>
											<td>#</td>
											<td>{{$emprestimo->nome}}</td>
											<td>{{$emprestimo->modalidade}}</td>
											<td>{{$emprestimo->data_emprestimo}}</td>
											<td>{{$emprestimo->data_devolucao}}</td>
											<td>{{$emprestimo->valor}}</td>
											<td>{{$emprestimo->estado}}</td>
											<td>
												<button type="submit" class="btn btn-success"><i class="fa fa-toggle-on"></i> Activar
												</button>
												<button type="submit" class="btn btn-danger"><i class="fa fa-toggle-off"></i> Desactivar
												</button>

											</td>
										</tr>
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
