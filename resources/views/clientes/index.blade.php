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
                                    <h3 class="box-title">Lista de Clientes</h3>

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
                                            <th>Endereço</th>
                                            <th>Data de Nascimento</th>
                                            <th>BI</th>
                                            <th>Telefone</th>
                                            <th>estado</th>
                                            <th>Acções</th>
                                        </tr>
                                        @foreach($clientes as $cliente)
                                        <tr>
                                            <td>#</td>
                                            <td>{{$cliente->nome}}</td>
                                            <td>{{$cliente->endereco}}</td>
                                            <td>{{$cliente->data}}</td>
                                            <td>{{$cliente->bi}}</td>
                                            <td>{{$cliente->telefone}}</td>
                                            <td>{{$cliente->estado}}</td>
                                            
                                            <td>

                                                {{-- <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-success" type="submit">
                                                    <i class="fa fa-pencil"></i>  editar
                                                </a>

                                                <a href="/clientes/{{$cliente->id}}" class="btn btn-danger" type="submit">
                                                    <i class="fa fa-pencil"></i>  Apagar
                                                </a> --}}
                                                <form action="/clientes/{{$cliente->id}}/edit" method="GET" class="pull-right" style="margin-left: 25px">

                                                    {{ csrf_field() }}


                                                    <button class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Editar</button>
                                                </form>

                                                <form action="/clientes/{{ $cliente->id }}" method="POST" class="pull-right" style="margin-left: 25px">

                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}


                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Apagar</button>
                                                </form>

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
