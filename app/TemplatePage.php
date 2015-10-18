<?php
/**
 * @author Thiago Souza <ads.thiagosouza@gmail.com>
 *
 * @description template de paginas
 *
 * @param $title   : titulo da pagina
 * @param $content : conteudo da pagina
 * @param $form_action : action do formulario
 */
namespace app;

require 'vendor/autoload.php';


class TemplatePage
{
    private $search;
    private $db;
    private $page;


    // function __construct()
    // {
    //     $this->page = $page;
    //     $this->search = $search;
    // }

    function templateBasic($page)
    {
        return $page['content'];
    }

    function templateForm($pagetitle, $content, $form_action)
    {
        return "
            <h1>{$title}</h1>
            <p>{$content}</p>

            <form class='form' action='{$form_action}' method='post'>
                <p>
                    <label class = 'textfield'>Nome: </label>
                    <input class = 'input-xlarge' name = 'nome' type = 'text' placeholder = 'Maria Jose da Silva'>
                </p><p>
                    <label class = 'textfield'>Email: </label>
                    <input class = 'input-xlarge' name = 'email' type = 'email' placeholder = 'user@email.com'>
                </p><p>
                    <label class = 'textfield'>Descricao: </label>
                    <input class = 'input-xlarge' name = 'descricao' type = 'text' placeholder  = 'Em que posso ajudar?'>
                </p><p>
                    <input class = 'btn btn-block' name = 'enviar' type = 'submit' value = 'enviar'>
                </p>
            </form>
        ";
    }
}
