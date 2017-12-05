<?php

    require('config.php');

    require('classes/Route.php');
    require('classes/Controller.php');

    require('controllers/home.php');

    $route = new Route($_GET);
    $controller = $route->createController();
    if($controller)
    {
        $controller->executeAction();
    }

?>
