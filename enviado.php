<?php
$nome      = $_POST['nome'];
$email     = $_POST['email'];
$descricao = $_POST['descricao'];

echo "
        <h1>Dados enviados com sucesso, abaixo seguem os dados que você enviou</h1><br>
     ";
echo "
        <p>
            Nome: " . $nome . "
        </p>
        <p>
            E-mail: " . $email . "
        </p>
        <p>
            Descricao: " . $descricao . "
        </p>
    ";


?>
