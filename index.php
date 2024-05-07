<?php

require_once 'controllers/Controller.php';
require_once 'controllers/fonction.php';
require_once 'vendor/svg.php';



// si 'page' n'est pas initialisé, alors par défaut on renvoie vers l'index
$page = (isset($_GET['page'])) ? $_GET['page'] : 'index';
$sub = (isset($_GET['sub'])) ? $_GET['sub'] : '';




$controller = new Controller();
$controller->handleRequest($page,$sub);
