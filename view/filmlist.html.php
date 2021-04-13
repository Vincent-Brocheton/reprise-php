<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "head.html.php"?>
</head>
<body>
<?php require "navbar.html.php" ?>

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>Titre du film</th>
                <th>Durée</th>
                <th>Réalisateur</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($films as $film): ?>
                <tr>
                    <td><?= $film->titre ?></td>
                    <td><?= date("H:i",strtotime($film->duree)  ) ?></td>
                    <td><?= $film->realisateur ?></td>
                    <td><a class="btn btn-primary" href="?page=film&id=<?=$film->id?>">Voir le film</a></td>
                    <td><a class="btn btn-danger" href="?page=delete&id=<?=$film->id?>">Supprimer le film</a></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
<?php require "script.html.php"?>
</html>