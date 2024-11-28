<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar estados</title>
</head>
<body>
    <form action="/criar_estados" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="regiao">regiao</label>
        <input type="text" name="regiao">

        <label for="sotaque">sotaque</label>
        <input type="text" name="sotaque">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>

