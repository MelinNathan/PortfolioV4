<?php

class Math
{
    public function handleRequest()
    {
        $k = (isset($_POST['k'])) ? $_POST['k'] : '';
        $n = (isset($_POST['n'])) ? $_POST['n'] : '';
        $p = (isset($_POST['p'])) ? $_POST['p'] : '';
        $type = (isset($_POST['type'])) ? $_POST['type'] : '';


        switch ($type) {
            case "facto":
                $result = Math::facto(floatval($n));
                break;
            case "power":
                $result = Math::power(floatval($n), floatval($p));
                break;
            case "choose":
                $result = Math::choose(floatval($k), floatval($n));
                break;
            case "bernoulli":
                $result = Math::bernoulli(floatval($n),floatval($p),floatval($k));
                break;
            default:
                $result = "";
                break;
        }

        $title = 'Maths - Nathan Melin';
        $add_script = '<script src="./js/math_script.js"></script>';
        $add_style = '<link rel="stylesheet" href="./css/math_style.css">';
        include 'views/projets/v_math.php';
    }

    public static function facto(float $n)
    {
        $result = 1;
        for ($i = 1; $i != $n + 1; $i++) {
            $result *= $i;
        }
        return $result;
    }

    public static function power(float $n, float $p)
    {
        $result = 1;
        if ($p != 0) {
            for ($i = 0; $i < $p; $i++) {
                $result *= $n;
            }
        } else if ($p < 0) {
            $result = "Un nombre ne peut être négatif";
        } 
        return $result;
    }

    public static function choose(float $k, float $n)
    {
        if ($k > $n) {
            $result = 'k ne peut être supérieur à n';
        } else if ($k == $n) {
            $result = 1;
        } else {
            $result = Math::facto($n) / (Math::facto($k) * Math::facto($n - $k));
        }
        return $result;
    }

    public static function bernoulli(float $n, float $p, float $k){
        if (($p<0) || ($p>1)){
            $result = 'La probabilité p doit être comprise en 0 et 1';
        } else {
            $result = Math::choose($k,$n) * 
            Math::power($p, $k) * 
            Math::power((1-$p),($n-$k));
        }
        return $result;
    }
}
