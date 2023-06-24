<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/PHP_Practice-3lab/public/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <div class="nav__menu">
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
            <a href="<?= app()->route->getUrl('/cars') ?>">Автостоянка</a>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
