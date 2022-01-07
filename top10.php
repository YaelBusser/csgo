<!DOCTYPE html>
<html lang="fr">
    <?php
        include("head.php");
    ?>
    <body>
        <?php
            include("nav.php");
        ?>
        <h1 class="mx-auto p-5 bloc-welcome text-center">Meilleurs joueurs du monde en 2021</h1>
        <table class="table table-dark table-striped w-50 mx-auto mt-5 top10">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">Classement</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Pays</th>
                    <th scope="col">équipe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>S1mple</td>
                    <td><img src="images/ukraine.png" data-fancybox="gallery"></td>
                    <td>Na’Vi</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>ZyWoO</td>
                    <td><img src="images/france.png" data-fancybox="gallery"></td>
                    <td>Team Vitality</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>NiKo</td>
                    <td><img src="images/bosnie.svg" data-fancybox="gallery"></td>
                    <td>G2 Esports</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Sh1ro</td>
                    <td><img src="images/russie.png" data-fancybox="gallery"></td>
                    <td>Gambit Esports</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Device</td>
                    <td><img src="images/danemark.png" data-fancybox="gallery"></td>
                    <td>Astralis</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Electronic</td>
                    <td><img src="images/ukraine.png" data-fancybox="gallery"></td>
                    <td>Na’Vi</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Twistzz</td>
                    <td><img src="images/canada.jpg" data-fancybox="gallery"></td>
                    <td>FaZe Clan</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>huNter</td>
                    <td><img src="images/bosnie.svg" data-fancybox="gallery"></td>
                    <td>G2 Esports</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>B1T</td>
                    <td><img src="images/ukraine.png" data-fancybox="gallery"></td>
                    <td>Na’Vi</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Stavn</td>
                    <td><img src="images/danemark.png" data-fancybox="gallery"></td>
                    <td>Heroic</td>
                </tr>
            </tbody>
        </table>
        <?php 
            include("footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    </body>
</html>