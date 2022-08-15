<?php

class CategoriaController
{
    public static function index()
    {
        include 'Model/CategoriaModel.php';

        $model = new CategoriaModel();
        $model->getAllRows();
        include 'View/modules/Categoria/FormCategoria.php';
    }

    public static function form()
    {
        include 'Model/CategoriaModel.php';
        $model = new CategoriaModel();

        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Categoria/FormCategoria.php';
    }

    public static function save()
    {
        include 'Model/CategoriaModel.php';

        $categoria = new CategoriaModel();
        $categoria->id = $_POST['id'];
        $categoria->descricao = $_POST['descricao'];

        $categoria->save();

        header("Location: /categoria");
    }

    public static function delete()
    {
        include 'Model/CategoriaModel.php';

        $model = new CategoriaModel();

        $model->delete( (int) $_GE['id']);

        header("Location: /categoria");
    }
}