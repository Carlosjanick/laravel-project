@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>
    {{ Breadcrumbs::render('saldo') }}
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <a href="{{ route('balance.deposit') }}" class="btn btn-info btn-sm"><i class="fa fa-arrow-circle-down"></i> Recarregar</a>
            @if($balance > 0)
                <a href="{{ route('balance.withdrawn') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-up"></i> Levantar</a>
                <a href="{{ route('balance.transfer') }}" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-right"></i> Transferir</a>
            @endif
        </div>

        <div class="box-body">
            <!--mensagens-->
            @include('admin.includes.alert')
            
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="ion ion-cash"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Saldo</span>
                <span class="info-box-number">{{$balance}} <strong>ESC</strong></span>

                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description pull-right">
                     <a href="" class="small-box-footer"  style="color: #fff;">Historico <i class="fa  fa-history"></i></a>
                 </span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>
@stop
