<?php

require 'vendor/autoload.php';
require_once 'config.php';


$container = new \Slim\Container($configs);

$app = new \Slim\App($container);


require_once 'container.php';

require_once 'src/controller/controller_home.php';

require_once 'src/routes/routes_home.php';

$app->run();