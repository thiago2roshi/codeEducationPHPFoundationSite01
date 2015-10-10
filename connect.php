<?php

require_once('../app/SON/Conexao.php');
require_once('../app/config.php');

$db = new \SON\Conexao($config['sgdb'], $config['host'], $config['db'], $config['user'], $config['pass']);

try
{
    $conecta = $db->connect();
}catch(\PDOException $e)
{
    die('Erro Codigo: ' . $e->getCode() . ': ' . $e->getMessage());
}

$query     = "SELECT * FROM clientes";
$stmt      = $conecta->prepare($query);
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
