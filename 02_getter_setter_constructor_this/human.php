<?php

class Human{
    private $first_name;
    private $last_name;
    private $sexe;
    private $address;

    public function __construct($first_name, $last_name, $sexe, $address){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->sexe = $sexe;
        $this->address = $address;

       
    }

    public function getfirst_name(): mixed{
            return $this->first_name;
        }
    public function getlast_name(): mixed{
            return $this->last_name;
        }
    public function getsexe(): mixed{
            return $this->sexe;
        }
    public function getaddress(): mixed{
            return $this->address;
        } 
    
    public function setfirst_name($first_name): void{
        $this->first_name = $first_name;
        }
    public function setlast_name($last_name): void{
        $this->last_name = $last_name;
        }
    public function setsexe($sexe): void{
        $this->sexe = $sexe;
        }
    public function setaddress($address): void{
        $this->address = $address;
        }    
    public function presentation(): void {
        if($this->sexe == "homme"){
            echo "bonjour, je m'appelle $this->first_name $this->last_name, je suis un homme et je vis à $this->address";
        }else{
            echo "bonjour, je m'appelle $this->first_name $this->last_name, je suis une femme et je vis à $this->address";
        }
    }            
}

$mohamed = new Human("Muhamed", "Ali", "homme", "paris");
$julie = new Human("julie", "girard", "femme", "nice");
$amusa = new Human("Amusa", "rita", "femme", "marseille");
$nicolas = new Human("Nicolas", "petit", "homme", "annecy");
$julien = new Human("julien", "du pont", "homme", "lacanau");

$listperson = [$mohamed, $julie, $amusa, $nicolas, $julien];

foreach($listperson as $person){
    
    echo "<pre>";
        $person->presentation();
    echo "</pre>";
}

?>
