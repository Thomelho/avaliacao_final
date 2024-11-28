<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar capital</title>
</head>
<body>
    <form action="/criar_capital" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao">

        <label for="regiao">regiao</label>
        <input type="text" name="regiao">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>

