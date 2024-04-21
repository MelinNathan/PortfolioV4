<?php
// include './controllers/Math.php';
include 'views/navbar.php';



// echo Math::facto(7);
echo Math::facto(intval(5));
echo '</br>';
echo Math::power(7, 2);
echo '</br>';
echo Math::choose(8, 3);
?>
<form method="POST" action="index.php?page=projet&sub=math">

    <label for="facto">Factoriel :</label>
    <input type="radio" name="type" id="facto" value="facto" />
    <label for="power">Puissance :</label>
    <input type="radio" name="type" id="power" value="power" />
    <label for="choose">Combinaison :</label>
    <input type="radio" name="type" id="choose" value="choose" />

    </br>
    <label for="k">Valeur de k : </label>
    <input id="k" name="k" type="number" />
    </br>
    <label for="n">Valeur de n : </label>
    <input id="n" name="n" type="number" />
    </br>
    <label for="p">Valeur de p : </label>
    <input id="p" name="p" type="number" />


    <p>Votre résultat est <?= $result ?></p>


    <input type="submit" />
</form>