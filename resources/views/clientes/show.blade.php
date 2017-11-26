@extends('layouts.master-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">Actualizando Dados Cliente</div>

				<div class="panel-body">


					<form action="/clientes" method="POST">
						{{ csrf_field() }}

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Nome:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input value="{{$cliente->nome}}" name="nome" type="text" class="form-control pull-right" id="nome">
									</div>
									<!-- /.input group -->
								</div>
							</div>
							<!-- /.col-lg-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>Endereço:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-map-marker"></i>
										</div>
										<input value="{{$cliente->endereco}}" name="endereco" type="text" class="form-control pull-right" id="endereco">
									</div>
									<!-- /.input group -->
								</div>
							</div>


						</div>
						<!-- /.row -->

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Date de Nascimento:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input value="{{$cliente->data}}" name="data" type="date" class="form-control pull-right" id="data">
									</div>
									<!-- /.input group -->
								</div>
							</div>
							<!-- /.col-lg-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>Bilhente de Identidade:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-id-card-o"></i>
										</div>
										<input value="{{$cliente->bi}}" name="bi" type="text" class="form-control pull-right" id="bi">
									</div>
									<!-- /.input group -->
								</div>
							</div>


						</div>
						<!-- /.row -->



						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Telefone</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-phone-square"></i>
										</div>
										<input value="{{$cliente->telefone}}" name="telefone" type="text" class="form-control pull-right" id="telefone">
									</div>
									<!-- /.input group -->
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<label>Estado</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-exclamation"></i>
										</div>
										
										<select name="estado" class="form-control">
											<option>On</option>
											<option>Off</option>
										</select>
									</div>
									<!-- /.input group -->
								</div>
							</div>
						</div>
						<!-- /.row -->


						<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Actualizar
						</button>
					</form>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
