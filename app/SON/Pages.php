<?php
/**
 * classe para as paginas do sistema
 *
 * @author Thiago Souza Santos aka. ThiagoRoshi <ads.thiagosouza@gmail.com>
 */
namespace SON;
require_once('Conexao.php');

class Pages extends PagesInterface
{
    private $title;
    private $content;

    function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
    public function view_page()
    {

    }

}


 ?>
