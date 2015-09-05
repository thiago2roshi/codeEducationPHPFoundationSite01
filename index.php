<?php
require_once 'top.php';
require_once 'Route.php';

$rota = new Route;
$path = $rota->validateRoute();

require_once 'bottom.php';

?>
