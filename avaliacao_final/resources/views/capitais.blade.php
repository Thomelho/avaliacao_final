<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if(count($capitais) == 0)
    <h3>Sem capitais</h3>      
  @else
  <table border="1">
    <tr>
        <td>{{$capital->nome}}</td>
        <td>{{$capital->descricao}}</td>
        <td>{{$capital->preco}}</td>
    </tr>
    @foreach ($capitais as $capital)
        <tr>
          <td>{{$capital->nome}}</td>
          <td>{{$capital->descricao}}</td>
          <td>{{$capital->preco}}</td>
          <td>
            <form method="POST" action="/deletar_capital/{{$capital->id}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete capital">
            </form>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif

</body>
</html>