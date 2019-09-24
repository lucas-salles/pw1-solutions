<?php

    require_once('character.php');

    class Comic {
        private static $characters = [];

        public static function add(Character $character) {
            self::$characters[] = $character;
        }

        public static function names(string $comic = null):array {
            $names = [];
            foreach (self::$characters as $character) {
                if ($comic) {
                    if ($character->getComic() == $comic) {
                        $names[] = $character->getHero();
                    }
                } else {
                    $names[] = $character->getHero();
                }
            }
            natcasesort($names);
            return $names;
        }

        public static function weights(string $comic = null):float {
            $weights;
            $cont;
            foreach (self::$characters as $character) {
                if ($comic) {
                    if($character->getComic() == $comic) {
                        $weights += $character->getWeight();
                        $cont++;
                    }
                } else {
                    $weights += $character->getWeight();
                    $cont++;
                }
            }
            return $weights / $cont;
        }
    }
?>