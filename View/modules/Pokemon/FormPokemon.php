<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokemons</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../css/style_FormPokemon.css">
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

    <header>
        <?php include 'View/includes/cabecalho.php' ?>
    </header>

    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

    <center>
        <div class="container">

            <h2> Cadastro de Pokémon </h2>

            <input type="hidden" value="<?= $model->id ?>" name="id" /> <br>

            <label for="nome"><b>Nome do Pokemon:</b></label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome?>" /> <br>

            <label for="descricao"><b>Descrição:</b></label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>"> <br>

            <label for="imagem"><b>Link da Imagem:</b></label>
            <input name="imagem" id="imagem" type="url" placeholder=" Pasta Links (Pasta Raiz)" value="<?= $model->imagem ?>" />

            <label for="categoria">Categoria:</label>
            <select name="categoria">
                <?php foreach($model->lista_categoria as $categoria):?>
                    <option value="<?= $categoria['id']?>" <?= ($categoria['id'] == $model->id_categoria) ? 'selected' : " " ?> >
                        <?= $categoria['descricao'] ?>
                    </option>
                <?php endforeach ?>
            </select>

            <br>

            <button type="submit"><b>Cadastrar</b></button>
        </div>
    </center>

    </form>

    <br> <br> <br> <br> <br> 

    <?php include 'View/includes/footer.php' ?>
    
</body>
</html>