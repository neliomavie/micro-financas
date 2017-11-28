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
                                <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

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
                                    <a href="/emprestimos"><span style="color: #00a65a ;" class="info-box-text">Financiamentos</span></a>
                                    <span class="info-box-number">{{count($emprestimos)}}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                                <div class="info-box-content">
                                    <a href="#"><span style="color: #f39c12;" class="info-box-text">New Members</span></a>
                                    <span class="info-box-number">2,000</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
