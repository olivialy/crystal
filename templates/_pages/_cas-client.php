<div class="showcasehead">
    <div class="wrap">
        <p class="showcasehead-date">2016</p>
        <h1>La Forge aux étoiles</h1>
        <p class="showcasehead-place wrap-small">Futuroscope / Poitiers / France </p>
        <p class="showcasehead-title wrap-small">titre de la production</p>
    </div>
</div>

<section class="rGallery showcase wrap mb6">
    <div class="wrap-medium">
        <?php if (!isset($dontstick)) { ?>
        <ul class="rGallery-pager">
            <li class="rGallery-pager-back">
                <a href="Realisations">Revenir aux réalisations Glace / Givre</a>
            </li>
        </ul>
        <?php } ?>

        <!-- showcase description -->
        <div<?php if (!isset($dontstick)) echo ' id="showcase-sticky"'?> class="rGallery-detail showcase mt2">
            <h2>Matières</h2>
            <ul class="showcase-material">
                <li class="showcase-material-water">
                    <svg height="48" width="48">
                        <use xlink:href="#symbol-crystal-water"></use>
                    </svg>
                </li>
                <li class="showcase-material-meca">
                    <svg height="48" width="48">
                        <use xlink:href="#symbol-crystal-meca"></use>
                    </svg>
                </li>
                <li class="showcase-material-sfx">
                    <svg height="48" width="48">
                        <use xlink:href="#symbol-crystal-sfx"></use>
                    </svg>
                </li>
            </ul>

            <h2>Compétences</h2>
            <dl class="showcase-skills">
                <dt>Eau</dt>
                <dd>
                    <ul>
                        <li>écrans d’eau</li>
                        <li>rideaux d’eau</li>
                        <li>jets d’eau</li>
                        <li>moving jets</li>
                        <li>brouillard</li>
                    </ul>
                </dd>
                <dt>Meca</dt>
                <dd>bras mécanique</dd>
                <dt>SFX</dt>
                <dd>flammes</dd>
            </dl>

            <h2>Durée</h2>
            <p>Pérenne</p>

            <div class="showcase-detail pt1 mb2">
                <h2>Spectacle aquatique multimédias</h2>
                <p>L’Aquaféerie nocturne du Futuroscope imaginée par le Cirque du Soleil met en scène un impressionnant dispositif technique déployé sur le théâtre aquatique de 7000m2.</p>
                <p>A la demande du Cirque du Soleil, CG a réalisé l’étude, la conception et la fabrication :</p>
                <ul>
                    <li>des effets d’eau et de brume :
                        <ul>
                            <li>3 écrans d’eau et un rideau d’eau de 180 m² à 20 mètres en hauteur</li>
                            <li>100 jets dont 40 moving jets</li>
                            <li>600 buses pouvant générer 300 mètres cubes de brouillard</li>
                        </ul>
                    </li>
                    <li>des effets de feu :
                        <ul>
                            <li>20 dispositifs de flammes</li>
                        </ul>
                    </li>
                    <li>des dispositifs mécaniques
                        <ul>
                            <li>Un rail et un bras mécanique subaquatique pour actionner la 2 CV et la lune</li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

        <!-- image gallery -->
        <ul class="rGallery-images mt2">
            <li><img src="web/img/empty.jpg" height="320" width="600" alt="Titre de l'image"></li>
            <li><img src="web/img/empty.jpg" height="320" width="600" alt="Titre de l'image"></li>
            <li><img src="web/img/empty.jpg" height="320" width="600" alt="Titre de l'image"></li>
            <li><img src="web/img/empty.jpg" height="320" width="600" alt="Titre de l'image"></li>
            <li><img src="web/img/empty.jpg" height="320" width="600" alt="Titre de l'image"></li>
            <li><img src="web/img/empty.jpg" height="320" width="600" alt="Titre de l'image"></li>
            <li><img src="web/img/empty.jpg" height="320" width="600" alt="Titre de l'image"></li>
            <li><img src="web/img/empty.jpg" height="320" width="600" alt="Titre de l'image"></li>
        </ul>

        <?php if (!isset($dontstick)) { ?>
        <!-- pagination -->
        <ul class="rGallery-pager">
            <li class="rGallery-pager-previous">
                <a href="#"><span>Précédent</span>Titre cas client</a>
            </li>
            <li class="rGallery-pager-back">
                <a href="Realisations">Revenir aux réalisations Glace / Givre</a>
            </li>
            <li class="rGallery-pager-next">
                <a href="#"><span>Suivant</span>Titre cas client</a>
            </li>
        </ul>
        <?php } else { ?>
            <ul class="rGallery-pager">
                <li class="rGallery-pager-back">
                    <a href="Realisations" data-modal="#modal-showcase"><strong>Fermer</strong></a>
                </li>
            </ul>
        <?php }?>
    </div>
</section>