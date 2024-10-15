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
    public function getName() {
        return "Nama Siswa: " . $this->name . ", ID: " . $this->studentID;
    }
}
class Teacher extends Person {
    public $teacherID;

    public function __construct($name, $teacherID) {
        parent:: __construct($name);
        $this->teacherID = $teacherID;
    }
    public function getName() {
        return "Nama Guru: " . $this->name . ", ID: " . $this->teacherID;
    }
}
$student = new Student("Andin Ardelina", "230102052");
$teacher = new Teacher("Fijar", "G67890");

echo $student->getName(); 
echo "<br>";
echo $teacher->getName(); 

?>