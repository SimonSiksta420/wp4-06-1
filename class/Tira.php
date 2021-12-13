<?php

    class Tira extends Mascotas
    {
        private bool $Brown;

        public function __construct(string $name, int $legs, bool $Brown) {

            $this->name = $name;

            $this->legs = $legs;

            $this->fur = $Brown;

        }

        public function getBrown()
        {
            return $this->Brown;
        }
    }
    