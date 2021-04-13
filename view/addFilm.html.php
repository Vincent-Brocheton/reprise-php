<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.html.php" ?>
</head>
<body>
    <?php require "navbar.html.php"?>
    <div class="container">
    <form action="?page=addFilm" class="form-group" method="POST" enctype="multipart/form-data">
        <label for="title">Titre du film</label>
        <input class="form-control" type="text" placeholder="Titre du film" name="title" id="title"> 
        <label for="description">Description du film</label>
        <input class="form-control" type="text" placeholder="Description du film" name="description" id="description"> 
        <div class="row">
            <div class="col">
                <label for="real">Réalisateur</label>
                <input class="form-control" type="text" placeholder="Réalisateur du film" name="real" id="real"> 
            </div>
            <div class="col">
                <label for="acteur">Acteur</label>
                <input class="form-control" type="text" placeholder="Acteurs" name="acteur" id="acteur"> 
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="sortie">Date de sortie du film</label>
                <input class="form-control" type="date" name="sortie" id="sortie"> 
            </div>
            <div class="col">
                <label for="duree">Durée du film</label>
                <input class="form-control" type="time" name="duree" id="duree">
            </div>
        </div>
        <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
        <div>
        Envoyez ce fichier : <input name="userfile" type="file" /> 
        </div>
        <button class="btn btn-primary">Valider l'ajout</button> 
    </form>
    </div>
</body>
<?php require "script.html.php"?>
</html>