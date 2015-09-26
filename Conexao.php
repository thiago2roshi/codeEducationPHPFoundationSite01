<?php
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
     * [__construct criador de Conexao]
     * @param [text] $sgdb [servidor::MySql,MsSql,Oracle]
     * @param [text] $host [Endereco do servidor]
     * @param [text] $db   [nome do banco do dados]
     * @param [text] $user [login do banco de daos]
     * @param [text] $pass [senha do banco de dados]
     */
	private function __construct($sgdb, $host, $db, $user, $pass)
	{
        $this->sgbd = $sgbd;
		$this->host = $host;
		$this->db   = $db;
		$this->user = $user;
		$this->pass = $pass;
	}

    /**
     * [conect Conexão com o bando de dados]
     * @return [type] [conexão do DB]
     */
	public function conect()
	{
		return new \PDO({$this->sgbd}:host={$this->host};dbname={$this->db}; $this->user, $this->pass);
	}
}
?>
