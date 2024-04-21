<?php
class Projet
{

    public function handleRequest($projet)
    {
        console_log($projet);
        switch ($projet) {
            case 'math':
                $title = 'Math - Nathan Melin';
                include 'views/projets/v_math.php';
                break;
            default:
                $title = 'Portfolio Nathan Melin';
                include 'views/projet.php';
                break;
        }
    }
}
