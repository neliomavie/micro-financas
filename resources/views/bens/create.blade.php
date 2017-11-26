@extends('layouts.master-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">Registar Bem</div>

				<div class="panel-body">


					<form action="/clientes" method="POST">
						{{ csrf_field() }}


						<input name="estado" type="hidden" value="Off" class="form-control pull-right" id="estado">


						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Descricao:</label>

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
									<label>Endereço:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-map-marker"></i>
										</div>
										<input name="endereco" type="text" class="form-control pull-right" id="endereco">
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
										<input name="data" type="date" class="form-control pull-right" id="data">
									</div>
									<!-- /.input group -->
								</div>
							</div>

						</div>
						<!-- /.row -->
						<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Gravar
						</button>
					</form>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
