<?php
$nome      = $_POST['nome'];
$email     = $_POST['email'];
$descricao = $_POST['descricao'];

echo "
        <h1>Dados enviados com sucesso</h1><br>
        <h3>agora é esperar que seja respondido, como se realmente fosse.</h3>
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
