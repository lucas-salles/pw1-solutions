<?php 
require_once('character.php');

class Comic{
  private $characters = [];

  public function getCharacters(){
    return $this->characters;
  }

  public function add(Character $person){
    array_push($characters, $person);
  }

  public function names(string $search){
    $names = [];

    foreach($this->getCharacters() as $character){

      if ($character->getComic() == $search){
        array_push($names, $character->getName());
      } else {
        echo '';
      }

    }

    return $names;
  }

  public function weights( string $search){
    $weights = [];

    foreach($this->getCharacters() as $character){
      
      if ($character->getComic() == $search){
        array_push($weights, $character->getWeight());
      } else {
        echo '';
      }
      
    }

    return $weights;
  }

}

?>