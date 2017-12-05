<?php

    require('config.php');

    require('classes/Route.php');
    require('classes/Controller.php');

    require('controllers/home.php');
    require('controllers/shares.php');
    require('controllers/users.php');

    $route = new Route($_GET);
    $controller = $route->createController();
    if($controller)
    {
        $controller->executeAction();
    }

?>
