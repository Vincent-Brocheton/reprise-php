<?php

namespace Valarep\controllers;

use Exception;
use Valarep\model\Film;
use Valarep\View;

class FilmController{
    public static function seeAll($page){
        $films = Film::getAll();
        View::setTemplate('filmlist');
        View::bindVariable('films', $films);
        View::bindVariable('page', $page);
        View::display();
    }

    public static function getOne($page, $id){
        $film = Film::getFilmById($id);
        View::setTemplate('filmdetails');
        View::bindVariable('film',$film);
        View::bindVariable('page',$page);
        View::display();
    }

    public static function viewAddFilm($page){
        View::setTemplate('addFilm');
        View::bindVariable('page', $page);
        View::display();
    }

    public static function addFilm($page){
        $filmAdded = new Film;
        $filmAdded->titre = $_POST['title'];
        $filmAdded->description = $_POST['description'];
        $filmAdded->realisateur = $_POST['real'];
        $filmAdded->acteur = $_POST['acteur'];
        $filmAdded->sortie = $_POST['sortie'];
        $filmAdded->duree = $_POST['duree'];
        $filmAdded->photo = $_FILES['userfile']['name'];
        $filmAdded->addFilm();

        if(file_exists("img/" . $_FILES["userfile"]["name"])){
            echo $_FILES["userfile"]["name"] . " existe déjà.";
        } else{
            move_uploaded_file($_FILES["userfile"]["tmp_name"], "img/" . $_FILES["userfile"]["name"]);
            echo "Votre fichier a été téléchargé avec succès.";
        }

    }

    public static function deleteFilm($id){
            Film::deleteFilm($id);
    }
}