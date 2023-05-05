<html>

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <style>
   .titulo {
    border: 1px;
    background-color: #c2c2c2;
    text-align: center;
    width: 100%;
    text-transform: uppercase;
    font-weight: bold;
    padding: 5px 5px 5px 5px;
    margin-bottom: 25px;
   }

   .tabela {
    width: 100%;
   }

   table th {
    text-align: left;
   }

   .page-break {
    page-break-after: always;
}

 </style>
</head>
<body>
 <div class="titulo"> Lista de Tarefas </div>
 <table class="tabela">
  <thead>
   <tr>
    <th>Codigo</th>
    <th>Tarefa</th>
    <th>Data Limite Conclusão</th>
   </tr>
  </thead>
  <tbody>
   @foreach($tarefas as $key => $tarefa)
   <tr>
    <td>{{ $tarefa->id }}</td>
    <td>{{ $tarefa->tarefa }}</td>
    <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
   </tr>
   @endforeach
  </tbody>
 </table>
<!-- <div class="page-break"></div>
 <h2>pagina 2</h2> -->
</body>

</html>