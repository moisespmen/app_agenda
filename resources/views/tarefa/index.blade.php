@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Tarefas</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data Limite</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tarefas as $key => $t)
                            <tr>
                                <th scope="row">{{ $t['id'] }}</th>
                                <td>{{ $t['tarefa'] }}</td>
                                <td>{{ date('d/m/Y', strtotime($t['data_limite_conclusao'])) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Voltar</a></li>
                        @for($i = 1; $i <= $tarefas->lastPage(); $i++)
                            <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $tarefas->url($i) }}">
                                    {{ $i }}
                                </a>
                            </li>
                        @endfor
                        <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Avançar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection