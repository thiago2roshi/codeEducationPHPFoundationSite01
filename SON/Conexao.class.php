<?php
/**
 * [clase de conexão com o bando de dados]
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 */

namespace SON;
require_once( __DIR__ .'/..'. '/vendor' . '/autoload.php');

class Conexao implements ConexaoInterface
{
    private $sgdb;
	private $host;
	private $db;
    private $user;
	private $pass;


    /**
     * statement da conexao com o bando de dados
     * @return objeto conexao com o bando
     */
    public function __construct($sgdb, $host, $db, $user, $pass)
    {
        $this->sgdb = $sgdb;
        $this->host = $host;
        $this->db   = $db;
        $this->user = $user;
        $this->pass = $pass;
    }
	public function connect()
    {
        try
        {
            return \PDO("{$this->sgdb}:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
        }
        catch (Exception $e)
        {
            die('Erro Codigo: ' . $e->getCode() . ': ' . $e->getMessage() . '\n' . $e->getTraceAsString() . '\n');
        }

    }

}
