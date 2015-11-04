<?php
  
/**
* Value Object para as Paginas do site
*       resgatadas via select da classe DB
* 
* @example como seria usado a classe
* $sql = "SELECT * FROM usuarios";
* 
* $query=$conexao->prepare($sql);
* $query->execute();
* $rs = $query->fetchAll(PDO::FETCH_CLASS,"usuariosVO") or die(print_r($query->errorInfo(), true));
*
* foreach ($rs as $key => $row){
*    //usando os métodos get da classe usuariosVO
*    
*    echo $row->getId() . "<br>\n";
*    echo $row->getNome() . "<br>\n";
*    echo $row->getLogin() . "<br>\n";
*    echo $row->getSenha() . "<br><br>\n\n";
*}
*Read more: http://www.linhadecodigo.com.br/artigo/3476/mapeamento-objeto-relacional-vo-em-php.aspx#ixzz3qXXBhN1f

**/
  
class PagesVO
{
    private $id      = 0;
    private $title   = "";
    private $content = "";
    private $type    = "";
    
    
    public function __construct(){}
    private function __clone(){} // evita que a classe seja clonada
    public function __destruction()
    {
      foreach($this as $key => $value){
          unset($this->$key);
      }
      foreach(array_keys(get_defined_vars()) as $var){
          uset(${"$var"});
      }
      unset($var);
    }
    
    public function getID(){return $this->id;}
    public function setID($id)
    {
        $this->id = intval($id);
    }
    
    public function getTitle(){return $this->title;}
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getContent(){return $this->content;}
    public function setContent($content)
    {
        $this->content = $content;
    }
    
    public function getType(){return $this->type;}
    public function setType($type)
    {
        $this->type = $type;
    }
       
}
  
?>
