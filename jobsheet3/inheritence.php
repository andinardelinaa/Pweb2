<?php
class Person {
    protected $name;

    public function __construct ($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }   
}
class Student extends Person {
    public $studentID;

    public function __construct ($name, $studentID) {
        parent:: __construct($name);
        $this->studentID = $studentID;
    }
    public function getStudentID() {
        return $this->studentID;
    }
}
$student = new Student("Andin Ardelina", "230102052");
echo "Nama Siswa : " .$student->getName();
echo"<br>";
echo "ID : ". $student->getStudentID();
?>