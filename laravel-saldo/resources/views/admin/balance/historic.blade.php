@extends('adminlte::page')

@section('title', 'Historico')

@section('content_header')
    <h1>Historico</h1>
    {{ Breadcrumbs::render('historico') }}
@stop

@section('content')
    <div class="box">
        <div class="box-header"> 
            <!--Pesquisar filtros-->
            <form action="{{route('historic.search')}}" method="POST" class="form form-inline">
                    {!! csrf_field() !!}
                    <input type="text" name="id" class="form-control" placeholder="ID">
                    <input type="date" name="date" class="form-control">
                    <select name="type" class="form-control">
                        <option value="">-- Selecione o Tipo --</option>
                        @foreach ($types as $key => $type)
                            <option value="{{ $key }}">{{ $type }}</option>
                        @endforeach
                    </select>                

                    <button type="submit" class="btn btn-primary">Pesquisar</button>
            </form>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th>Data</th>
                        <th>?Sender?</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($historics as $historic)
                    <tr>
                        <td>{{ $historic->id }}</td>
                        <td>{{ number_format($historic->amount, 2, '.','') }}</td>
                        <td>{{ $historic->type( $historic->type ) }}</td> <!-- chama o metodo type do model historic para poder pegar o tipo por extenso ja que é um objeto do tipo historic a variavel historic-->
                        <td>{{ $historic->date }}</td>
                        <td>
                            @if ($historic->user_id_transaction)
                              {{ $historic->userSender->name }}  <!--user name vem ja na consulta do historico passando o relacionamento inverso-->
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    @empty
                    
                    @endforelse
                </tbody>
            </table>
            @if(isset($dataForm))   <!--se existe a array de filtro faz appedn dos dados-->
               {!! $historics->appends($dataForm)->links() !!}  <!--passa os parametros da dataForm na url para poder fazer a paginação do filtro-->
            @else
               {!! $historics->links() !!}  <!--paginação de resultados -->
            @endif
        </div>
        <!-- /.box-body -->
    </div>
@stop