<?php
/**
 * @description [escrever aqui]
 * @author Thiago Souza @thiagoroshi <ads.thiagosouza@gmail.com>
 */
require __DIR__ . '/vendor/autoload.php';

use app\Pages;


if (substr($_SERVER['REQUEST_URI'], 1) !== false) {
    $rota = substr($_SERVER['REQUEST_URI'], 1);
} else {
    $rota = "home";
}

$page = new Pages();
$rs = $page->verPagina($rota);


$config = array(
    'twig' => array(
        'cache'       => __DIR__ . '/cache', // cache das paginas geradas
        'filesystem'  => __DIR__ . '/view',  // onde os templates da pagina ficam
        'auto_reload' => 'true'               // gerar novas paginas sempre que o template mude
    )
);

$loader = new Twig_Loader_Filesystem($config['twig']['filesystem']);
$twig   = new Twig_Environment($loader);
// $twig   = new Twig_Environment(
//                                 $loader, array(
//                                     'cache'       => __DIR__ . '/cache',
//                                     'auto_reload' => 'true'
//                                     )
//                                 );

echo $twig->render($rs[0]->getType().'.twig', array(
                                "title"   => $rs[0]->getTitle(),
                                "content" => $rs[0]->getContent()
                            )
                    );

// if ($page !== null) {
//     print($template->templateBasic($page));
// }else {
//     include 'view/404.html';
// }
//
//
// require_once('view/bottom.php');
