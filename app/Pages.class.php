<?php
/**
 * classe para as paginas do sistema
 *
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 *
 * Variaveis
 * @var [type] [$title description]
 */
namespace app;

use \app\Conexao;
use \model\PagesVO;

require_once( __DIR__ .'/..'.'/vendor'.'/autoload.php');

class Pages extends Conexao
{
    private $title;
    private $content;
    private $stm;
    private $page;
    private $query;
    /* @method captura as paginas do DB
     * @return [type] retorna a pagina requisitada
     */
    public function __construct(){}
    private function __clone(){}
    public function __destruction()
    {
        foreach ($this as $key => $row) {
            unset($this->key);
        }
    }
    public function procuraPagina($request)
    {
        $this->request = filter_var($request, FILTER_SANITIZE_STRING);

    }
    public function verPagina($request)
    {
        $this->request = filter_var($request, FILTER_SANITIZE_STRING);
        $query = "SELECT * FROM `pages` WHERE `title`='{$this->request}' LIMIT 1";
        $rs = self::selectDB($query, array(1), "model\\PagesVO");

        if($rs === false){
            http_response_code(404);
            die(include __DIR__ . "/.."."/view"."/404.html");
        }else{
            return $rs;
        }
    }

    public function gerarPagina()
    {
        //num creio nisso
        return "não implementado";
    }


}
