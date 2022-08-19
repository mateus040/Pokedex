<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Categoria de Pokémon</title>
    <style>
        input, label {display: block}
    </style>
</head>
<body>

    <form action="/categoria/save" method="post">

        <fieldset>

            <legend>Cadastro de Categoria de Pokémon</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" value="<?= $model->descricao ?>" />

            <br>

            <button type="submit">Cadastrar</button>

        </fieldset>

    </form>
    
</body>
</html>