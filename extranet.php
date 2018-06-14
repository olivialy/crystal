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
        <nav class="rHeader-user">
            <p>Bonjour Prénom Nom</p>
            <p><a href="#">Se déconnecter</a></p>
        </nav>
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


<!-- intro -->
<div class="wrap rExtranet pt4 pb4">
    <p class="rExtranet-logo align-center pb2"><img src="web/img/empty.jpg" width="230" height="120" alt="Logo client" /> </p>
    <div class="wrap-medium mt3">
        <h1 class="align-center">Nom de la société du client</h1>
        <p class="rExtranet-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est purus, sollicitudin a tortor vel, scelerisque viverra diam. <strong>Vivamus convallis enim nibh, eu finibus nibh lobortis non. Cras tristique viverra quam a fringilla. Quisque mi ex, interdum quis nulla et, malesuada pulvinar augue. Aliquam rhoncus nec augue ac efficitur</strong>. Sed tortor enim, feugiat quis tellus ac, iaculis fringilla massa. Nam facilisis quam quam, at molestie nulla hendrerit at. Etiam volutpat ornare elit, vel ullamcorper erat dapibus non. Mauris eu odio et odio rhoncus tristique. Aliquam a varius velit.</p>
    </div>
</div>

<!-- works -->
<section class="bg-grey pt3 pb4">
    <div class="wrap rExtranet align-center">
        <h2 class="pb1">Nos réalisations</h2>

        <!-- works -->
        <?php include_once('templates/_components/_works.php') ?>

        <!-- view all cta -->
        <p><a href="Realisations" class="cta">EN VOIR +</a></p>

    </div>
</section>


<!-- documents -->
<div class="wrap rExtranet pt2 pb9">
    <div class="wrap-medium mt3">
        <h2 class="pb1 align-center">Vos documents</h2>
        <div class="rExtranet-content">
            <table>
                <thead>
                    <tr>
                        <td>Nom du document</td>
                        <td>Description</td>
                        <td>Nom du fichier</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Nom du document">Lorem ipsum</td>
                        <td data-label="Description">Lorem ipsum</td>
                        <td data-label="Nom du fichier">Lorem-ipsum.pdf</td>
                        <td data-label="Action"><a href="#">Télécharger</a></td>
                    </tr>
                    <tr>
                        <td data-label="Nom du document">Lorem ipsum</td>
                        <td data-label="Description">Lorem ipsum</td>
                        <td data-label="Nom du fichier">Lorem-ipsum.pdf</td>
                        <td data-label="Action"><a href="#">Télécharger</a></td>
                    </tr>
                    <tr>
                        <td data-label="Nom du document">Lorem ipsum</td>
                        <td data-label="Description">Lorem ipsum</td>
                        <td data-label="Nom du fichier">Lorem-ipsum.pdf</td>
                        <td data-label="Action"><a href="#">Télécharger</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>



<!-- footer -->
<footer class="bg-grey pt1 pb3">
    <section class="wrap">
        <div class="wrap-medium align-center pl1 pr1 mb1">
            <!-- address -->
            <address class="pt1">
                <svg height="47" width="206"><use xlink:href="#symbol-logo"></use></svg>
                <p>1 rue Jean Perrin - ZI du Pont Yblon<br />
                    93150 Le Blanc Mesnil<br />
                    Tél : +33 (0) 1 48 65 12 20<br />
                    Fax : +33 (0) 1 48 65 14 92</p>
            </address>
        </div>
    </section>
</footer>

<!-- modals: showcase -->
<?php if (in_array($page, ['matiere', 'accueil'])) {?>
<div id="modal-showcase" class="modal" aria-hidden="true">
    <!--
        NB: right column must be sticky in page "Cas client"
        => we need to load it into an iframe to keep this behavior in a modal
    -->
    <iframe class="modal-iframe" src="iframe-cas-client.php"></iframe>
    <button class="modal-close" data-modal="#modal-showcase"><svg height="30" width="30"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
</div>
<?php } ?>

<!-- modals: search -->
<div id="modal-search" class="modal modal-centered" aria-hidden="true">
    <?php include_once('templates/_pages/_recherche.php');?>
    <button class="modal-close" data-modal="#modal-search"><svg height="30" width="30"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
</div>

<!-- modals: login -->
<div id="modal-login" class="modal modal-centered" aria-hidden="true">
    <?php include_once('templates/_pages/_login.php');?>
    <button class="modal-close" data-modal="#modal-login"><svg height="30" width="30"><use xlink:href="#symbol-close"></use> </svg><span class="sr-only">Fermer</span></button>
</div>

<!-- js -->
<script src="web/js/html5shiv.min.js"></script>
<script src="web/js/crystal.js"></script>

</body>
</html>
