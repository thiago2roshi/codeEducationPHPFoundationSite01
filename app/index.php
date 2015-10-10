<?php
require_once('../app/view/top.php');
// require_once('../app/Route.php');
require_once('../app/vendor/autoload.php');


$rota = new \SON\Route;
$path = $rota->validateRoute();

require_once('../app/view/bottom.php');
