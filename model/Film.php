<?php
namespace Valarep\model;

use Valarep\model\databaseConnexion;
use PDO;

class Film {
    public $id;
    public $titre;
    public $photo;
    public $description;
    public $realisateur;
    public $acteur;
    public $sortie;
    public $duree;

    public static function getAll(){
        $dbh = databaseConnexion::open();
        $query = "SELECT * FROM `film`";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\Film");
        $items = $sth->fetchAll();
        databaseConnexion::close();
        return $items;
    }

    public static function getFilmById($id){
        $dbh = databaseConnexion::open();
        $query = "SELECT * FROM `film` WHERE `id`=:id";
        $sth = $dbh->prepare($query);
        $sth->bindParam(':id',$id);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\Film");
        $item = $sth->fetch();
        databaseConnexion::close();
        return $item;
    }

    public function addFilm(){
        $dbh = databaseConnexion::open();
        $query = "INSERT INTO `film`(`titre`,`photo`,`description`,`realisateur`,`acteur`,`sortie`,`duree`) VALUES (:titre, :photo, :description, :realisateur, :acteur, :sortie, :duree);";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":titre", $this->titre);
        $sth->bindParam(":photo", $this->photo);
        $sth->bindParam(":description", $this->description);
        $sth->bindParam(":realisateur", $this->realisateur);
        $sth->bindParam(":acteur", $this->acteur);
        $sth->bindParam(":sortie", $this->sortie);
        $sth->bindParam(":duree", $this->duree);
        $sth->execute();
        databaseConnexion::close();
    }

    public static function deleteFilm($id){
        $dbh = databaseConnexion::open();
        $query = "DELETE FROM `film` WHERE `id`=:id";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":id",$id);
        $sth->execute();
        databaseConnexion::close();
    }
}