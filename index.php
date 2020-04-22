<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" type="image/png" href="pics/icon/jeMePropose.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Accueil</title>
</head>

<body>
    <div id="container-mise-en-page">

        <div class="header-logo-title">
            <img src="pics/icon/jeMePropose.png" alt="je me propose logo" title="Site d'entraide">
            <h1>Je-me-propose.com</h1>
        </div>

        <header class="block-accueil">
            <?php include "source/header.php";  ?>

        </header>

        <article class="block-accueil">

            <p>Cliquez, Vivez, <span>Aidez</span>.</p>
            <div class="accueil-bg-opacity">
            </div>
        </article>
        <aside class="block-accueil">
            <div class="accueil-aside-flex-container">
                <figure>
                    <figcaption>Les arrondissements de la ville de Marseille</figcaption>
                    <img id="carte-region-de-france" src="pics/img/accueil-france-region.png" alt="carte région de france" title="Régions de France">
                </figure>
                <div class="accueil-liste-regions">
                    <p>Liste des régions de France:</p>
                    <ul>
                        <li>Auvergne-Rhône-Alpes</li>
                        <li>Bourgogne-Franche-Comté</li>
                        <li>Bretagne</li>
                        <li>Centre-Val de Loire</li>
                        <li>Corse</li>
                        <li>Grand Est</li>
                        <li>Hauts-de-France</li>
                        <li>Île-de-France</li>
                        <li>Normandie</li>
                        <li>Nouvelle-Aquitaine</li>
                        <li>Occitanie</li>
                        <li>Pays de la Loire</li>
                        <li>Provence-Alpes-Côte d'Azur</li>
                    </ul>
                </div>
            </div>
            <!--BLOCK EXPLAINATION 1-->
            <div class="block-people-care">
                <div class="people-care">
                <blockquote>"Prendre <span>soin de soi</span>, c'est aussi prendre <span>soin des siens</span>."</blockquote>
                    <img src="pics/img/old-people.png" alt="personne agées dessein" title="help world n people">
                </div>
            </div>
            <!--BLOCK EXPLAINATION 2-->
            <div class="block-people-care-2">
                <div class="people-care-50">
                    <img src="pics/img/maison.png" alt="maison" title="maisonnette">
                </div>
                <div class="people-care-50">
                    <p>Ne pas céder à l'isolement pour ne pas louper les bons moments et s'aider.</p>
                </div>
                <div class="people-care-50">
                    <img src="pics/img/isolement.png" alt="isolement" title="isolement">
                </div>
            </div>
        </aside>
        <footer class="block-accueil">
            <ul>
                <li><a href="">Accueil</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Aide</a></li>
            </ul>
        </footer>

    </div>

</body>

</html>