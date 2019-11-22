<?php

class Company{
  
  private $name;
  private $founded;
  private $industry;
  private $kind;

  public function __construct(string $name, string $founded, string $industry, string $kind){
    $this->$name = $name;
    $this->$founded = $founded;
    $this->$industry = $industry;
    $this->$kind = $kind;
  }

  public function __toString(){
    return str_pad(".", 15, "$this->getName() $this->getFounded()", STR_PAD_BOTH );
  }

  // GETTERS

  public function getName():string{
    return $this->name;
  }

  public function getFounded():string{
    return $this->founded;
  }
  
  public function getIndustry():string{
    return $this->industry;
  }

  public function getKind():string{
    return $this->kind;
  }

  // SETTERS

  public function setName(string $name){
    $this->name = $name;
  }

  public function setFounded(string $founded){
    $this->founded = $founded;
  }
  
  public function setIndustry(string $industry){
    $this->industry = $industry;
  }

  public function setKind(string $kind){
    $this->kind = $kind;
  }

}

?>