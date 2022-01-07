<!DOCTYPE html>
<html lang="fr">
    <?php
        include("head.php");
    ?>
    <body>
        <?php 
            include("nav.php");
        ?>
        <div class="container mx-auto w-50 mt-5 p-8 block-presentation">
            <p class="fs-5">Le jeu est divisé en neuf modes, qui sont les suivants : </p>
            <p class="fs-6"><span>Occasionnel, Démolition, Match à mort par équipe, Course à l'armement, Zone de Danger, «  retakes », Compétitif et Wingman</span>.</p>
        </div>
        <div class="modes-block row gx-0 container mt-5 mx-auto w-50">
            <div class="col-xl-5 col-l-12 mt-5 card mr-auto-perso">
                <img src="images/ranks.jpeg" data-fancybox="gallery" class="card-img-top" alt="Img Démolition">
                <div class="card-body">
                    <h5 class="card-title">Compétitif</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Ce mode est destiné aux joueurs confirmés, connaissant déjà bien les principes du jeu, et ayant la volonté de s'investir au maximum dans la partie pour garantir la victoire à leur équipe.
                        </div>  
                        <button type="button" class="mx-auto d-block btn btn-info btn-primary text-uppercase" data-bs-toggle="collapse" data-bs-target="#compet">en savoir plus</button>
                        <div id="compet" class="collapse text-justify">
                            <p>Les cartes disponibles pour ce mode sont : de_dust2, de_nuke, de_overpass, de_inferno, de_cache, de_mirage, de_train, de_vertigo,de_ancient, cs_agency, et cs_office accompagné de cartes temporaires, comme de_basalt et cs_insertion2.</p>
                            <p>Contrairement au mode Occasionnel, le tir ami et la collision sont activés.</p>
                            <p>Chaque joueur commence avec 800 $ et peut accumuler jusqu'à 16 000 $. L'armure et le kit de désamorçage doivent être achetés.</p>
                            <p>Le nombre de manches est limité à 30, sans prolongation en cas d'égalité. Changement de camp à la fin de la 15e manche.</p>
                            <p>Une file d'attente est prévue avant le commencement de la partie. Elle permet de sélectionner des joueurs approximativement de même niveau et dans une zone géographique la plus petite possible. Cela évite à certains joueurs de se retrouver avec une latence trop importante, ce qui les désavantagerait.</p>
                            <p>Il existe un système de rangs qui ne concerne que les modes Compétitif et Wingman. Ils sont destinés à classer les joueurs selon leur niveau, et ce en fonction des résultats qu'ils obtiennent pendant leurs matchs. Il faut au minimum 10 victoires en Compétitif pour obtenir un rang (avant d'avoir un rang vous serez pénalisés toutes les deux victoires en mode compétitif). Plus un joueur fait de matchs (de préférence régulièrement), et plus le rang est fiable 4. Malgré cela, il persiste de joueurs utilisant des cheats (logiciels de triche) et ce qu'on appelle des "smurfs", deuxième compte de joueurs ayant pour but d'avoir un rang plus bas que celui de son premier compte, afin d'avoir plus de chances de gagner, et aussi de se payer la tête des joueurs aux rangs bas.</p>
                            <p>il existait un mode secondaire au mode compétitif appelé Scrimmage, qui permettait de jouer sur des cartes compétitives temporaires n'impactant pas les rangs. Il a été remplacé par une mise à jour le 3 juin 2021, par un nouveau mode Unranked aux propriétés similaires. La seule différence étant la possibilité de jouer à ce mode sur les mêmes cartes que le mode compétitif.5</p>
                            <p>Enfin, il existe un système de pénalité en cas de déconnexion d'un joueur pendant la partie, après trois minutes de temps disponible pour se reconnecter. En effet, si un joueur quitte et abandonne une partie en mode Compétitif avant la fin de cette dernière, il reçoit un time-out (une période durant laquelle il ne peut plus jouer en Compétitif). Ceci a été mis en place afin de garantir l'aspect compétitif de ce mode. Un avertissement sur cet engagement à finir une partie commencée est affiché au joueur pendant le temps d'attente.</p>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-sm-12 mt-5 card ml-auto-perso">
                <img src="images/oca.jpg" data-fancybox="gallery" class="card-img-top w-100" alt="Img Occasionnel">
                <div class="card-body">
                    <h5 class="card-title">Occasionnel</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Il s'agit du mode original de Counter-Strike. Dans Global Offensive, il est composé lui-même de deux modes, qui sont l'Occasionnel et le Compétitif.
                        </div>  
                        <button type="button" class="mx-auto d-block btn btn-info btn-primary text-uppercase" data-bs-toggle="collapse" data-bs-target="#oca">en savoir plus</button>
                        <div id="oca" class="collapse">
                            <p>Le fonctionnement de base est identique aux autres versions de Counter-Strike : les joueurs sont divisés en deux équipes, les terroristes et les antiterroristes.</p>
                            <p>Les conditions de victoire et objectifs dépendent du type de carte jouée. En mode Scénario Bombe, les terroristes doivent poser une bombe et la faire exploser ou bien éliminer la totalité des antiterroristes. Les antiterroristes doivent, eux, empêcher les terroristes de poser la bombe durant le temps de la manche, la désamorcer si elle parvient à être posée ou éliminer tous les terroristes. À noter que si les antiterroristes ont éliminé tous les terroristes, mais que la bombe, si elle a été posée, n'est pas désamorcée et explose, la victoire revient aux terroristes. Dans le mode Scénario Prise d'Otages, les terroristes doivent retenir les antiterroristes pendant le temps de la manche ou bien éliminer tous leurs adversaires. Les antiterroristes doivent eux, secourir au moins un otage pendant le temps de la manche ou bien éliminer l'équipe des terroristes.</p>
                            <p>Chaque partie est jouée en plusieurs manches. Le nombre de manche est variable selon le mode joué. En Occasionnel, il s'agit de 15 manches maximum, la première équipe à gagner 8 manches l'emporte. En Compétitif, il s'agit de 30 manches, l'équipe gagnant 16 manches l'emporte, mais le match se termine par une égalité (15-15) si aucune des deux équipes n'a atteint 16 à la fin de la 30e manche.</p>            
                            <p>À noter que lors des compétitions officielles, il est courant (mais pas systématique) d'utiliser les prolongations pour déterminer un vainqueur en cas de 15-15. Il s'agit dans ce cas d'une nouvelle série de 6 manches, sur la même carte, le premier à gagner 4 manches remporte le match. Le processus est répété autant de fois que nécessaire en cas de nouvelle égalité.</p>
                            <p>En mode Compétitif, Démolition et Wingman, les équipes changent de camp (les antiterroristes deviennent terroristes et vice-versa) à chaque moitié de partie et à chaque moitié de prolongation le cas échéant. Cela se produit donc à la fin de la 15e manche, à la fin de la 10e manche (Démolition), à la fin de la 8e manche (Wingman) ainsi qu'à la fin de la 3e manche de chaque prolongation.</p>
                            <p>Les joueurs commencent chaque manche avec un couteau et un pistolet (pistolet qui diffère en fonction du camp dans lequel ils jouent). Ils peuvent acheter des armes avec de l'argent qu'ils gagnent en fonction de leurs actions dans le jeu, ainsi qu'à chaque fin de manche. Ils peuvent aussi récupérer l'arme principale et une grenade (la plus chère détenue) de l'adversaire tué. Un joueur peut porter un maximum de deux armes à feu, une arme primaire (fusils et autres) et une arme secondaire (pistolets). Le joueur peut également acheter des grenades de différents types, ainsi qu'une armure (complète ou partielle) et un kit de désamorçage (pour les antiterroristes). Certaines armes ne peuvent être achetées que par les terroristes, et vice versa.</p>
                            <p>Une fois qu'un joueur meurt, il ne peut plus participer à la manche, mais peut observer ses coéquipiers. Tous les joueurs réapparaissent au début de chaque manche.
                            <p>Lors d'une partie, les joueurs sont habituellement au nombre de 10 (5 contre 5). Depuis la mise à jour du 1er janvier 2021, les joueurs quittant une partie — peu importe comment (exclusion, déconnexion) — ne sont désormais plus remplacés par des bots, et l'équipe reste donc en 4 contre 5.</p>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 card mr-auto-perso">
                <img src="images/demo.jpg" data-fancybox="gallery" class="card-img-top" alt="Img Démolition">
                <div class="card-body">
                    <h5 class="card-title">Démolition</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Un mode spécifique à Counter-Strike: Global Offensive. Il se joue également à 5 contre 5, sur des cartes de type "Defuse" créées spécialement pour ce mode. 
                        </div>  
                        <button type="button" class="mx-auto d-block btn btn-info btn-primary text-uppercase" data-bs-toggle="collapse" data-bs-target="#dem">en savoir plus</button>
                        <div id="dem" class="collapse text-justify">
                            <p>L'objectif pour les terroristes est de faire exploser la bombe, et pour les antiterroristes de la désamorcer, mais le fonctionnement des armes et équipements est différent du mode Classique. Les cartes disponibles pour ce mode sont : de_lake, de_sugarcane, de_safehouse, de_bank, de_stmarc et de_shorttrain.</p>
                            <p>Aucun achat ne peut être fait dans ce mode. Une arme et un couteau sont donnés à chaque joueur au début de chaque manche. L'arme reçue dépend d'une liste de 10 armes imposées, liste qui diffère légèrement en fonction du camp dans lequel le joueur se trouve. Chaque joueur ne dispose que d'une seule arme à feu. Les joueurs ne peuvent pas lâcher leur arme, et lorsqu'un joueur meurt, son arme disparaît, il est donc impossible de récupérer une autre arme que celle imposée par la liste.</p>
                            <p>Lorsqu'un joueur tue un adversaire, il passe à l'arme suivante à la prochaine manche. S'il tue plus d'un adversaire, il dispose d'une grenade aléatoire à la prochaine manche. La liste suit un ordre spécifique, les joueurs savent donc quelle arme ils auront à la prochaine manche (dans le cas où ils tuent quelqu'un). S'ils ne font aucune victime pendant la manche, ils conserveront leur arme actuelle à la manche suivante.</p>
                            <p>La partie se déroule en 20 manches, la première équipe à gagner 11 manches remporte le match. Il n'y a pas de prolongation en cas d'égalité. Le changement de camp s'opère à la fin de la 10e manche.</p>
                            <p>Les joueurs sont tous équipés d'une armure complète (ainsi que d'un kit de désamorçage pour les antiterroristes) au début de chaque manche. Le tir ami est désactivé ainsi que la collision entre joueurs. Des bots viendront compléter la partie s'il y a moins de 10 joueurs.</p>
                            <p>Les terroriste doivent se rendre sur la zone A, B (ou sur certaine carte C) et poser la bombe (la C4) après que la bombe soit posée elle explosera dans 40 secondes. Il faut s’éloigner de la bombe pour pas que vous mourez (les antiterroristes peuvent être tuée en la désamorçant).</p>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 card ml-auto-perso">
                <img src="images/armement.jpg" data-fancybox="gallery" class="card-img-top" alt="Img Démolition">
                <div class="card-body">
                    <h5 class="card-title">Course à l'armement</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Déjà présent sur les anciennes versions de Counter-Strike. Il n'existe pas de notion d'équipe dans ce mode, bien que les camps terroristes et antiterroristes soient toujours présents.
                        </div>  
                        <button type="button" class="mx-auto d-block btn btn-info btn-primary text-uppercase" data-bs-toggle="collapse" data-bs-target="#courseArm">en savoir plus</button>
                        <div id="courseArm" class="collapse text-justify">
                            <p>Le but, pour chaque joueur, est de parcourir la liste des armes imposées en tuant un adversaire avec chacune d'entre elles. La dernière arme est le couteau d'or, et permet au joueur qui fait une victime avec de gagner la partie. Les cartes disponibles pour ce mode sont : ar_monastery, ar_shoots, ar_baggage et ar_safehouse.</p>
                            <p>Les armes et l'ordre des armes sont les mêmes pour tous les joueurs. Une seule arme à feu disponible à la fois, ainsi que le couteau normal. À l'exception du fait qu'il soit doré et accorde la victoire en cas de frag, le couteau d'or se comporte exactement comme un couteau normal, et inflige les mêmes dommages.</p>
                            <p>Lorsqu'un joueur élimine deux adversaires ou le premier de l'équipe ennemie, il passe à l'arme suivante instantanément. Si un joueur tue plusieurs adversaires avec une seule balle de son arme, il saute une arme. Si un joueur meurt par suicide (chute par exemple), ou est tué à l'aide du couteau normal, il retourne à l'arme précédente.</p>
                            <p>Il y a 16 armes à utiliser, couteau d'or inclus. Le tir ami et la collision sont désactivé. La partie se joue à 10 joueurs. Des bots viendront compléter la partie s'il y a moins de 10 joueurs.</p>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 card mr-auto-perso">
                <img src="images/matchamort.jpg" data-fancybox="gallery" class="card-img-top" alt="Img Démolition">
                <div class="card-body">
                    <h5 class="card-title">Match à mort</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Il n'existe pas de notion d'équipe dans ce mode, bien que les camps terroristes et antiterroristes soient toujours présents. Chaque joueur doit tuer un plus grand nombre d'adversaire afin de gagner des points.
                        </div>  
                        <button type="button" class="mx-auto d-block btn btn-info btn-primary text-uppercase" data-bs-toggle="collapse" data-bs-target="#matchMort">en savoir plus</button>
                        <div id="matchMort" class="collapse text-justify">
                            <p>Le joueur avec le plus de points à la fin du temps imparti gagne. Les cartes disponibles pour ce mode sont :de_dust2, de_nuke, de_aztec, de_inferno, de_vertigo, de_train, cs_office, cs_italy, cs_assault, de_lake, de_sugarcane, de_safehouse, de_bank, de_stmarc et de_shorttrain.</p>
                            <p>Il n'y a pas d'argent dans ce mode. Cependant, les achats d'armes peuvent être faits normalement (pas de grenade ou d'équipement), et ce sans limite de budget. En début de partie et après chaque mort, le joueur reçoit une arme principale aléatoire et une arme secondaire aléatoire (cette option peut être désactivée en pressant la touche f3). Les joueurs sont ressuscités immédiatement après leur mort. Ils sont ressuscités aléatoirement sur la carte et disposent d'une période d'invulnérabilité à chaque résurrection. Pendant cette période, ils peuvent acheter n'importe quelle arme ou pistolet, si ceux dont ils disposent ne leur conviennent pas.</p>
                            <p>Régulièrement durant la partie, des périodes bonus limitées dans le temps surviennent. Elles affichent le nom d'une arme ou d'un pistolet aléatoirement choisi, ainsi que le nombre de points bonus. Chaque adversaire tué grâce à cette arme accorde le nombre de points bonus affiché.</p>
                            <p>Le tir ami est désactivé. Ce mode se joue habituellement à 10 joueurs. Des bots viendront compléter la partie s'il y a moins de 10 joueurs.</p>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 card ml-auto-perso">
                <img src="images/wingman.png" data-fancybox="gallery" class="card-img-top" alt="Img Démolition">
                <div class="card-body">
                    <h5 class="card-title">Wingman</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Ce mode est destiné aux débutants ainsi qu'aux joueurs confirmés et se joue en 2 contre 2 sur des cartes compactes. C'est un mode compétitif sur des cartes de types "defuse" en 9 manches gagnantes, soit 16 manches maximum.
                        </div>  
                        <button type="button" class="mx-auto d-block btn btn-info btn-primary text-uppercase" data-bs-toggle="collapse" data-bs-target="#wingman">en savoir plus</button>
                        <div id="wingman" class="collapse text-justify">
                            <p>Tout comme pour le mode compétitif, il n'y a pas de mode otage et il y a un rang spécifique allant d'Argent 1 à Elite mondiale.</p>
                            <p>Les cartes pour ce mode de jeu sont très limitées, elles sont optimisées pour le 2 contre 2 donc se jouant sur un seul objectif, contraire au mode compétitif de base. Les cartes sont : Inferno, Shortdust, Cobblestone, Overpass, Train, Guard, Elysion, Lake, Nuke, Vertigo, ainsi que plus récement Calavera et Pitstop. Chaque joueur commence avec 800 $ et peut accumuler jusqu'à 8 000 $. L'armure et le kit de désamorçage doivent être achetés.</p>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 mb-5 card mr-auto-perso">
                <img src="images/dangerZone.png" data-fancybox="gallery" class="card-img-top" alt="Img Démolition">
                <div class="card-body">
                    <h5 class="card-title">Danger Zone</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Ce mode a été ajouté le 6 décembre 2018 lors de la mise à jour Free to play du jeu6. Il s'agit d'un mode 'battle royale' où les joueurs s'affrontent sur 3 cartes: Blacksite, Sirocco et Frostbite .                        </div>  
                        <button type="button" class="mx-auto d-block btn btn-info btn-primary text-uppercase" data-bs-toggle="collapse" data-bs-target="#dangerZone">en savoir plus</button>
                        <div id="dangerZone" class="collapse text-justify">
                            <p>Les parties en solitaire débutent avec 16 joueurs tandis que les parties en duo ou en trio sont jouées avec jusqu'à 18 participants7.</p>
                            <p>Au début de la partie, les joueurs doivent sélectionner sur la carte où ils souhaitent être héliportés et sélectionner un bonus. Lorsque tous les joueurs ont décidé, ils sont parachutés au-dessus de l'emplacement choisi. Ils doivent ensuite chercher des armes, munitions et de l'équipement en se baladant sur la carte dans le but de s’entre-tuer jusqu'à ce qu'il ne reste qu'une seule équipe survivante. La zone jouable se réduit progressivement au fil de la partie et les joueurs se trouvant en dehors de cette zone se voient infliger des dégâts, les obligeants à se déplacer jusqu'à la zone jouable afin de ne pas mourir.</p>
                            <p>Le mode conserve la nécessité de prendre des décisions monétaires typiques de Counter-Strike. Les joueurs accumulent de l'argent en récupérant les liasses de billets réparties sur la carte, en transportant des otages jusqu'à une des zones d'extraction, exécuter une cible prioritaire. Les sommes accumulées permettent aux joueurs d'acheter des armes, équipements et soins via leur tablette électronique. Les objets achetés sont ensuite délivrés par drones qui peuvent être interceptés par d'autres joueurs.</p>
                            <p>La tablette permet également d'accéder à la carte, divisée en tuiles hexagonales. Les tuiles deviennent rouges lorsqu'elles sont hors de la zone de jeu et jaunes si au moins un joueur s'y trouve. Une ligne rouge est affichée pour indiquer la prochaine restriction de zone jouable tandis qu'un trait bleu prévient le joueur du trajet que ses drones sont en train de faire pour lui apporter ses achats.</p>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-l-12 mt-5 mb-5 card ml-auto-perso">
                <img src="images/retake.jpg" data-fancybox="gallery" class="card-img-top" alt="Img Démolition">
                <div class="card-body">
                    <h5 class="card-title">Reprise de contrôle</h5>
                    <p class="card-text">
                        <div class="text-justify">
                            Dans ce mode, 3 terroristes affrontent 4 antiterroristes. La bombe est amorcée dès le début de la manche sur un site choisi aléatoirement, et les terroristes doivent la défendre de l'équipe adverse jusqu'à son explosion ou l'anéantissement d'une équipe.
                        <button type="button" class="mx-auto d-block btn btn-info btn-primary text-uppercase" data-bs-toggle="collapse" data-bs-target="#retake">en savoir plus</button>
                        <div id="retake" class="collapse text-justify">
                            <p>Cependant, contrairement au mode classique, les joueurs n'achètent pas d'arme ou de matériel avec de la monnaie acquise au cours des manches, mais choisissent leur équipement parmi plusieurs "cartes d'équipement" proposées. Celles-ci contiennent une arme et parfois une ou deux grenades, et pour améliorer ses cartes, il faut être MVP ("Most Valuable Player", le meilleur joueur de la manche). L'équipement ne peut être conservé entre deux manches. Une partie est composée de 15 manches (sans changement d'équipe comme en mode compétitif), il faut donc remporter 8 manches pour la gagner. Il n'y a pas de scénario de prise d'otage dans ce mode, ni de tir allié.</p>
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