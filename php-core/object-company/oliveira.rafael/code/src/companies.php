<?php
require_once('company.php');

class Companies{

  private $companies = [];

  public function add(Company $company){
    array_push($companies, $company);
  }

  public function show(){
    
    foreach($companies as $company){
      echo"$company";
    }
  }


}


?>