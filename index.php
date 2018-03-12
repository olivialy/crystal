<?php $page = isset($_GET['page']) ? strtolower($_GET['page']) : 'accueil'; ?>
<?php $material = isset($_GET['material']) ? strtolower($_GET['material']) : null; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
    <title>Crystal Group</title>
    <link href="web/css/crystal.min.css"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet">
</head>
<body>
<!-- svg symbols -->
<div class="hidden"><?php include_once('web/svg/svg.svg') ?></div>
<?php if ($page == 'accueil') { ?>
    <svg id="scrolltip" class="scrolltip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="60" height="90">
        <path d="M15.8,0h-1.6c-2.6,0-4.7,2.1-4.7,4.7v10.7c0,2.6,2.1,4.7,4.7,4.7h1.6c2.6,0,4.7-2.1,4.7-4.7V4.7C20.5,2.1,18.4,0,15.8,0z M15.6,5.6h-1.1V2.1h1.1V5.6z"/>
        <polygon points="14.7,27.4 11.4,23.8 11.6,23.6 14.7,26.9 17.7,23.6 18,23.8 "/>
        <polygon points="14.7,30 11.4,26.4 11.6,26.1 14.7,29.5 17.7,26.1 18,26.4 "/>
    </svg>
<?php } ?>

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
                <li<?php if($page == 'matiere') echo ' class="menu-active menu-expanded"' ?>>
                    <a href="Matiere-Water">Matières</a> <svg height="9" width="7"><use xlink:href="#symbol-chevron"></use></svg>
                    <!-- sub nav // displayed only on small screens -->
                    <ul>
                        <li<?php if($material == 'water') echo ' class="menu-active"' ?>><a href="Matiere-Water">Water</a></li>
                        <li<?php if($material == 'ice') echo ' class="menu-active"' ?>><a href="Matiere-Ice">Ice</a></li>
                        <li<?php if($material == 'meca') echo ' class="menu-active"' ?>><a href="Matiere-Meca">Meca</a></li>
                        <li<?php if($material == 'decor') echo ' class="menu-active"' ?>><a href="Matiere-Decor">Décor</a></li>
                        <li<?php if($material == 'sfx') echo ' class="menu-active"' ?>><a href="Matiere-SFX">SFX</a></li>
                    </ul>
                </li>
                <li<?php if(in_array($page, ['realisations', 'cas-client'])) echo ' class="menu-active"' ?>><a href="Realisations">Réalisations</a></li>
                <li<?php if($page == 'actualites') echo ' class="menu-active"' ?>><a href="Actualites">Actualités</a></li>
                <li<?php if($page == 'contact') echo ' class="menu-active"' ?>><a href="Contact">Contact</a></li>
            </ul>
            <p class="rHeader-nav-aside">
                <a href="Recherche" data-modal="#modal-search"><svg height="24" width="24"><use xlink:href="#symbol-search"></use></svg></a>
            </p>
            <button id="close-menu"><svg height="30" width="30"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
        </nav>
        <p class="switchlang"><a href="#" class="asidemenu-active">fr</a> / <a href="#">en</a></p>
        <button id="open-menu"><svg height="21" width="21"><use xlink:href="#symbol-menu"></use> </svg><span class="sr-only">Menu</span></button>
    </div>

    <!-- header: sub nav -->
    <?php
    if (in_array($page, ['identite', 'organisation', 'valeurs'])) {
        include_once('templates/_components/_submenu-presentation.php');
    }
    if ($page == 'matiere') {
        include_once('templates/_components/_submenu-material.php');
    }
    ?>
</header>

<!-- page markup -->
<?php require_once('templates/_pages/_' . $page . '.php');?>

<!-- footer -->
<?php require_once('templates/_components/_footer.php');?>

<!-- modals: showcase -->
<?php if (in_array($page, ['matiere', 'accueil'])) {?>
<div id="modal-showcase" class="modal" aria-hidden="true">
    <?php $dontstick = true; ?>
    <?php include_once('templates/_pages/_cas-client.php'); ?>
    <button class="modal-close" data-modal="#modal-showcase"><svg height="30" width="30"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
</div>
<?php } ?>

<!-- modals: search -->
<div id="modal-search" class="modal modal-search" aria-hidden="true">
    <?php include_once('templates/_pages/_recherche.php');?>
    <button class="modal-close" data-modal="#modal-search"><svg height="30" width="30"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
</div>

<!-- js -->
<script src="web/js/html5shiv.min.js"></script>
<script src="web/js/crystal.js"></script>

</body>
</html>
