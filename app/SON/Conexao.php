<?php

namespace SON;
require_once "ConexaoInterface.php";

/**
 * [clase de conexão com o bando de dados]
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 */
class Conexao implements ConexaoInterface
{
    private $sgdb;
	private $host;
	private $db;
	private $user;
	private $pass;

    /**
     * construtor da Conexao
     * @param [text] $sgdb servidor::MySql, MsSql, Oracle
     * @param [text] $host Endereco do servidor
     * @param [text] $db   nome do banco do dados
     * @param [text] $user login do banco de daos
     * @param [text] $pass senha do banco de dados
     */
	public function __construct($sgdb, $host, $db, $user, $pass)
	{
        $this->sgdb = $sgdb;
		$this->host = $host;
		$this->db   = $db;
		$this->user = $user;
		$this->pass = $pass;
	}

    /**
     * statement da conexao com o bando de dados
     * @return objeto conexao com o bando
     */
	public function connect()
    {
        return new \PDO("{$this->sgdb}:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
    }

}

?>
