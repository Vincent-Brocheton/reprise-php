<?php
namespace Valarep;

use Valarep\controllers\WelcomeController;
use Valarep\controllers\FilmController;

// Chargement automatique des classes
require_once "vendor/autoload.php";

// début de l'application web
session_start();

// récupération de la variable transmise par GET
// est ce qu'on a cliqué sur le navbar ?
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // page par défaut
    $page = 'welcome';
}
switch ($page) {
    case 'welcome':
        WelcomeController::welcome($page);
        break;
    case 'films':
        FilmController::seeAll($page);
        break;
    case 'film':
        $id = $_GET['id'];
        FilmController::getOne($page, $id);
        break;
    case 'add':
        FilmController::viewAddFilm($page);
        break;
    case 'addFilm':
        FilmController::addFilm($page);
        break;
    case 'delete':
        $id = $_GET['id'];
        FilmController::deleteFilm($id);
        break;
    default:
        //todo: ERREUR 404
        break;
}
