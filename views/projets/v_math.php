<?php
include 'views/v_navbar.php';



// echo Math::facto(7);
// echo Math::facto(intval(5));
// echo '</br>';
// echo Math::power(7, 2);
// echo '</br>';
// echo Math::choose(8, 3);
?>

<div class="container">
    <form method="POST" action="index.php?page=projet&sub=math" id="mathForm">



        <input type="radio" name="type" id="reset" value="reset" checked />
        <label for="reset">Default</label>
        </br>
        <input type="radio" name="type" id="facto" value="facto" />
        <label for="facto">Factoriel</label>
        </br>
        <input type="radio" name="type" id="power" value="power" />
        <label for="power">Puissance</label>
        </br>
        <input type="radio" name="type" id="choose" value="choose" />
        <label for="choose">Combinaison</label>
        </br>
        <input type="radio" name="type" id="bernoulli" value="bernoulli" />
        <label for="bernoulli">Bernoulli</label>





        <div class="row d-flex justify-content-center">

            <div class="col-lg-4">
                <label id="labelN" for="n">Valeur de n : </label>
                <input id="n" name="n" type="number" step="0.01" require />
            </div>
            <div class="col-lg-4">
                <label id="labelP" for="p">Valeur de p : </label>
                <input id="p" name="p" type="number" step="0.000000000000000001" require />
            </div>
                        <div class="col-lg-4">
                <label id="labelK" for="k">Valeur de k : </label>
                <input id="k" name="k" type="number" step="0.01" require />
            </div>
        </div>
        <h2 class="m-3"> <?= isset($result) ? 'Votre résultat est ' . $result : '' ?> </h2>


        <h3 class="" id="description"></h3>
        <h3 class="p-2" id="calcul"></h3>

        <input type="submit" />
    </form>
</div>



<?php include 'views/v_footer.php' ?>