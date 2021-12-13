<?php 


abstract class Mascotas

{
    protected string $name;
    protected int $legs;

    public function getName()
    {
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }
}


?>