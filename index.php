<?php
require_once('view/top.php');
// require_once('../app/Route.php');
require 'vendor/autoload.php';

// $loader = require __DIR__ . 'vendor/autoload.php';
// $loader->add('SON', 'SON//');

$rota = new \SON\Route;
$path = $rota->validateRoute();

require_once('view/bottom.php');
