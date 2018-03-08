<?php $page = isset($_GET['page']) ? strtolower($_GET['page']) : 'accueil'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crystal Group</title>
    <link href="web/css/crystal.min.css"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet">
</head>
<body>
<!-- svg symbols -->
<div class="hidden"><?php include_once('web/svg/svg.svg') ?></div>

<!-- header -->
<header id="header" class="header">
    <!-- header: main menu -->
    <div class="rHeader wrap">
        <a href="Accueil" class="rHeader-brand">
            <svg height="51" width="227"><use xlink:href="#symbol-logo"></use></svg>
            <span class="sr-only">Accueil</span>
        </a>
        <nav id="menu" class="rHeader-nav">
            <ul class="rHeader-nav-main menu">
                <li<?php if($page == 'accueil') echo ' class="menu-active"' ?>><a href="Accueil">Accueil</a></li>
                <li<?php if(in_array($page, ['identite', 'organisation', 'valeurs'])) echo ' class="menu-active menu-expanded"' ?>>
                    <a href="Identite">Présentation</a> <svg height="9" width="7"><use xlink:href="#symbol-chevron"></use></svg>
                    <!-- sub nav // displayed only on small screens -->
                    <ul>
                        <li<?php if($page == 'identite') echo ' class="menu-active"' ?>><a href="Identite">Notre identité</a></li>
                        <li<?php if($page == 'organisation') echo ' class="menu-active"' ?>><a href="Organisation">Notre organisation</a></li>
                        <li<?php if($page == 'valeurs') echo ' class="menu-active"' ?>><a href="Valeurs">Nos valeurs</a></li>
                    </ul>
                </li>
                <li<?php if($page == 'matières') echo ' class="menu-active"' ?>><a href="Matieres">Matières</a> <svg height="9" width="7"><use xlink:href="#symbol-chevron"></use></svg></li>
                <li<?php if($page == 'realisations') echo ' class="menu-active"' ?>><a href="Realisations">Réalisations</a></li>
                <li<?php if($page == 'actualites') echo ' class="menu-active"' ?>><a href="Actualites">Actualités</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <p class="rHeader-nav-aside asidemenu pb1">
                <a href="#"><svg height="24" width="24"><use xlink:href="#symbol-search"></use></svg></a>
                <a href="#" class="asidemenu-active">fr</a> / <a href="#">en</a>
            </p>
            <button id="close-menu"><svg height="30" width="30"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
        </nav>
        <button id="open-menu"><svg height="21" width="21"><use xlink:href="#symbol-menu"></use> </svg><span class="sr-only">Menu</span></button>
    </div>

    <!-- header: sub nav -->
    <?php
    if(in_array($page, ['identite', 'organisation', 'valeurs'])) {
        include_once('templates/_components/_submenu.php');
    } ?>
</header>

<!-- page markup -->
<?php require_once('templates/_pages/_' . $page . '.php');?>

<!-- footer -->
<?php require_once('templates/_components/_footer.php');?>

<!-- js -->
<script src="web/js/html5shiv.min.js"></script>
<script src="web/js/crystal.js"></script>

</body>
</html>
