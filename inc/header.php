<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\\vendor\autoload.php"
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site-informatique-cinéma</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/TP-site-informatique-cinema/assets/css/style.css">
    <script async src="/TP-site-informatique-cinema/assets/js/script.js"></script>

</head>

<body>
    <header class="header">
        <div class="content-header">
            <a class="logo" href="\TP-site-informatique-cinema\index.php"><img class="logo-img" src="/TP-site-informatique-cinema/assets/img/logo-cinema.png"></a>
            <div class="item-header">
                <form action="http://php.test/TP-site-informatique-cinema/search.php" method="POST">
                    <div class="search-box">
                        <div class="btn-search"><i class="fas fa-search"></i></div>
                        <input type="text" class="input-search" name="search" placeholder="Avenger, Venom, ...">
                        <button class="btn-submit" name="submit" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <a class="menu-burger" href=""><i class="fa-solid fa-bars"></i></a>
            </div>
        </div>
    </header>