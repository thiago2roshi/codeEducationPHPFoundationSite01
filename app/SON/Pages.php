<?php
/**
 * classe para as paginas do sistema
 *
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 *
 * Variaveis
 * @var [type] [$title description]
 */
namespace SON;
require_once('__DIR__/../app/SON/Conexao.php');
require_once("__DIR__/../app/config.php");

class Pages extends PagesInterface
{
    private $title;
    private $content;
    private $db;
    private $conn;
    private $stm;
    private $page;


    function __construct($title)
    {
        $this->title = $title;
    }
    /**
     * @method captura as paginas do DB
     * @return [type] retorna a pagina requisitada
     */
    public function verPagina()
    {
        $db = new \SON\Conexao($database['sgdb'], $database['host'], $database['db'], $database['user'], $database['pass']);
        $conn = $db->connect();

        $stm = $conn->prepare("SELECT * FROM pages WHERE title=:title");
        $stm->bindParam(":title", $this->title);

        try
        {
            $stm->execute();
        }
        catch(Exception $e)
        {
            return die("Falha ao executar Query. \nErro Codigo: {$e->getCode()}: {$e->getMessage()}\n{$e->getTraceAsString()}\n");
        }

        $page = $stm->fetch(PDO::FETCH_ASSOC);

        return $page;
    }
    public function gerarPagina()
    {
        
    }


}


 ?>
