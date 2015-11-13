<?php

use PHPUnit_Framework_TestCase as PHPUnit;
use \app\Pages as Pages;

class PHPNativeElementsTest extends PHPUnit
{

    protected $Pages;

    public function setUp()
    {
        /** parametros iniciais
         *   Executados no inicio 
         *    do teste unitario 
         **/
        $this->page = new Pages();
    }
    
    public function testPagesClass()
    {
        $this->page->verPagina('home');
        
    }
    public function tearDown()
    {
        /* parametros de encerramento*/
    }    
}

?>
