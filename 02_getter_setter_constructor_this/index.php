<?php

class Student {
    private $first_name;
    // $first_name = "shadow";

    public function __construct($first_name) {
        // $this->first_name = $first_name;
        $this->setFirst_name($first_name);
    }

    public function getfirst_name(): mixed {
        return $this->first_name;
    }

    public function setFirst_name($value): void {
        $this->first_name = $value;
    }

    private function calculateAverageScore(): void{

    }

    public function getAverageSocre(): mixed {
        return $this->calculateAverageScore();
    }
}

$student = new Student("shadowe");


echo $student->getfirst_name();


?>
