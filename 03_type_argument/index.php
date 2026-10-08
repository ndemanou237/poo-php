<?php

class Animal{
    private $first_name;
    private $race;

    public function __construct($first_name){
        $this->first_name = first_name;
    }

    public function getFirst_name(): mixed{
        return $this->first_name;
    }
}

class Veterinarian{
    public $first_name;

    public function __construct($first_name){
        $this->first_name = first_name;
    }

    public function feedAnimal(Animal $animal): void {
        echo "Je viens de nourir " . $animal->getFirst_name() . "!";
    }
}

$vet = new Veterinarian("samith");
$animal = new Animal("royce");

$vet->feedAnimal($animal);


?>
