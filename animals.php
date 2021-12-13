<?php 

abstract class Mascotas
{
    
    private $name;
    private $legs;
 
    
    public function __construct(string $name, int $legs) {

      $this->name = $name;
      $this->legs = 0;
      
    }

 
}



?>