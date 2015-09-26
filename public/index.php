<?php
require_once '../app/view/top.php';
require_once '../app/Route.php';

$rota = new Route;
$path = $rota->validateRoute();

require_once '../app/view/bottom.php';

?>
