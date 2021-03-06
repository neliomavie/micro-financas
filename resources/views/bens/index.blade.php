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
									<h3 class="box-title">Lista de Bens</h3>

									<div class="box-tools">
										<div class="input-group input-group-sm" style="width: 200px;">
											<form action="/bens/search" method="POST" role="search">
												{{ csrf_field() }}
												<div class="input-group">
													<input type="text" class="form-control" name="q"
													placeholder="Search Bens"> <span class="input-group-btn">
														<button type="submit" class="btn btn-default">
															<span class="glyphicon glyphicon-search"></span>
														</button>
													</span>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- /.box-header -->
								<div class="box-body table-responsive no-padding">
									@if(isset($bens))
									<table class="table table-hover">
										<tr>
											<th>#</th>
											<th>Nome Do Bem</th>
											<th>Descrição</th>
											<th>Nome Do Proprietário</th>
											<th>Acções</th>
										</tr>

										@foreach($bens as $bem)
										<tr>
											<td>{{($total++)}}</td>
											<td>{{$bem->nome}}</td>
											<td>{{$bem->descricao}}</td>
											<td>{{ \App\Cliente::find($bem->cliente_id)->nome}}</td>
											<td>
												<a href="/bens/{{$bem->id}}/edit" class="btn btn-success" type="submit"><i class="fa fa-toggle-off"></i>  On</a>
											</td>
										</tr>
										@endforeach
									</table>
									{!! $bens->render() !!}
									@endif
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
