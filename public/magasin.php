<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
    <? require ('index.php') ?>
</head>
<header class="accueil_header">
    <?= $header ?>
</header>
<body>
    <div class="search-bar">
        
        <input type="text" placeholder="Recherche..">

    </div>

    <div>
    <label class="container">One
        <input type="radio" name="radio">
        <span class="checkmark"></span>
    </label>

    <label class="container">Two
        <input type="radio" name="radio">
        <span class="checkmark"></span>
    </label>

    <label class="container">Three
        <input type="radio" name="radio">
        <span class="checkmark"></span>
    </label>

    <label class="container">Four
        <input type="radio" name="radio">
        <span class="checkmark"></span>
    </label>
    </div>
</body>
</html>