<?php

class Route
{
    public function captureRoute()
    {
        $rota = parse_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $path = explode('/', $rota['path']);

        return $path;

        // if (!file_exists($path[1] . '.php')) //error_handler para parametro invalido
        // {
        //     require_once 'ops.php';
        //     return http_response_code(404);
        // }
        // else
        // {
        //     require_once($path[1] . '.php');
        // }
    }

    public function validateRoute()
    {
        // $path = $this->path;
        $path = Route::captureRoute();

        if (!file_exists($path[1] . '.php')) //error_handler para parametro invalido
        {
            require_once 'ops.php';
            return http_response_code(404);
        }
        else
        {
            require_once($path[1] . '.php');
        }
    }

}

?>
