@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Fazer Recarga</h1>
    {{ Breadcrumbs::render('recarregar') }}
@stop

@section('content')
    <div class="box">
        <div class="box-header">
           @include('admin.includes.alert') 
        </div>
        <div class="box-body">
           <form method="POST" action="{{ route('balance.store') }}">
                {!! csrf_field() !!} <!--utilizado quando requisiçao é post-->
                <div class="form-group has-feedback {{ $errors->has('amount') ? 'has-error' : '' }}">
                    <input type="text" value="{{old('amount')}}" name="amount" class="form-control" placeholder="Valor da Recarga">
                    @if ($errors->has('amount'))
                        <span class="help-block">
                            <strong>{{ $errors->first('amount') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Recarregar</button>
                    <a href="{{route('admin.balance')}}" class="btn btn-info">Voltar</a>
                </div>
           </form>
        </div>
    </div>
@stop