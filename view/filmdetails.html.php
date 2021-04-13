<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.html.php"?>
</head>
<body>
    <?php require "navbar.html.php" ?>

    <div><?= $film->titre?></div>
    <img src="img/<?= $film->photo?>" alt="<?= $film->titre?>">
    <div><?= $film->description?></div>
    <div><?= $film->realisateur?></div>
    <div><?= $film->acteur?></div>
    <div><?= $film->sortie?></div>
    <div><?= date("H:i",strtotime($film->duree))?></div>
</body>
<?php require "script.html.php"?>
</html>