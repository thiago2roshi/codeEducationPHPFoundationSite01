<?php
  
/**
* Value Object para as Paginas do site
*       resgatadas via select da classe DB
* 
*@ 
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
