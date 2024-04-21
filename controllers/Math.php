<?php

class Math
{
    public function handleRequest()
    {
        $title = 'Projets - Nathan Melin';
        include 'views/projets/v_math.php';
    }

    public static function facto(int $n)
    {
        $result = 1;
        for ($i = $n; $i != $n; $i--) {
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
            return 'k ne peut être supéreieur à n';
        } else if ($k == $n) {
            return 1;
        } else {
            return Math::facto($n) / (Math::facto($k) * Math::facto($n - $k));
        }
    }

}