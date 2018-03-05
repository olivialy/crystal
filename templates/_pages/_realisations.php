<?php $material = isset($_GET['material']) ? strtolower($_GET['material']) : null; ?>
<section id="works" class="mb6">
    <div class="cover cover-realisations mb2">
        <div class="cover-content">
            <h1>Réalisation</h1>
        </div>
    </div>

    <div class="wrap align-center">
        <h2 class="mb1">Choisissez une matière</h2>
        <ul class="worknav mb2">
            <li class="worknav-water<?php if ($material == 'water') echo " worknav-active" ?>"><a href="Realisations-Water"><svg height="95" width="95"><use xlink:href="#symbol-crystal-water"></use></svg></a></li>
            <li class="worknav-ice<?php if ($material == 'ice') echo " worknav-active" ?>"><a href="Realisations-Ice"><svg height="95" width="95"><use xlink:href="#symbol-crystal-ice"></use></svg></a></li>
            <li class="worknav-meca<?php if ($material == 'meca') echo " worknav-active" ?>"><a href="Realisations-Meca"><svg height="95" width="95"><use xlink:href="#symbol-crystal-meca"></use></svg></a></li>
            <li class="worknav-decor<?php if ($material == 'decor') echo " worknav-active" ?>"><a href="Realisations-Decor"><svg height="95" width="95"><use xlink:href="#symbol-crystal-decor"></use></svg></a></li>
            <li class="worknav-sfx<?php if ($material == 'sfx') echo " worknav-active" ?>"><a href="Realisations-SFX"><svg height="95" width="95"><use xlink:href="#symbol-crystal-sfx"></use></svg></a></li>
        </ul>

        <?php if ($material) {?>
        <div class="sectionnav sectionnav-<?php echo $material ?> mt2 mb2">
            <p class="sectionnav-title pt2">Cliquez sur un thème pour découvrir nos réalisations glace et givre</p>
            <ul>
                <li><a href="#">Tout</a> | </li>
                <li><a href="#">Animations</a> | </li>
                <li class="sectionnav-active"><a href="#">Arts de la table</a> | </li>
                <li><a href="#">Décors en givre</a> | </li>
                <li><a href="#">Décors en glace</a> | </li>
                <li><a href="#">Décors en neige</a> | </li>
                <li><a href="#">Ice bar</a> | </li>
                <li><a href="#">Identités visuelles</a> | </li>
                <li><a href="#">Mises en scène</a> | </li>
                <li><a href="#">Glisse </a></li>
            </ul>
        </div>
        <?php } ?>

    <!-- works -->
    <?php include_once('templates/_components/_works.php') ?>

    <!-- view all cta -->
    <p><a id="trigger-work-rows" href="Realisations/Tout" class="cta" data-maxindex="5" data-show="3">EN VOIR +</a></p>

    </div>
</section>
