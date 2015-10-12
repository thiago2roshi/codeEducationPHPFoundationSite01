<?php
/**
 * @param $title    titulo da pagina
 * @param $content  conteudo da pagina
 */
public function templateBasic($title, $content)
{
    echo "
        <h1>{$title}</h1>
        <div>
            <p>{$content}</p>
        </div>
    ";
}
