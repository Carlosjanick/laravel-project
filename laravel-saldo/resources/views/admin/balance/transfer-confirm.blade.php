@extends('adminlte::page')

@section('title', 'Confirmar Transferência')

@section('content_header')
    <h1>Confirmar Transferência</h1>
    {{ Breadcrumbs::render('tranferir-comfirm') }}
@stop

@section('content')
    <div class="box">
        <div class="box-header">
         @include('admin.includes.alert')
        </div>
        <div class="box-body">
            <p><strong>Recebedor: </strong>{{ $sender->name }}</p>
            <p><strong>Seu saldo Atual: </strong>{{ number_format($balance->amount, 2, ',' ,'.') }} ESC</p>

            <form method="POST" action="{{route('transfer.store')}}">
                {!! csrf_field() !!}

                <input type="hidden" name="sender_id" value="{{ $sender->id }}" required>

                <div class="form-group">
                    <input type="text" name="amount" placeholder="Valor:" class="form-control" >
                    
                    @if ($errors->has('amount'))
                        <span class="help-block">
                            <strong>{{ $errors->first('amount') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Transferir</button>
                </div>
            </form>
        </div>
    </div>
@stop