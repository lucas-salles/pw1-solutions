<?php

class Character
{
  private $comic;
  private $hero;
  private $name;
  private $height;
  private $weight;

  public function __construct($comic,$hero,$name,$height,$weight)
  {
    $this->comic = $comic;
    $this->hero = $hero;
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  public function __get($name)
  {
    $result="";
    if ($name === "comic") {
      $result = $this->comic;
    } else if ($name === "hero") {
      $result = $this->hero;
    } else if ($name === "name") {
      $result = $this->name;
    } else if ($name === "height") {
      $result = $this->height;
    } else if ($name === "weight") {
      $result = $this->weight;
    }
    return $result;
  }

  public function __set($name,$value)
  {
    if ($name === "comic") {
      $this->comic = $value;
    } else if ($name === "hero") {
      $this->hero = $value;
    } else if ($name === "name") {
      $this->name = $value;
    } else if ($name === "height") {
      $this->height = $value;
    } else if ($name === "weight") {
      $this->weight = $value;
    }
  }

}
