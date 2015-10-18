<?php
/**
 * classe para o Routeamento de paginas nas URLS
 *
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 *
 */

namespace app;
use \app\Pages;

require_once( __DIR__ .'/..'. '/vendor' . '/autoload.php');

class Route
{
    private $rota;
    private $path;
    private $page;

    public function captureRoute()
    {
        /**
         * @var $rota
         * @return string /home
         */
        $rota = substr($_SERVER['REQUEST_URI'], 1);

        return $rota;
    }

    public function validateRoute()
    {
        $rota = Route::captureRoute();
        $page = new Pages();
        //redirecionamento para a home
        if ($rota != null){
            return $page->verPagina($rota);
        }else{
            return $page->verPagina("home");
        }
    }
}
