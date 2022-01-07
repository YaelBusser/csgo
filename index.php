<?php
    if(isset($_GET["msg"]) && $_GET["msg"] == 1){
        $_GET["msg"] = 0;
        echo "<script>alert('Votre message a bien été envoyé !');</script>";
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <?php
        include("head.php");
    ?>
    <body>
        <?php
            include("nav.php");
            ?>
        <div class="container-fluid mx-auto p-5 bloc-welcome">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Bienvenue</h1>
                    <p class="text-center">Sur ce site web nous vous présenterons un des jeux-vidéos les plus compétitifs au monde !</p>
                </div>
            </div>
        </div>
        <div class="container mx-auto w-50 mt-5 p-8 block-presentation">
            <p>Counter Strike: Global Offensive (CSGO) est un FPS en ligne développé par <span>Valve</span> et disponible sur <span>Steam</span>.</p> 
            <p>Il est sorti le <span>21 août 2012</span> sur PC et console.</p>
            <p>Ce jeu est la suite de <span>CS 1.6</span> et de <span>CS: Source</span>.</p>
            <p>C’est un jeu où la cohésion de l’équipe est la clé.</p>
            <p>Le jeu oppose deux équipes : les terroristes (T) et les contre-terroristes (CT) sur différentes cartes proposant plusieurs scénarios jouables dans différents <a href="mode.html"><span>mode de jeu</span></a>.</p>
        </div>
        <div class="video-block mx-auto mt-5">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/edYCtaNueQY" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- Carousel Actualités -->
        <div class="container mt-5 mx-auto w-50">
            <div id="carouselAcutalite" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselAcutalite" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselAcutalite" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselAcutalite" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner text-uppercase">
                    <h1>Actualités</h1>
                    <div class="carousel-item active">
                        <a href="https://www.vakarm.net/news/read/shox-debarque-chez-Team-Liquid/10725" target="_blank"><img src="images/shox.jpg" alt="First slide"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <p class="fs-2">Shox débarque chez Team Liquid !</p>
                            <p>À 29 ans, shox se lance dans une nouvelle aventure, sans doute pas la plus simple.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="https://www.vakarm.net/news/read/FaZe-s-offre-le-talent-de-ropz/10730" target="_blank"><img src="images/ropz.jpg" alt="Second slide"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <p class="fs-2">FaZe s'offre le talent de ropz !</p>
                            <p>Il est arrivé chez MOUZ comme un jeune talent de la FPL, il en repart comme l'un des meilleurs rifle du monde.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="https://www.vakarm.net/news/read/coldzera-rejoint-00Nation/10732" target="_blank"><img src="images/coldzera.jpg" alt="Third slide"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <p class="fs-2">coldzera rejoint 00Nation</p>
                            <p>Un changement de prestige qui pourrait en appeler d'autres !</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselAcutalite" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carouselAcutalite" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </div>
        <!-- Début formulaire de contact -->
        <form action="contact.php" method="POST" class="contact-form">
            <div class="contact" id="contact">
                <h2>Contact</h2>						
                <div class="flex-column contact-element">
                    <div class="flex contact-element-form">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder=" Veuillez renseigner votre nom..." required>
                    </div>
                    <div class="flex contact-element-form">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="input-email" placeholder=" Veuillez renseigner votre email..." required>
                    </div>
                    <div class="flex contact-element-form">
                        <label for="msg">Message</label>
                        <textarea name="msg" id="msg" placeholder=" Veuillez renseigner votre message..." required></textarea>
                    </div>
                    <div class="flex contact-element-form">		
                        <label></label>
                        <input type="submit" value="Envoyer">
                    </div>
                </div>
            </div>	
        </form>
        <!--Fin formulaire de contact-->
        <?php 
            include("footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    </body>
</html>