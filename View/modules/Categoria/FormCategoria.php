<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokemons</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../css/style_FormCategoria.css">
    <link rel="shortcut icon" href="/../../img/favicon.png" type="image/x-icon">
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>

    <form action="/categoria/save" method="post">

        <header>
            <?php include 'View/includes/cabecalho.php' ?>
        </header>

        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

        <div class="container">

            <h2>Cadastro de Categoria</h2>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" value="<?= $model->descricao ?>" />

            <button type="submit">Cadastrar</button>

        </div>



    </form>
    
</body>
</html>