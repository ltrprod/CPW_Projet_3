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
    <a href="index.php?action=addArticle">Creer chapitre</a>
    <a href="index.php?action=listReportedComments">Commentaires signalés</a>
    <a href="#about">A propos</a>
</div>
<body>
<?= $content ?>
</body>
</html>