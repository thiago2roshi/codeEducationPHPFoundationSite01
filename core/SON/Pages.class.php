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
require_once("Conexao.php");
// require_once("PagesInterface.php");
include_once("config.php");

class Pages
{
    private $title;
    private $content;
    private $db;
    private $conn;
    private $stm;
    private $page;


    // public function __construct()
    // {
    //     $this->sgdb  = $database['sgdb'];
    //     $this->host  = $database['host'];
    //     $this->db    = $database['db'];
    //     $this->user  = $database['user'];
    //     $this->pass  = $database['pass'];
    // }
    /**
     * @method captura as paginas do DB
     * @return [type] retorna a pagina requisitada
     */
    public function verPagina($title)
    {
        $this->title = $title;
        $db = new \SON\Conexao(
                                $database['sgdb'],
                                $database['host'],
                                $database['db'],
                                $database['user'],
                                $database['pass']
                            );
        $conn = $db->connect();

        $stm = $conn->prepare("SELECT * FROM pages WHERE title=:title");
        $stm->bindParam(":title", $this->title);

        try
        {
            $stm->execute();
        }
        catch(Exception $e)
        {
            return die(
                    "Falha ao executar Query. \nErro Codigo: {$e->getCode()}:
                    {$e->getMessage()}\n{$e->getTraceAsString()}\n"
                    );
        }

        $page = $stm->fetch(PDO::FETCH_ASSOC);

        //  tratativa para pagina 404
        // if ($page == null | $page == '') {
        //
        // return http_response_code(404);
        //
        // }

        return $page;
    }

    public function gerarPagina()
    {
        //num creio nisso
        echo "não implementado";
    }


}
