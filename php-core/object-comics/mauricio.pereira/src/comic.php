<?php
require 'character.php';

class Comic
{
  private static $characters = [];

  public static function add(Character $character){
    array_push(self::$characters, $character);
    usort(self::$characters, function($a, $b){
      return strcasecmp($a->__get("hero"), $b->__get("hero"));
    });
  }

  public static function names($comic=null){
    $result = [];
    foreach(self::$characters as $char){
      if($comic != null){
        if(strcmp($char->__get("comic"), $comic) == 0){
          array_push($result,$char->__get("hero"));
        }
      } else {
        array_push($result,$char->__get("hero"));
      }
    }
    return $result;
  }

  public static function weights($comic=null){
    $weights = 0;
    $quant = 0;
    foreach(self::$characters as $char){
      if($comic != null){
        if(strcmp($char->__get("comic"), $comic) == 0){
          $weights += $char->__get("weight");
          $quant++;
        }
      } else {
        $weights += $char->__get("weight");
        $quant++;
      }
    }
    return $weights / $quant;
  }

}
