<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categoria</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Descrição</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
            <tr>
                <td>
                    <a href="/categoria/delete?id=<?= $item->id ?>">X</a>
                </td>

                <td>
                    <a href="/categoria/form?id=<?= $item->id ?>"><?= $item->descricao ?></a>
                </td>

                <td><?= $item->descricao ?></td>
            </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
    </table>
    
</body>
</html>