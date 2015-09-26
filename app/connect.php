<?php

require_once './SON/Conexao.php';
require_once 'config.php';

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
$resultado = $stmt->fetchAll();

print_r ($resultado);

?>
