<?php
$nome      = $_POST['nome'];
$email     = $_POST['email'];
$descricao = $_POST['descricao'];

echo '<h1>Dados enviados com sucesso, abaixo seguem os dados que você enviou</h1><br>
    <p>
        <label>Nome: </label>
        <input name="nome"      type="text"   value=' . $nome . '>
    </p><p>
        <label>Email: </label>
        <input name="email"     type="email"  value=' . $email . '>
    </p><p>
        <label>Descricao: </label>
        <input name="descricao" type="text"   value=' . $descricao . '>
    </p>
    ';
?>
