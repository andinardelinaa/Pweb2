<?php
// Kelas abstrak Course
abstract class Course {
    abstract public function getCourseDetail();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {

    public function getCourseDetail() {
        return "Ini adalah kursus Online" ;
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {

    public function getCourseDetail() {
        return "Ini adalah kursus Offline" ;
    }
}

// Instansiasi objek
$online = new OnlineCourse();
$offline = new OfflineCourse();

// Output
echo $online->getCourseDetail();
echo "<br>";
echo $offline->getCourseDetail();
?>
