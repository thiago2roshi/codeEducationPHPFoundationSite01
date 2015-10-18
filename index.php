<?php
/**
 * @description [escrever aqui]
 * @author Thiago Souza @thiagoroshi <ads.thiagosouza@gmail.com>
 */
require __DIR__ . '/vendor/autoload.php';

use app\Route;
use app\TemplatePage;

require_once __DIR__ .'/view/top.php';
require_once __DIR__ .'/view/templatePages.php';

$rota = new Route();
$template = new TemplatePage();

$page = $rota->validateRoute();

if ($page !== null) {
    print($template->templateBasic($page));
}else {
    include 'view/404.html';
}


require_once('view/bottom.php');
