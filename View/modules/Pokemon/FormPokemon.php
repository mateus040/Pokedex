<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokemons</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>

    <form action="/pokemon/save" method="post">

        <fieldset>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome do Pokemon:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome?>" />

            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>"> </textarea> 

            <label for="tipo">Tipo:</label>
            <input name="tipo" id="tipo" type="text" value="<?= $model->tipo ?>" />

            <label for="imagem">Link da Imagem:</label>
            <input name="imagem" id="imagem" type="url" value="<?= $model->imagem ?>" />

            <br>

            <button type="submit">Cadastrar</button>

        </fieldset>

    </form>
    
</body>
</html>