<?php
include 'views/v_navbar.php';



// echo Math::facto(7);
// echo Math::facto(intval(5));
// echo '</br>';
// echo Math::power(7, 2);
// echo '</br>';
// echo Math::choose(8, 3);
?>

<form method="POST" action="index.php?page=projet&sub=math" id="mathForm">


    <div class="radio-button">
        <input type="radio" name="type" id="facto" value="facto" />
        <label for="facto">Factoriel</label>
    </div>

    <div class="radio-button">
        <input type="radio" name="type" id="power" value="power" />
        <label for="power">Puissance</label>
    </div>

    <div class="radio-button">
        <input type="radio" name="type" id="choose" value="choose" />
        <label for="choose">Combinaison</label>
    </div>

    <div class="radio-button">
        <input type="radio" name="type" id="reset" value="reset" />
        <label for="reset">Reset</label>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-lg-4">
            <label id="labelK" for="k">Valeur de k : </label>
            <input id="k" name="k" type="number" />
        </div>
        <div class="col-lg-4">
            <label id="labelN" for="n">Valeur de n : </label>
            <input id="n" name="n" type="number" />
        </div>
        <div class="col-lg-4">
            <label id="labelP" for="p">Valeur de p : </label>
            <input id="p" name="p" type="number" />
        </div>
    </div>
    <p> <?= isset($result) ? 'Votre résultat est ' . $result : '' ?> </p>

    <input type="submit" />
</form>



<?php include 'views/v_footer.php' ?>