<?php

require_once('__DIR__/../app/SON/Conexao.php');
require_once("__DIR__/../app/config.php");

echo "
///////////////////////////
// Iniciando  Fixture    //
// configuração de banco //
///////////////////////////
";

$db = new \SON\Conexao($database['sgdb'], $database['host'], $database['db'], $database['user'], $database['pass']);
$conn = $db->connect();

echo "Criando TABLE";

$conn->query(
                "CREATE TABLE if not exists pages
                (
                    id INT auto_increment,
                    title VARCHAR(30),
                    content text,
                    PRIMARY KEY (id)
                );"
            );
echo " - OK\n";
echo "inserindo dados em table=>teste";

for ($i=0; $i < 10 ; $i++)
{
    $title   = "title{$i}";
    $content = "texto da pagina{$i}";


    $stm = $conn->prepare("INSERT INTO pages (title,content) VALUES (:title, :content);");
    $stm->bindParam(":title", $title);
    $stm->bindParam(":content", $content);
    $stm->execute();
}
echo " - OK\n";

echo "
/////////////////////////////////////////////
// Configuracao inicial do banco concluida //
/////////////////////////////////////////////
";
