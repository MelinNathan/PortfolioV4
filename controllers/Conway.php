<?php

class Conway{

public function handleRequest()
    {
        $title = 'Conway\'s Game of Life - Nathan Melin';
        $add_script = '<script src=".\js\conway_script.js"></script>';
        include 'views/projets/v_conway.php';
    }


}