<?php
require_once 'top.php';

$route = parse_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path  = explode('/', $route['path']); // var_dump array(2) { [0]=> string(0) "" [1]=> string(4) "home" }

if (file_exists($path[1] . '.php')) //error_handler para o _GET, para parametro invalido
{
    require_once($path[1] . '.php');
}
else
{
    require_once 'ops.php';
}

require_once 'bottom.php';

?>
