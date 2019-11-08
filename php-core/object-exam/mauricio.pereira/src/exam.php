<?php

class Exam
{
  private $answerTemplate;
  private $weight;
  private $answer = [];

  public function __construct(array $answerTemplate, array $weight)
  {
    $this->answerTemplate = $answerTemplate;
    $this->weight = $weight;
  }
  
  public function add(string $codigo,array $answer)
  {
    $this->answer[$codigo] = $answer;
  }

  public function grade(string $codigo): float
  {
    $result = 0.0;
    $aux = $this->answer[$codigo];
    foreach($aux as $key => $valor)
    {
      if($aux[$key] == $this->answerTemplate[$key])
      {
        $result += $this->weight[$key];
      }
    }
    return $result;
  }

  public function notas(): array
  {
    $result = [];
    foreach($this->answer as $key => $valor){
      $aux = $this->grade($key);
      $result[] = $aux;
      sort($result);
    }
    return $result;
  }

  public function min(int $n = 1)
  {
    $result=[];
    $aux = $this->notas();
    for($i = 0; $i < $n; $i++){
      $result[] = $aux[$i];
      sort($result);
    }
    return $result;
  }

  public function avg()
  {
    $aux = 0;
    foreach($this->notas() as $valor){
      $aux += $valor;
    }
    return $aux / sizeof($this->notas());
  }

  public function max()
  {
    $result= $this->notas();
    sort($result);
    return [$result[sizeof($result)-1]];
  }

  public function lt(int $n): array
  {
    $aux = [];
    foreach($this->notas() as $valor){
      if($valor < $n){
        $aux[] = $valor;
      }
    }
    sort($aux);
    return $aux;
  }

  public function gt(int $n): array
  {
    $aux = [];
    foreach($this->notas() as $valor){
      if($valor > $n){
        $aux[] = $valor;
      }
    }
    sort($aux);
    return $aux;
  }
}
