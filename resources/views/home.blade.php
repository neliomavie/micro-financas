@extends('layouts.master-admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Dashboard</div> --}}

                <div class="panel-body">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                                <div class="info-box-content">
                                    <a href="/usuarios"><span style="color: #00c0ef;" class="info-box-text">Usuários</span></a>
                                    <span class="info-box-number">{{count($usuarios)}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

                                <div class="info-box-content">
                                    <a href="/clientes"><span style="color: #dd4b39;" class="info-box-text">Clientes</span></a>
                                    <span class="info-box-number">{{count($clientes)}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-usd"></i></span>

                                <div class="info-box-content">
                                    <a href="/pr_emprestimoss"><span style="color: #00a65a ;" class="info-box-text">Financiamentos</span></a>
                                    <span class="info-box-number">{{count($emprestimos)}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="fa fa-usd"></i></span>

                                <div class="info-box-content">
                                    <a href="/home"><span style="color: #f39c12;" class="info-box-text">Meus Finaciamentos</span></a>
                                    <span class="info-box-number">{{count($pr_emprestimos)}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <!-- /.row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Meus Emprestimos</h3>

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
                                        @foreach($pr_emprestimos as $pr_emprestimo)
                                        <tr>
                                            <td>#</td>
                                            <td>{{ \App\Cliente::find($pr_emprestimo->cliente_id)->nome}}</td>

                                            <td>{{$pr_emprestimo->modalidade}}</td>
                                            <td>{{$pr_emprestimo->created_at}}</td>
                                            <td>{{$pr_emprestimo->data_devolucao}}</td>
                                            <td>{{$pr_emprestimo->valor}}</td>
                                            <td>{{$pr_emprestimo->estado}}</td>
                                            <td>
                                                <button type="submit" class="btn btn-success"><i class="fa fa-toggle-on"></i> On
                                                </button>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-toggle-off"></i> Off
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
