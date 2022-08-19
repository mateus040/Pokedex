<?php

class PokemonController
{
    public static function index() 
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel;
        $model->getAllRows();

        
        include 'View/modules/Pokemon/ListarPokemon.php';
    }

    public static function form()
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        $model->lista_categoria = $model->getAllCategoria();
            
        include 'View/modules/Pokemon/FormPokemon.php';
    }

    public static function save() 
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->descricao = $_POST['descricao'];
        $model->imagem = $_POST['imagem'];
        $model->id_categoria = $_POST['categoria'];
        
        $model->save(); 

        header("Location: /pokemon"); 
    }

    public static function delete()
    {
        include 'Model/PokemonModel.php';

        $model = new PokemonModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /pokemon");
    }
}