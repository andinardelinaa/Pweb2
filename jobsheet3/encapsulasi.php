<?php
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID =$studentID;
    }

    public function getName() {
        return "Nama Siswa: " . $this->name . ", ID: " . $this->studentID;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getName() {
        return "Nama Guru: " . $this->name . ", ID: " . $this->teacherID;
    }
}

$student = new Student("Andin Ardelinaaaaa", "230102052");
// Mengubah nama dan ID siswa menggunakan setter
$student->setName("Andin Ardelina");
$student->setStudentID("230102053");

echo $student->getName() . "<br>";

?>
