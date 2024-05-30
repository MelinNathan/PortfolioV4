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
            case 'mudry':
                include 'controllers/Mudry.php';
                $projectController = new Mudry;
                $projectController->handleRequest();
                break;
            case 'sigean':
                include 'controllers/Sigean.php';
                $projectController = new Sigean;
                $projectController->handleRequest();
                break;
            default:
                $title = 'Portfolio Nathan Melin';
                include 'views/v_projet.php';
                break;
        }
    }
}
