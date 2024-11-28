<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if(count($estados) == 0)
    <h3>Sem usuários</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>
    @foreach ($estados as $estado)
        <tr>
          <td>{{$estado->name}}</td>
          <td>{{$estado->cpf}}</td>
          <td>{{$estado->email}}</td>
          <td>
            <form method="POST" action="/deletar_estado/{{$estado->id}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete estado">
            </form>

            <a href="/editar_estado/{{$user->id}}">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif

</body>
</html>