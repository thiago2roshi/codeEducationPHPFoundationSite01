<?php
/**
 * @description arquivo principal do sistema,
 *                  com tudo que merece com muito POG
 *                  por mais que tente reduzir as gambiarras
 * @author Thiago Souza @thiagoroshi <ads.thiagosouza@gmail.com>
 * @date 05/11/2015 
 */
 
require __DIR__ . '/vendor/autoload.php';

use app\Route;
// use app\TemplatePage;

// require_once __DIR__ .'/view/top.php';
// require_once __DIR__ .'/view/templatePages.php';

// $rota = new Route();
// $template = new TemplatePage();

// $page = $rota->validateRoute();

// if ($page !== null) {
//     print($template->templateBasic($page));
// }else {
//     include 'view/404.html';
// }
// require_once('view/bottom.php');

$loader = new Twig_Loader_Filesystem(__DIR__ . '/view');
/**
 * modo cache ativado
 * $twig = new Twig_Environment($loader, array('cache' =>  __DIR__ . '/cache'));
 **/
 /**
  * modo cache desativado
  **/ 
$twig = new Twig_Environment($loader);
$page = array(
        "title" => "homeTwig",
        "content" => "It's Working Bitch!!!"
    );

echo $twig->render("index.html", $page);
// $twig->display("index.html", $page);

// $ano = date('Y');
//         echo "
//             <div class='row pull-right'>
//                 <span class='color'>Todos os Direitos reservados -
//                 " . $ano . "
//                 </span>
//             </div>
//         ";