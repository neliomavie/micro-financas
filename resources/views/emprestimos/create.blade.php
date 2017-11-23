@extends('layouts.master-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">Efectuar Empréstimo</div>

				<div class="panel-body">


					<form action="/emprestimos" method="POST">
						{{ csrf_field() }}
						
						<input name="estado" type="hidden" value="desactivado" class="form-control pull-right" id="estado">

						<input name="id_usuario" type="hidden" value="{{Auth::user()->id}}" class="form-control pull-right" id="id_usuario">

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Descrição:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="descricao" type="text" class="form-control pull-right" id="descricao">
									</div>
									<!-- /.input group -->
								</div>
							</div>

							<!-- /.col-lg-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>Valor:</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input name="valor" type="text" class="form-control pull-right" id="valor">
									</div>
									<!-- /.input group -->
								</div>
							</div>


						</div>
						<!-- /.row -->

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Modalidade de Pagamento:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa  fa-ellipsis-h"></i>
										</div>
										<select id="modalidade" name="modalidade" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
									<!-- /.input group -->
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<label>Data De Devolução:</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="data_devolucao" type="date" class="form-control pull-right" id="data_devolucao">
									</div>
									<!-- /.input group -->
								</div>
							</div>
						</div>
						<!-- /.row -->

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Cliente:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa  fa-user"></i>
										</div>
										<select id="id_cliente" name="id_cliente" class="form-control">
											@foreach($clientes as $cliente)
											<option>{{$cliente->nome}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.input group -->
								</div>
							</div>
						</div>
						<!-- /.row -->

						<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Finalizar
						</button>
					</form>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
