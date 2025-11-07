<?php
// index.php

require_once '../app/core/Router.php';
require_once '../app/core/Database.php';
require_once '../app/controllers/HomeController.php';

$router = new Router();
$router->route($_GET);
