<?php
require 'vendor/autoload.php';
use app\Route;

require_once('view/top.php');
require_once('view/template_basic.php');

$rota = new Route();
$path = $rota->validateRoute();

$page = templateBasic($path['title'], $path['content']);


require_once('view/bottom.php');
