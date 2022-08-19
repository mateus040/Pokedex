<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PokemonController.php';
include 'Controller/CategoriaController.php';

switch($uri_parse)
{

    // Rota HOME
    case '/home':
        include 'View/modules/Pagina_Inicial/home.php';
    break;



    // Rota Pokémon
    case '/pokemon':
        PokemonController::index();
    break;

    case '/pokemon/form':
        PokemonController::form();
    break;

    case '/pokemon/save':
        PokemonController::save();
    break;

    case '/pokemon/delete':
        PokemonController::delete();
    break;


    // Rota Categoria
    case '/categoria':
        CategoriaController::index();
    break;

    case'/categoria/form':
        CategoriaController::form();
    break;

    case '/categoria/save':
        CategoriaController::save();
    break;

    case '/categoria/delete':
        CategoriaController::delete();
    break;

    default:
        header("Location: /home");
    break;
}