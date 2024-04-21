<?php
class Controller
{
    public function handleRequest($page,$sub)
    {
        switch ($page) {
            case 'index':
                $title = 'Portfolio Nathan Melin';
                include 'views/index.php';
                break;

            case 'projet':
                include 'controllers/Projet.php';
                $projet = isset($_GET['projet']) ? $_GET['projet'] : '';
                $portfolioController = new Projet();
                $portfolioController->handleRequest($projet);
                break;
            case 'stage':
                include 'controllers/Stage.php';
                $portfolioController = new Stage();
                $portfolioController->handleRequest();
                break;
            case 'veille':
                include 'controllers/Veille.php';
                $portfolioController = new Veille();
                $portfolioController->handleRequest();
                break;
            case 'skill':
                include 'controllers/Skill.php';
                $portfolioController = new Skill();
                $portfolioController->handleRequest();
                break;
            default:
                $title = 'Portfolio Nathan Melin';
                include 'views/index.php';
                break;
        }
    }
}
