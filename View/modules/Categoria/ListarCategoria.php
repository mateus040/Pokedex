<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/../../css/style_ListCategoria.css">
    <title>Listagem de Categoria</title>
</head>
<body>

    <header>
        <?php include 'View/includes/cabecalho.php' ?>
    </header>

    <br> <br> <br> <br> <br> <br> <br> <br> <br>

    <center>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descricao</th>
                <th>Deletar</th>
                <th>Alterar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($model->rows as $item): ?>
                <tr>

                    <th scope="row">
                        <?= $item['id'] ?> 
                    </th>

                    <th scope="row">
                        <?= $item['descricao'] ?>
                    </th>

                    <td>
                        <a href="/categoria/form?id=<?= $item['id'] ?>">Y</a>
                    </td>

                    
                    <td>
                        <a href="/categoria/delete?id=<?= $item['id'] ?>"> X </a>
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5"> Nenhum registro encontrado. </td>
            </tr>
        <?php endif ?>
    </table>   
    </center> 
</body>
</html>


