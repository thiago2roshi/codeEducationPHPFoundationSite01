<?php

require_once '../SON/Conexao.php';
require_once '../config.php';

echo "
/**********************
 *  Iniciando Fixture *
 **********************/
";

$db = \SON\Conexao($database['sgdb'], $database['host'], $database['db'], $database['user'], $database['pass']);

echo "Dropando TABLE";

$conn = $db->connect();
$conn->query("DROP TABLE if exist teste;");

echo " - OK\n";
echo "Criando TABLE";

$conn->query(
                "CREATE TABLE if not exist teste
                (
                    id INT auto_increment,
                    text VARCHAR(10),
                    PRIMARY KEY (id)
                );"
            );
echo " - OK\n";
echo "inserindo dados em table=>teste";

for ($i=0; $i < 10 ; $i++) {
    $text = "text{$i}";

    $stm = $conn->prepare("INSERT INTO teste (text) VALUES (:text);");
    $stm = bindParam(":text", $text);
    $stm->execute();
}
echo " - OK\n";

echo "
/***********************
 ** Fixture Terminada **
 ***********************/
";


 ?>
