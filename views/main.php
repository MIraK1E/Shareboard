<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Shareboard</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Shareboard</a>
                </div>
                <div id="nav navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
                        <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
                        <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
                    </ul>
                </div>
            </div><!-- /.container -->
        </nav>
        <div class="container">
            <div class="row">
                <?php require($view); ?>
            </div>
        </div>
    </body>
</html>
