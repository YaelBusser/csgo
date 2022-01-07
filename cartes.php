<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Projet SLAM</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/main.scss" rel="stylesheet/scss" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php 
            include("nav.php");
        ?>
        <div class="container mx-auto w-50 mt-5 p-8 block-presentation">
            <p class="fs-5">Voici certaines cartes iconiques disponibles dans Counter-Strike: Global Offensive :</p>
            <p class="fs-6"><span>Dust 2, Inferno, Mirage, Nuke, Cache, Overpass, ...</span>.</p>
        </div>
        <div class="modes-block row gx-0 container mt-5 mx-auto w-50">
            <div class="col-xl-5 col-l-12 mt-5 card mr-auto-perso">
                <img src="images/dust2.jpg" data-fancybox="gallery" class="card-img-top" alt="Img dust 2">
                <div class="card-body">
                    <h5 class="card-title">Dust 2</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Il s'agit de la carte incontournable de chaque Counter-Strike et certainement la plus jouée. Le nombre de serveurs qui lui est dédié est tout simplement incalculable.
                        </div>  
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 card ml-auto-perso">
                <img src="images/inferno.jpg" data-fancybox="gallery" class="card-img-top" alt="Img ">
                <div class="card-body">
                    <h5 class="card-title">Inferno</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Les joueurs se retrouvent au milieu d'un village italien des plus pittoresque. Ils n'auront cependant pas le temps de l'admirer que le clocher que leurs têtes ressembleraient déjà à du gruyère.
                        </div>  
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 card mr-auto-perso">
                <img src="images/mirage.jpg" data-fancybox="gallery" class="card-img-top" alt="Img ">
                <div class="card-body">
                    <h5 class="card-title">Mirage</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Mirage est l'une des cartes les plus emblématiques de Counter-Strike.
                            Qu'on l'aime ou qu'on la déteste, son apprentissage est une étape obligatoire dans le mode compétitif et figure régulièrement sur la scène internationale.
                        </div>  
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 card ml-auto-perso">
                <img src="images/nuke.jpg" data-fancybox="gallery" class="card-img-top" alt="Img ">
                <div class="card-body">
                    <h5 class="card-title">Nuke</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Sur cette carte, l'action se déroule dans un complexe nucléaire défendu par les services britanniques.
                        </div>  
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 mb-5 card mr-auto-perso">
                <img src="images/cache.jpg" data-fancybox="gallery" class="card-img-top" alt="Img ">
                <div class="card-body">
                    <h5 class="card-title">Cache</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Cache est une nouvelle map de Counter Strike Global Offensive. La défense du middle est des plus importantes car le middle donne accès comme souvent au site A et B mais également au CT spawn ! 
                        </div>  
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 mb-5 card ml-auto-perso">
                <img src="images/overpass.jpeg" data-fancybox="gallery" class="card-img-top" alt="Img ">
                <div class="card-body">
                    <h5 class="card-title">Overpass</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Nouvelle map de cet opus de Counter Strike. Overpasse est une nouvelle fois une map CT sided. Une des dernières MAJ de cette map (agrandissement du BP A et blocage du pixelwalking des fnatic qui a fait couler tant d'encre.)
                        </div>  
                    </p>
                </div>
            </div>
        </div>
        <?php 
            include("footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    </body>
</html>