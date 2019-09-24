<?php

class Companies {
    private $companies = [];

    public function add(Company $company) {
        $this->companies[] = $company;
    }

    public function foundedAfter(int $year) {
        return array_filter($this->companies, function($company) use($year) {
            return $company->getFounded() > $year;
        });
    }

    public function foundedBefore(int $year) {
        return array_filter($this->companies, function($company) use($year) {
            return $company->getFounded() < $year;
        });
    }

    public function __toString() {
        $strings = array_map(
            function ($c) {
              return (string)$c;
            },
            $this->companies
        );
        sort($strings);
        return join("\n", $strings);
    }
}