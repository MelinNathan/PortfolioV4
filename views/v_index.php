<!-- navbar + doctype -->
<?php include 'views/v_navbar.php' ?>


<div class="mt-3 d-flex justify-content-center">
    <h1>Bienvenue sur mon portfolio</h1>
</div>


<p class="index_intro">Je m'appelle Nathan Melin</p>



<div class="row">
    <div class="col-lg-1"> &nbsp; </div>
    <div class="col-lg-3 py-5 px-3 index_presentation  light-block">
        <p class="">J'ai <?= $age ?> ans </p>
        <p class="">Je suis en BTS Services Informatiques aux Organisations option
            développemnt Web et Logiciel</p>
    </div>
    <div class="col-lg-4"> &nbsp; </div>
    <div class=" col-lg-3 py-5 px-3  light-block">
        <p class="index_statut"> <strong>Statut :</strong> </br><?= $statut ?></p>
    </div>
    <div class="col-lg-1"> &nbsp; </div>
</div>

<div class="row">
    <div class="col-lg-1"> &nbsp; </div>
    <div class="col-lg-3 py-5 px-3 index_apprentissage light-block">
        <h5 class="">Ce que je suis en train d'apprendre et pourquoi :</h5>
        <ul>
            <?php 
            foreach ($pendingLearning as $line){
                $libelle = $line['libelle'];
                $raison = $line['raison'];
                ?>
                <li> <strong><?=$libelle?></strong> : </br><?= $raison ?></>

           <?php }
            ?>
        </ul>
        <h5 class="">Je maîtrse déja :   </h5>
        <button class="dark-block"><a class="nav-link" href="index.php?page=skill">Ces compétences</a></button>
    </div>

    
</div>

<?php include 'views/v_footer.php' ?>