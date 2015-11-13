<?php

use PHPUnit_Framework_TestCase as PHPUnit;
use \app\Pages as Pages;

class PHPNativeElementsTest extends PHPUnit
{
    protect $Pages;

    public function setUp()
    {
        /** parametros iniciais
         *   Executados no inicio 
         *    do teste unitario 
         **/

        $this->page = new Pages();
    }

    public function tearDown()
    {
        /* parametros de encerramento*/
    }    
}

?>
