<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar usuario</title>
</head>
<body>
  <div class="associacao">

    <form action="/cadastrar_associacao" method="post">
      @csrf
      <label for="estado">estado:</label>
      <select name="estado" id="estado">
        @foreach($estados as $estado)
          <option value="{{$estado->id}}">{{$estado->name}}</option>  
        @endforeach
      </select>
      <ul>
        @foreach($capitais as $capital)
          <li>
              <span>{{ $capital->nome }} - ${{ $capital->regiao }}</span>
              <input type="number" name="items[{{ $capital->id }}]" min="0" value="0">
          </li>
        @endforeach
    </ul>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>

