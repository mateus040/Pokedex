<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../css/listar.css">
    <link rel="shortcut icon" href="/../../img/favicon.png" type="image/x-icon">
    <title>Listagem de Pokemons</title>
</head>
<body>

    <?php foreach($model->rows as $item): ?>
            <div class="card">
                <img class="card-img-top" src="<?= $item['imagem'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['nome'] ?></h5>
                    <ul class="list-group list-group-flush">
                        <p class="card-text"><?= $item['descricao'] ?></p>
                    </ul>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tipo: <?= $item['tipo'] ?></li>
                </ul>
                <div class="card-body">
                <a href="/pokemon/form?id=<?= $item['id'] ?>" class="card-link">Editar Pokemon</a></b>
                    <a href="/pokemon/delete?id=<?= $item['id'] ?>" class="card-link">Deletar</a>
                </div>
            </div>
            <td>
        </tr>
    <?php endforeach ?>

    <?php if(count($model->rows) == 0): ?>
        <tr>
            <td colspan="5">Nenhum registro encontrado.</td>
        </tr>
    <?php endif ?>

</body>
</html>