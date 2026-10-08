<?php

class Person{
    public $first_name;
    public $last_name;
    public $sexe;

    public function __construct($first_name, $last_name, $sexe){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->sexe = $sexe;
    }

    protected function comeToSchool(): void {
        echo "je viens tous les jours à l'ecole";
    }

    public function presentation(): void{
        echo "hello, je m'appelle $this->first_name";
    }
}

class Pupil extends Person{
    private $schoolName;

    public function __construct($first_name, $last_name, $sexe, $schoolName){
        parent::__construct($first_name, $last_name, $sexe);
        $this->schoolName = $schoolName;
    }

    public function doHomeWork(): void {
        echo "je fais mes devois a la maison";
    }

    public function getSchoolName(): mixed{
        return $this->schoolName;
    }
}

class Teacher extends Person{
    private $listStudents = [];

    public function __construct($first_name, $last_name, $sexe, $listStudents){
        parent::__construct($first_name, $last_name, $sexe);
        $this->listStudents = $listStudents;
    }

    public function doHomeWork(): void {
        echo "je corrige les devoir";
    }

    public function presentationPupils(): void {
        foreach ($this->listStudents as $student){
            echo $student;
        }
    }
}

$student = new Pupil("inno","aziss","homme");
$teacher = new Teacher("smith","dark", "homme");

echo "<pre>";
    var_dump(get_class_methods($student));
echo "</pre>";

$student->doHomeWork();
$student->presentation();
echo $student->getSchoolName();


?>
