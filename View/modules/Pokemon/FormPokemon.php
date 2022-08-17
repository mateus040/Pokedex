<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokemons</title>
    <link rel="stylesheet" href="/../../css/Form.css">
    <link rel="shortcut icon" href="/../../img/favicon.png" type="image/x-icon">
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>

    <form action="/pokemon/save" method="post">

    <br> <br> <br> <br> <br> <br> 

    <center>
        <div class="container">

            <h2> Cadastro de Pokémon </h2>

            <input type="hidden" value="<?= $model->id ?>" name="id" /> <br>

            <label for="nome"><b>Nome do Pokemon:</b></label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome?>" /> <br>

            <label for="descricao"><b>Descrição:</b></label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>"> <br>

            <label for="tipo"><b>Tipo:</b></label>
            <input name="tipo" id="tipo" type="text" value="<?= $model->tipo ?>" /> <br>

            <label for="imagem"><b>Link da Imagem:</b></label>
            <input name="imagem" id="imagem" type="url" value="<?= $model->imagem ?>" />

            <br>

            <button type="submit"><b>Cadastrar</b></button>
        </div>
    </center>

    </form>
    
</body>
</html>