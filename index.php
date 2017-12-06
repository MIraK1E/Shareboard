<?php
//start Session
    session_start();

    require('config.php');

    require('classes/Messages.php');
    require('classes/Route.php');
    require('classes/Controller.php');
    require('classes/Model.php');

    require('controllers/home.php');
    require('controllers/shares.php');
    require('controllers/users.php');

    require('models/home.php');
    require('models/shares.php');
    require('models/users.php');

    $route = new Route($_GET);
    $controller = $route->createController();
    if($controller)
    {
        $controller->executeAction();
    }

?>
