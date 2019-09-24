<?php
    class Character {
        private $comic;
        private $hero;
        private $name;
        private $height;
        private $weight;

        public function __construct(string $comic, string $hero, string $name, float $height, float $weight) {
            $this->comic = $comic;
            $this->hero = $hero;
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function getComic():string {
            return $this->comic;
        }

        public function setComic(string $comic) {
            $this->comic = $comic;
        }

        public function getHero():string {
            return $this->hero;
        }

        public function setHero(string $hero) {
            $this->hero = $hero;
        }

        public function getName():string {
            return $this->name;
        }

        public function setName(string $name) {
            $this->name = $name;
        }

        public function getWeight():float {
            return $this->weight;
        }

        public function setWeight(float $weight) {
            $this->weight = $weight;
        }
    }
?>