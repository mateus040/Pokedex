<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PokemonController.php';

switch($uri_parse)
{
    case '/home':
        include 'View/modules/Pagina_Inicial/home.php';
    break;

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

    default:
        header("Location: /home");
    break;
}