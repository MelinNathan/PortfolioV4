<?php
include 'views/v_navbar.php';
?>


<div class="row">
    <div class="col-lg-6 my-4 mx-5">
        <canvas id="canvas" width="750" height="750"></canvas>


    </div>
    <div class="col-lg-5 mt-5">

        <h3 class="text-center"> Explication du Jeu de la vie de Conway :</h3>
        <p>
            Ce jeu à pour but de simuler la vie comme elles à pu exister au prémice des être vivants sur Terre
        </p>
        <p>
            Les cases blanches représentent des cellules vivantes.</br>
            les cases noires représentent des cellules mortes
        </p>


        <p>
            A chaque génération, on compte le nombre de voisines de chaque cellules. Cela decidera de la naissance, de
            le perennité ou la mort de chacune d'entre elles.
        </p>
        <ul>
            <li>Si la cellule à moins de 2 voisines elle meurt.</li>
            <li>Si la cellule à plus de 3 voisines, elle meurt. </li>
            <li> Si la cellule à 3 voisines, elle nait, elle devient vivante.</li>
            <li>Sinon, la cellule reste vivante ou morte.</li>
        </ul>

        <p>
            Cet ensemble de règles permettent parfois d'observer des formes se figer, se répéter ou même se déplacer.
        </p>

        <p>
            Ce jeu est dit à 0 joueur. Cela signifie que l'évolution du jeu ne dépend que de la configuration initial, celle que le joueur choisi.</br>
            Ce n'est pas totalement le cas ici car à l'initialisation de la grille, chaque cellules à une chance sur deux d'être vivantes. </br>
        </p>

        <p>
            Pour des raisons de performance, j'ai limité ce jeu à 250 générations.
        </p>

        <button id="reset">Start</button>
        <button id="stop">Stop</button>
        <p class="mt-3">Génération: <span id="labelNbGeneration">0</span></p>
    </div>
</div>

<?php include 'views/v_footer.php' ?>