<?php
class Projet
{

    public function handleRequest($projet)
    {

        switch ($projet) {
            case 'math':
                include 'controllers/Math.php';

                $projectController = new Math();
                $projectController->handleRequest();

                break;
            case 'conway':
                include 'controllers/Conway.php';
                $projectController = new Conway;
                $projectController->handleRequest();
                break;

            default:
                $title = 'Portfolio Nathan Melin';
                include 'views/v_projet.php';
                break;
        }
    }
}
