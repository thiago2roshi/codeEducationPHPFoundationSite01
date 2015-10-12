<?php

function templateBasic($title, $content)
{
    echo "
        <h1>{$title}</h1>
        <p>{$content}</p>
    ";
}
