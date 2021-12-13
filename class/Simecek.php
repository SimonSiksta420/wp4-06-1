<?php

    class Simecek extends Mascotas
    {
        private bool $isCute;

        public function __construct(string $name, int $legs, bool $isCute) {

            $this->name = $name;

            $this->legs = $legs;

            $this->isCute = $isCute;

        }

        public function getisCute()
        {
            return $this->isCute;
        }
    }
    