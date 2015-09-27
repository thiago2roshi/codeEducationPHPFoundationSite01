<?php

class Route
{
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
            require_once('../app/view/home.php');
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
