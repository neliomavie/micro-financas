@extends('layouts.master-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">Registar Bem</div>

				<div class="panel-body">
					
					@if(session()->has('message'))
					<div class="alert alert-success">
						{{ session()->get('message') }}
					</div>
					@else
					@if(session()->has('message'))
					<div class="alert alert-danger">
						{{ session()->get('message') }}
					</div>
					@endif
					@endif

					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div><br />
					@endif

					<form action="/bens" method="POST">
						{{ csrf_field() }}

						<input name="estado" type="hidden" value="Off" class="form-control pull-right" id="estado">

						<input name="usuario_id" type="hidden" value="{{Auth::user()->id}}" class="form-control pull-right" id="usuario_id">

						<div class="row">

							<div class="col-lg-6">
								<div class="form-group">
									<label>Nome Do Bem:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-user"></i> 
										</div>
										<input type="text" name="nome" class="form-control pull-right" id="nome">
									</div>
									<!-- /.input group -->
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<label>Nome Do Cliente:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa  fa-user"></i>
										</div>
										<select name="cliente_id" class="form-control">
											@foreach($clientes as $cliente)
											<option value="{{$cliente->id}}">{{$cliente->nome}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.input group -->
								</div>
							</div>

							
						</div>
						<!-- /.row -->

						<div class="row">
							
							<div class="col-lg-6">
								<div class="form-group">
									<label>Descrição:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-user"></i> 
										</div>
										<textarea name="descricao" class="form-control pull-right" id="descricao"></textarea>
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
