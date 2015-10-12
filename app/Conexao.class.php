<?php
/**
 * [clase de conexão com o bando de dados]
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 */

namespace app;
require_once(__DIR__ .'/..'. '/vendor' . '/autoload.php');
use \PDO;

class Conexao
{
    private static $conn = null;
    /**
     * statement da conexao com o bando de dados
     * @return objeto conexao com o bando
     */
    public function __construct($sgdb, $host, $dbname, $user, $pass)
    {
        $this->sgdb   = $sgdb;
        $this->host   = $host;
        $this->dbname = $dbname;
        $this->user   = $user;
        $this->pass   = $pass;

        try{
            self::$conn = new PDO("{$this->sgdb}:host={$this->host};dbname={$this->dbname};charset=utf8", $this->user, $this->pass);
        }catch (Exception $e){
            die('Erro Codigo: ' . $e->getCode() . ': ' . $e->getMessage() . '\n' . $e->getTraceAsString() . '\n');
        }
    }
	public static function get()
    {
        if(self::$conn !== null){
            return self::$conn;
        }else {
            die('conexão vazia');
        }

    }

}
