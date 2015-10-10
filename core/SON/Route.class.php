<?php
/**
 * classe para o Routeamento de paginas nas URLS
 *
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 *
 */

namespace SON;
require_once("../vendor/autoload.php");

class Route
{
    private $rota;
    private $path;
    private $page;

    public function captureRoute()
    {
        $rota = parse_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $path = explode('/', $rota['path']);

        return $path;
    }

    public function validateRoute()
    {
        // $path = $this->path;
        $path = Route::captureRoute();
        $page = new \SON\Pages();
        //redirecionamento para a home
        if ($path[1] == "" || $path == null)
        {
            // require_once('../app/view/home.php');
            $path = 'home';
            return $page->verPagina($path);
        }

        //error_handler para parametro invalido
        else
        {
            return $page->verPagina($path);
        }

    }

}
