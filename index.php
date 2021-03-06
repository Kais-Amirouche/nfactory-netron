<?php
require('./src/inc/functions.php');
$title = 'Accueil';
include('./src/template/header.php');
?>
<section id="layout">
    <div class="background-rainbow"></div>
    <div class="layout-wrapper container">
        <div class="layout-text">
            <h1 class="layout-text-title">Infrastructure spécialisée dans l’analyse réseau</h1>
            <p class="layout-text-desc">Des millions d'entreprises de toutes tailles, des start-up aux grandes
                entreprises, utilisent nos plateformes d’analyse réseau.</p>
            <div class="layout-text-btn">
                <button class="btn btn-blue-primary" <?= (isLogged()) ? 'role="btn-dashboard"' : 'role="btn-modal-login"' ?>>Démarrer dès maintenant
                    <svg class="btn-arrow" width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
                        <g fill-rule="evenodd">
                            <path class="btn-arrow-line" d="M0 5h7"></path>
                            <path class="btn-arrow-tip" d="M1 1l4 4-4 4"></path>
                        </g>
                    </svg>
                </button>
                <a class="btn btn-transparent" href="./contact.php">Contacter notre équipe
                    <svg class="btn-arrow" width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
                        <g fill-rule="evenodd">
                            <path class="btn-arrow-line" d="M0 5h7"></path>
                            <path class="btn-arrow-tip" d="M1 1l4 4-4 4"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <div class="layout-mockup">
            <img class="layout-mockup-img" src="assets/img/layout-mockup.png" alt="Layout Mockup">
        </div>
    </div>
    <div class="layout-partners container">
        <a href="https://campus-saint-marc.com/" class="layout-partners-link" target="_blank" rel="noopener noreferrer">
            <img class="layout-partners-img" src="./assets/img/campus.png" alt="Logo Partner Campus Saint Marc ">
        </a>

        <a href="https://onruntime.com/" class="layout-partners-link" target="_blank">
            <img class="layout-partners-img" src="https://cdn.onruntime.com/img/logo/logo.png" alt="Logo Partner onRuntime">
        </a>
        <a href="https://nfactory.school/" class="layout-partners-link" target="_blank" rel="noopener noreferrer">
            <img class="layout-partners-img" src="./assets/img/nfactoy.png" alt="Logo Partner NFactory School" style="
                transform: scale(.5);">
        </a>
    </div>
</section>
<section id="preview">
    <div class="background-blue-primary"></div>
    <div class="preview-wrapper container">
        <div class="preview-text">
                <h3 class="preview-text-tag">Conçue pour vous</h3>
                <h1 class="preview-text-title">Une solution simple d'utilisation</h1>
                <p class="preview-text-desc">
                    Analyser des trames réseaux sur notre site internet plutôt qu'un logiciel tiers
                    est un bon choix, car nous axons notre espace client sur la simplicité et la facilité de
                    compréhension de vos infrastructures réseaux.
                </p>
                <div class="preview-text-btn">
                    <a class="btn btn-blue-secondary" href="./about.php">En savoir plus
                        <svg class="btn-arrow" width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
                            <g fill-rule="evenodd">
                                <path class="btn-arrow-line" d="M0 5h7"></path>
                                <path class="btn-arrow-tip" d="M1 1l4 4-4 4"></path>
                            </g>
                        </svg>
                    </a>
                </div>
        </div>
        <div class="preview-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(assets/img/home-tree.png)">
                    </div>
                    <div class="swiper-slide" style="background-image:url(assets/img/home-graph.png">
                    </div>
                    <div class="swiper-slide" style="background-image:url(assets/img/home-account-user.png)">
                    </div>
                    <div class="swiper-slide" style="background-image:url(assets/img/home-tram.png">
                    </div>     
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<section id="video-preview">
    <div class="video-wrapper container">
        <video class="video-item" autoplay playsinline muted loop>
            <source src="./assets/media/dashboard-preview-desktop.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <button class="btn btn-blue-primary" <?= (isLogged()) ? 'role="btn-dashboard"' : 'role="btn-modal-login"' ?>>Commencer l'experience maintenant
            <svg class="btn-arrow" width="10" height="10" viewBox="0 0 10 10" aria-hidden="true">
                <g fill-rule="evenodd">
                    <path class="btn-arrow-line" d="M0 5h7"></path>
                    <path class="btn-arrow-tip" d="M1 1l4 4-4 4"></path>
                </g>
            </svg>
        </button>
    </div>
</section>
<?php include('./src/template/footer.php');
