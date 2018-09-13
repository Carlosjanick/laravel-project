@extends('adminlte::page')

@section('title', 'Nova Transferencia')

@section('content_header')
    <h1>Fazer Transferencia</h1>
    {{ Breadcrumbs::render('tranferir') }}
@stop

@section('content')
    <div class="box">
        <div class="box-header">
           @include('admin.includes.alert') 
        </div>
        <div class="box-body">
            <form method="POST" action="{{ route('confirm.transfer') }}">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('sender') ? 'has-error' : '' }}">
                    <input type="text" name="sender" value="{{old('sender')}}" placeholder="Informação de quem vai receber o saldo (Nome ou E-mail)" class="form-control" >
                    @if ($errors->has('sender'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sender') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Próxima Etapa</button>
                </div>
            </form>
        </div>
    </div>
@stop