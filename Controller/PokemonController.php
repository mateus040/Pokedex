<?php

class PokemonController
{
    public static function index()
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel();
        $model->getAllRows();
        include 'View/modules/Pokemon/FormPokemon.php';
    }

    public static function form()
    {
        include 'Model/PokemonModel.php';
        $model = new PokemonModel();

        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Pokemon/FormPokemon.php';
    }

    public static function save()
    {
        include 'Model/PokemonModel.php';

        $pokemon = new PokemonModel();
        $pokemon->id = $_POST['id'];
        $pokemon->nome = $_POST['nome'];
        $pokemon->altura = $_POST['altura'];
        $pokemon->peso = $_POST['peso'];
        $pokemon->habilidades = $_POST['habilidades'];
        $pokemon->id_categoria = $_POST['id_categoria'];

        $pokemon->save();

        header("Location: /pokemon");
    }

    public static function delete()
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /pokemon");
    }
}