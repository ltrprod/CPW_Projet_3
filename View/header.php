<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="View/css/navbar.css"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Titre du blog</title>
</head>
<body>
<div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="index.php">Chapitres</a>
    <?php
    use App\Framework\Controller;
      $check = (new Controller())->checkIsConnectedNavbar();
    if($check){
        echo('<a href="index.php?action=adminPanel">Panneau d\'administration</a><a href="index.php?action=logout">Deconnexion Admin</a>');
    } else{
        echo('<a href="index.php?action=login">Connexion Admin</a>');
    }
    ?>
</div>
<body>
<?= $content ?>
</body>
</html>