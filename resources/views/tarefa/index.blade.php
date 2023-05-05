@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> Tarefas
                    <a class="float-right ml-3" href="{{ route('tarefa.exportacao') }}" title="Exportar XLS"><i class="fa-solid fa-file-excel"></i> </a>
                    <a class="float-right ml-3" href="{{ route('tarefa.exportar') }}" title="Exportar PDF" target="_blank"><i class="fa-solid fa-file-pdf"></i> </a>
                    <a class="float-right" href="{{ route('tarefa.create') }}" title="Adicionar Tarefa"> <i class="fa-solid fa-plus"></i> </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data Limite</th>
                                <th scope="col"> </th>
                                <th scope="col"> </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tarefas as $key => $t)
                            <tr>
                                <th scope="row">{{ $t['id'] }}</th>
                                <td>{{ $t['tarefa'] }}</td>
                                <td>{{ date('d/m/Y', strtotime($t['data_limite_conclusao'])) }}</td>
                                <td class="md-3">
                                    <a class="btn btn-outline-primary btn-sm mr-3" href="{{ route('tarefa.edit', $t['id']) }}" role="button"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                </td>
                                <td class="md-3">
                                    <form id="form_{{ $t['id'] }}" method="post" action="{{ route('tarefa.destroy', ['tarefa' => $t['id']]) }}">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                    <a class="btn btn-outline-danger btn-sm" href="#" onclick="document.getElementById('form_{{ $t['id'] }}').submit()" role="button"><i class="fa-solid fa-trash"></i> Excluir</a>
                                </td>
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