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
                $result = Math::facto(intval($n));
                break;
            case "power":
                $result = Math::power(intval($n), intval($p));
                break;
            case "choose":
                $result = Math::choose(intval($k), intval($n));
                break;
        }

        $title = 'Maths - Nathan Melin';
        $add_script = '<script src="./js/math_script.js"></script>';
        $add_style = '<link rel="stylesheet" href="./css/math_style.css">';
        include 'views/projets/v_math.php';
    }

    public static function facto(int $n)
    {
        $result = 1;
        for ($i = 1; $i != $n + 1; $i++) {
            $result *= $i;
        }
        return $result;
    }

    public static function power($n, $p)
    {
        $result = 1;
        if ($p != 0) {
            for ($i = 0; $i < $p; $i++) {
                $result *= $n;
            }
        } else if ($p < 0) {
            $result = "Un nombre ne peut être négatif";
        } else if (is_string($n) || is_string($p)) {
            $result = "Veuillez mettre une nombre positif";
        }
        return $result;
    }

    public static function choose(int $k, int $n)
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
}
