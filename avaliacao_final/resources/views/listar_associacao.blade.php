<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar associacoes</title>
</head>
<body>
@if(count($associacoes) == 0)
    <h3>Sem associacoes</h3>      
  @else
  <table border="1">
    <tr>
        <th>Usuário</th>
        <th>Descrição</th>
        <th>Items</th>
    </tr>
    @foreach ($associacoes as $associacao)
    <ul>
        <li>{{$associacao->user}}</li>
        <li>{{$associacao->items}}</li>
        <li>{{$associacao->calculateTotal}}</li>
    <hr>
    </ul>
 
    @endforeach
</body>
</html>