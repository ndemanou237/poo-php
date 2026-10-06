<?php

class Student {
    private $first_name;
    // $first_name = "shadow";

    public function getfirst_name(): mixed {
        return $this->first_name;
    }

    public function setFirst_name($value): void {
        $this->first_name = $value;
    }

    private function calculateAverageScore(): void{

    }

    public function getAverageSocre(): void {
        return $this->calculateAverageScore();
    }
}

$student = new Student;

$student->setFirst_name("shadow");
echo $student->getfirst_name();


?>
