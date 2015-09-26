<?php

//evitar bugs de funcao não implementada, alem de deixar o codigo mais limpo
/**
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 */

namespace SON;

interface ConexaoInterface
{
	public function connect();
}

?>
