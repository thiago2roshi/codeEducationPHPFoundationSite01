<?php
require_once 'top.php';

if (file_exists($_GET['arquivo']))
{
    require_once($_GET['arquivo']);
}
else
{
    require_once 'ops.php';
}


require_once 'bottom.php';

?>
