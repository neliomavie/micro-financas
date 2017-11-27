@extends('layouts.master-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">Registar Usuário</div>

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

					<form action="/usuarios" method="POST">
						{{ csrf_field() }}

						<input name="estado" type="hidden" value="On" class="form-control pull-right" id="estado">

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Nome:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="name" type="text" class="form-control pull-right" id="name" required>
									</div>
									<!-- /.input group -->
								</div>
							</div>

							<input type="hidden" name="username" required value="default" required>

							<!-- /.col-lg-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>E-Mail Address:</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-envelope-o "></i>
										</div>
										<input name="email" type="email" class="form-control pull-right" id="email" required>
									</div>
									<!-- /.input group -->
								</div>
							</div>


						</div>
						<!-- /.row -->

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Password:</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-key"></i>
										</div>
										<input name="password" type="text" class="form-control pull-right" id="Password" required>
									</div>
									<!-- /.input group -->
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<label>Confirm Password:</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-key"></i>
										</div>
										<input name="password_confirm" type="text" class="form-control pull-right" id="password_confirm" required>
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
