<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'style.css' ?>">
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/Projet_05">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/Projet_05/createur_tierlist">Tierlist</a></li>
            <li class="nav-item"><a class="nav-link" href="/Projet_05/createur_comparaison">Fight</a></li>
            <li class="nav-item"><a class="nav-link" href="/Projet_05/login">Login</a></li>
        </ul>
    </nav>
    </header>
    <div class="container" id="container">
        <?= $content ?>
    </div>
    <script src="<?= SCRIPTS . 'JS' . DIRECTORY_SEPARATOR . 'create.js' ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
</body>
</html>