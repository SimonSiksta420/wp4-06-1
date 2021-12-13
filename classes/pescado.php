<?php

    class Pescado extends Animal
    {
        private bool $isScaly;

        public function __construct(string $name, int $legs, bool $isScaly) {
            
            $this->name = $name;

            $this->legs = $legs;

            $this->isScaly = $isScaly;

        }

        public function getisScaly()
        {
            return $this->isScaly;
        }
    }
    