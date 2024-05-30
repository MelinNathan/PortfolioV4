<?php

class Controller
{
    public function handleRequest($page,$sub)
    {
        $pdo = PdoPortfolio::getPdoPortfolio();
        switch ($page) {
            case 'index':
                
                $pendingLearning = $pdo->getPendingApprentissage();

                $statut ="En recherche d'alternance";
                $title = 'Portfolio Nathan Melin';
                include 'views/v_index.php';
                break;

            case 'projet':
                $sub = (isset($_GET['sub'])) ? $_GET['sub'] : '';
                include 'controllers/Projet.php';
                $portfolioController = new Projet();
                $portfolioController->handleRequest($sub);
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
        }
    }
}
