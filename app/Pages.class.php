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
use \PDO;

require_once( __DIR__ .'/..'.'/vendor'.'/autoload.php');

class Pages
{
    private static $database;
    private $title;
    private $content;
    private $db;
    private $conn;
    private $stm;
    private $page;
    /* @method captura as paginas do DB
     * @return [type] retorna a pagina requisitada
     */

    public function verPagina($title)
    {
        $this->title = filter_var($title, FILTER_SANITIZE_STRING);

        $database = array(
            'sgdb' => 'mysql',
            'host' => '172.17.0.8',
            'db'   => 'php-foundation',
            'user' => 'thiago',
            'pass' => 'roshi1903'
        );
        $db = new Conexao(
            $database['sgdb'],
            $database['host'],
            $database['db'],
            $database['user'],
            $database['pass']
        );
        $conn = $db->get();

        $stm = $conn->prepare("SELECT * FROM pages WHERE title=:title LIMIT 1");
        $stm->bindParam(":title", $this->title);

        try{
            $stm->execute();
        } catch(PDOException $e){
            return die(
                "Falha ao executar Query. \nErro Codigo: {$e->getCode()}:
                {$e->getMessage()}\n{$e->getTraceAsString()}\n"
            );
        }

        $page = $stm->fetch(PDO::FETCH_ASSOC);
        // $page = $stm->fetchAll();
        $conn = null;

        if ($page !== null) {
            return $page;
        }else {
            return "pagina não encontrada";
        }

    }

    public function gerarPagina()
    {
        //num creio nisso
        return "não implementado";
    }


}
