<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar estado</title>
</head>
<body>
  <form action="/editar_estado/{{$estado->id}}" method="post">
    @csrf
    {{ method_field("PUT") }}
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$estado->name}}">

    <label for="regiao">regiao</label>
    <input type="text" name="regiao" value="{{$estado->cpf}}">

    <label for="sotaque">sotaque</label>
    <input type="text" name="sotaque" value="{{$estado->email}}">

    <input type="submit" value="Salvar">
</form>
</body>
</html>