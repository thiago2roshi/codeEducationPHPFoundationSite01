<?php
/**
 * classe para o Routeamento de paginas nas URLS
 *
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 *
 */

namespace SON;
require_once("__DIR__/../app/SON/Pages.php");


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

        //redirecionamento para a home
        if ($path[1] == "" || $path == null)
        {
            // require_once('../app/view/home.php');
            $page = new \SON\Pages('home');
            return $page->verPagina();
        }

        //error_handler para parametro invalido
        elseif (!file_exists('../app/view/' . $path[1] . '.php'))
        {
            return http_response_code(404);
        }
        else
        {
            require_once('../app/view/' . $path[1] . '.php');
        }
    }

}

?>
