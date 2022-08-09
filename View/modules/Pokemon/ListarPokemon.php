<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pokemons</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Nome</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Habilidades</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
            <tr>
                <td>
                    <a href="/pokemon/delete?id=<?= $item->id ?>">X</a>
                </td>

                <td>
                    <a href="/pokemon/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
                </td>

                <td><?= $item->nome ?></td>
                <td><?= $item->altura ?></td>
                <td><?= $item->peso ?></td>
                <td><?= $item->habilidades ?></td>
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