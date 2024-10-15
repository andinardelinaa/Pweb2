# PRAKTIKUM WEB 2
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang berfokus pada konsep objek. OOP dirancang untuk memodelkan dunia nyata dengan menggunakan objek yang memiliki data (atribut) dan perilaku (metode). Ini membuat perangkat lunak lebih modular, mudah dipelihara, dan dapat digunakan kembali.
# JOBSHEET 1
Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek
(OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek,
sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas
dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat
digunakan kembali.<br>

- Kelas adalah struktur atau blueprint yang mendefinisikan atribut dan methode yang dimiliki suatu objek.
- Atribut atau properti adalah variabel yang menyimpan data untuk objek
- metode adalah fungsi yang ditentukan dalam kelaas yang dapat dipanggil oleh objek
- Objek adalah instansiasi atau pembentukan dari kelas yang memiliki atribut dan methode yang didefinisikan dalam kelas.
<hr>
<h2>IMPLEMENTASI KELAS</h2>

## Kelas Mahasiswa

### a). Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan

- <h4>Atribut</h4> 
```php
<?php
class Mahasiswa {
    //atribut / properti untuk dosen
    public $nama;
    public $nim;
    public $jurusan;
 ?>
 ```
Dengan access modifier public, bisa digunakan darimana saja. atribut digunakan untuk menyimpan data atau keadaan dari objek.

- <h4>Methode :</h4> 
### b). Buat metode tampilkanData() dalam class Mahasiswa.
Method tampilkanData() untuk menampilkan data mahasiswa atribut nama, nim, dan jurusan
  ```php
<?php
 public function tampilkanData() {
        return "Hai, Nama saya $this->nama dengan NIM $this->nim dari Jurusan $this->jurusan<br>";
    }
   ?>
   ```
### c). Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
Method construct, digunakan untuk menginisialisasi atribut, nama, nim, jurusan yang digunakan untuk mengatur nilai awal atribut saat objek dibuat<br>
```php
<?php
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
?>
```
### d). Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
Method updateJurusan() untuk memungkinkan perubahan jurusan
```php
<?php
    public function updateJurusan($jurusanBaru) {
            $this->jurusan = $jurusanBaru;
    }
   ?>
```
### e). Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
Methode updateNIM() untuk memungkinkan perubahan NIM
```php
<?php
 public function updateNIM ($nimBaru) {
            $this->nim= $nimBaru;
    }
?>
```
### f). Instansiasi objek Mahasiswa
<b>Instansiasi</b> objek Mahasiswa, instansiasi pembentukan objek mahasiswa
 ```php
<?php
$mahasiswa1 = new Mahasiswa("Andin", "230102052", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
echo "<br>";
?>
```
### g). menggunakan metode updateJurusan() dan updateNim() untuk mengubah jurusan dan nim
Update Jurusan dan NIM
```php
<?php
$mahasiswa1->updateJurusan("Teknik Informatika");
echo "Data setelah Jurusan baru: <br>";
echo $mahasiswa1->tampilkanData();
echo "<br>";

$mahasiswa1->updateNIM("230102022");
echo "Data setelah NIM baru: <br>";
echo $mahasiswa1->tampilkanData();
?>
```
### h). Coding
![coding mahasiswa](https://github.com/user-attachments/assets/63461b02-c356-4281-ad29-542feddfbcdf)

### i). Menampilkan hasil output
 ![hasil instruksi](https://github.com/user-attachments/assets/1aa02483-39f8-46e5-ab7d-6a7401196e28)


<hr>

  ## Kelas Dosen

 ### a). Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.

- <h4>Atribut :</h4>
```php
<?php
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;
}
?>
```
  - <h4>Method :</h4>
### b). Membuat constructor untuk menginisialisasi atribut nama, NIP, dan mata kuliah
Construct => untuk menginisialisasi atribut nama, nip, matakuliah yang digunakan untuk mengatur nilai awal atribut saat objek dibuat<br>
```php
<?php 
public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
 ?>
 ```
### c).Buat metode tampilkanDosen() untuk menampilkan informasi dosen
Methode tampilkanDosen() untuk menampilkan data dosen
```php
<?php
public function tampilkanDosen() {
        return "Hai, Nama saya $this->nama dengan NIP $this->nip mengampu matakuliah $this->mataKuliah.";
    }
?>
```
### d). Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untukmenampilkan informasi tersebut
Instansiasi atau pembentukan data Dosen
 ```php
<?php
$dosen1 = new Dosen("Andin Ardelina", "123456789012", "Praktikum Web");
echo $dosen1->tampilkanDosen();
echo "<br>";
?>
```
### e). Coding
![coding dosen](https://github.com/user-attachments/assets/3eda76e5-d2b2-47ba-92f2-5f51bcc0ed7d)
### f). Hasil Output
![hasil tugas1](https://github.com/user-attachments/assets/da0ff367-a3e6-4e5e-bdd7-934394c8c637)



# JOBSHEET 2
Dalam OOP, konsep dasar seperti class dan object
digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip- prinsip dasar OOP:

- Encapsulasi (pembungkusan)  => Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
- Inheritence (pewarisan) => kelas dapat mewarisi atribut atau properti dan metode dari kelas lain
- polymorphism => metode yang sama dapat memiliki implementasi yang berbeda dalam class yang berbeda
- Abstraction => Menyembunyikan detai implementasi dan hanya menampilkan fungsi penting
<hr>

## Instruksi 
## 1. Membuat Class dan Object
### a). Membuat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
```php
<?php
class Mahasiswa {
    //atribut / properti untuk dosen
    public $nama;
    public $nim;
    public $jurusan;
 ?>
 ```
### b). Buat metode tampilkanData() dalam class Mahasiswa.
Method tampilkanData() untuk menampilkan data mahasiswa atribut nama, nim, dan jurusan
  ```php
<?php
 public function tampilkanData() {
        return "Hai, Nama saya $this->nama dengan NIM $this->nim dari Jurusan $this->jurusan<br>";
    }
   ?>
   ```
### c). Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
<b>Instansiasi</b> objek Mahasiswa, instansiasi pembentukan objek mahasiswa
 ```php
<?php
$mahasiswa1 = new Mahasiswa("Andin", "230102052", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
echo "<br>";
?>
```
## 2. Encapsulasi 
### a). Ubah atribut dalam class Mahasiswa menjadi private
```php
<?php
//mahasiswa mengambil sifat dari class pengguna
class Mahasiswa {
    //atribut
    private $nama;
    private $nim; 
    private $jurusan;
 ?>
 ```
mengubah atribut menjadi privat, hanya dapat diakses oleh kelas itu sendiri
### b). Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
```php
<?php
public function getNama() {
        return $this->nama;
    }
    public function setNama($nama) {
        $this->nama =$nama;
    }
    public function getNim() {
        return $this->nim;
    }
    public function setNim($nim) {
        $this->nim =$nim;
    }
    public function getJurusan() {
        return $this->jurusan;
    }
    public function setJurusan($jurusan) {
        $this->jurusan =$jurusan;
    }
?>
```
### c). Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
```php
<?php
echo "Nama : ".$mahasiswa1->getNama(). "<br>";
echo "NIM : " .$mahasiswa1->getNim(). "<br>";
echo "Jurusan : " .$mahasiswa1->getJurusan(). "<br>";

//mengubah nama dan jurusan menggunakan setter
$mahasiswa1->setNama ("Andin Ardelina");
$mahasiswa1->setNim("1234567890");
$mahasiswa1->setJurusan ("Teknik Informatika");

echo "<br><b>Data Setelah perubahan: </b></br>";
echo $mahasiswa1->tampilkanData();
?>
```
## 3. Inheritence
### a). Buat class Pengguna dengan atribut nama dan metode getNama().
```php
<?php
class Pengguna  {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
    public function getNama() {
        return $this->nama;
    }
}
?>
```
### b). Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
```php
<?php
class Dosen extends Pengguna{
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent :: __construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //getter untuk mata kuliah
    public function getMatakuliah() {
        return $this->mataKuliah;
    }
    //method untuk menampilkan data dosen
    public function tampilkanDataDosen() {
        return "Dosen : $this->nama, Mata Kuliah: $this->mataKuliah<br>";
    }
}
?>
```
### c). Instansiasi objek dari class Dosen dan tampilkan data dosen.
```php
<?php
$dosen1 = new Dosen ("Bu Andin", "Pemrograman Web");
echo "<br><b>Dosen : </b></br>";
echo $dosen1->tampilkanDataDosen();
?>
```
## 4. Polymorphism
### a). Buat class Pengguna dengan metode aksesFitur().
```php
<?php
 public function aksesFitur() {
        return "Akses fitur khusus Dosen: Mengelola mata kuliah dan penilaian.";
    }
?>
```
### b). Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
aksesFitur() pada Dosen
 ```php
<?php public function aksesFitur() {
        return "Akses fitur khusus Dosen: Mengelola mata kuliah dan penilaian.";
    }
?>
```
aksesFitur() pada Mahasiswa
```php
<?php
public function aksesFitur() {
        return "Akses fitur khusus Dosen: Melihat Nilai dan mengisi KRS";
    }
?>
```
### c). Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
```php
<?php
$dosen1 = new Dosen ("Bu Andin", "Pemrograman Web");
$mahasiswa1 = new Mahasiswa("Andin", "123456", "Teknik Informatika");
//menampilkan data Dosen
echo "<br><b>Dosen : </b></br>";
echo $dosen1->tampilkanDataDosen();
echo $dosen1->aksesFitur(). "<br>";
echo "<br><b>Mahasiswa : </b></br>";
echo $mahasiswa1->tampilkanData();
echo $mahasiswa1->aksesFitur(). "<br>";
?>
```
## 5. Abstraction
### a). Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
```php
<?php
abstract class Pengguna  {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
    public function getNama() {
        return $this->nama;
    }
    abstract public function aksesFitur();
 }
 ?>
 ```
### b). Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
menghapus isi abstract function aksesFitur() yang ada pada class pengguna, dan anakan kelas yang akan menggunakan wajib mengoverride
 ```php
<?php
abstract public function aksesFitur();
?>
```
dalam class mahasiswa mengoveride
 ```php
<?php
 public function aksesFitur() {
        return "Akses fitur khusus Dosen: Melihat Nilai dan mengisi KRS";
    }
?>
```
dalam class Dosen mengoveride
 ```php
<?php
 public function aksesFitur() {
        return "Akses fitur khusus Dosen: Mengelola mata kuliah dan penilaian.";
    }
?>
```

### c). Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
```php
<?php
$dosen1 = new Dosen ("Bu Andin", "Pemrograman Web");
$mahasiswa1 = new Mahasiswa("Andin", "123456", "Teknik Informatika");
//menampilkan data Dosen
echo "<br><b>Dosen : </b></br>";
echo $dosen1->tampilkanDataDosen();
echo $dosen1->aksesFitur(). "<br>";
echo "<br><b>Mahasiswa : </b></br>";
echo $mahasiswa1->tampilkanData();
echo $mahasiswa1->aksesFitur(). "<br>";
?>
```
### d). Coding
![1](https://github.com/user-attachments/assets/88802b76-9a3a-4178-b757-9024a2785270)
![2](https://github.com/user-attachments/assets/764855d5-f177-45b7-9bae-ad7c199d5ae5)
### e). Output
![3](https://github.com/user-attachments/assets/c2fea147-b028-4dcf-8c28-858d368df659)
<hr>

# JOBSHEET 3
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang mengorganisir kode dalam bentuk objek yang mencerminkan entitas dunia nyata. Konsep ini mengedepankan penggunaan objek untuk merancang perangkat lunak, dengan fokus pada pengembangan sistem yang lebih modular, terstruktur, dan mudah dikelola. . Konsep-konsep seperti Inheritance,
Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat
OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode
yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

# INSTRUKSI
## Inheritence
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan
metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan
menciptakan hubungan hierarkis antara kelas.
### a). Buat kelas Person dengan atribut name dan metode getName().
```php
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
```
### b). Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
```php
<?php
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
?>
```
### c). Instansiasi atau pembentukan objek
```php
<?php
$student = new Student("Andin Ardelina", "230102052");
echo "Nama Siswa : " .$student->getName();
echo"<br>";
echo "ID : ". $student->getStudentID();
?>
```
### d). Inheritence.php

- Coding
  ![inheritence](https://github.com/user-attachments/assets/ddc89599-76b1-46f5-a595-db7e2bbfb0fe)

- Output<br>
 ![hasil inher](https://github.com/user-attachments/assets/82723809-996e-40d7-943f-bf835db70439)



## Polymorpishm
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat
diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.

### a). Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut teacherID.
```php
<?php
class Teacher extends Person {
    public $teacherID;

    public function __construct($name, $teacherID) {
        parent:: __construct($name);
        $this->teacherID = $teacherID;
    }
}
```
### b). Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda.
Overide methode getName() di class Teacher
```php
<?php
public function getName() {
        return "Nama Guru: " . $this->name . ", ID: " . $this->teacherID;
    }
?>
```
Overide methode getName() di class Student
```php
<?php
public function getName() {
        return "Nama Siswa: " . $this->name . ", ID: " . $this->studentID;
    }
?>
```
### c). Instansiasi atau pembentukan objek 
```php
<?php
$student = new Student("Andin Ardelina", "230102052");
$teacher = new Teacher("Fijar", "G67890");

echo $student->getName(); 
echo "<br>";
echo $teacher->getName();
?>
```
### d). polymorpishm.php

- Coding
  ![poly](https://github.com/user-attachments/assets/893aef2c-0181-4c7c-9aa5-c02b2f0ec8f2)

- Output<br>
![hasil poly](https://github.com/user-attachments/assets/b6e89469-164f-4030-bbca-6ac4240d7787)


## Encapsulation
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya
membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal
tetap aman dari perubahan tak terduga.
### a). Ubah atribut name dan studentID dalam kelas Student menjadi private.
 ```php
<?php
private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
?>
```
### b). Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID.
```php
<?php
 public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    public function getName() {
        return "Nama Siswa: " . $this->name . ", ID: " . $this->studentID;
    }

    public function setName($name) {
        $this->name = $name;
    }
?>
```
### c). Instansiasi atau pembentukan objek 
```php
<?php
$student = new Student("Andin Ardelinaaaaa", "230102052");
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br>";

// Mengubah nama dan ID siswa menggunakan setter
$student->setName("Andin Ardelina");
$student->setStudentID("230102053");

echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br>";
?>
```
### d). Encapsulation.php

- Coding
  ![encap1](https://github.com/user-attachments/assets/6da31509-a1e3-4df9-b675-4295cfa14cc4)
  ![encap2](https://github.com/user-attachments/assets/50f68a79-ae45-44c1-991a-e1b8429da4bc)

- Output<br>
![hasil encap](https://github.com/user-attachments/assets/eb7a6c5b-2db9-452a-b00a-503509e81210)

## Abstraction
Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.

### a). Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
```php
<?php
// Kelas abstrak Course
abstract class Course {
    abstract public function getCourseDetail();
}
?>
```
### b). Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan getCourseDetails() untuk memberikan detail yang berbeda.
```php
<?php

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
?>
```
### c). Instansiasi objek
```php
<?php 
$online = new OnlineCourse();
$offline = new OfflineCourse();

// Output
echo $online->getCourseDetail();
echo "<br>";
echo $offline->getCourseDetail();
?>
```
### d). abstacrtion.php

- Coding
  ![abstrak](https://github.com/user-attachments/assets/5082a9f1-882c-4406-8410-259257324e7d)

- Output<br>
![hasil abstrak](https://github.com/user-attachments/assets/8451ed61-bd44-4d15-81ec-dc3db1bb05a9)

# TUGAS 
### a). Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa
```php
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
class Mahasiswa extends Person {
    public $nim;

    public function __construct ($name, $nim){
        parent :: __construct($name);
        $this->nim = $nim;
    }
    public function getNim() {
        return $this->nim;
    }
}
class Dosen extends Person {
    public $nidn;

    public function __construct ($name, $nidn){
        parent :: __construct($name);
        $this->nidn = $nidn;
    }
    public function getNidn() {
        return $this->nidn;
    }
}
?>
```
### b). Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
class mahasiswa diwarisi oleh class person dan menambah atribut nim
```php
<?php
class Mahasiswa extends Person {
    private $nim;

    public function __construct ($name, $nim){
        parent :: __construct($name);
        $this->nim = $nim;
    }
    public function getNim() {
        return $this->nim;
    }
    public function getRole() {
        return " Mahasiswa";
    }
}
?>
```
class Dosen diwarisi oleh class person dan menambah atribut nidn
```php
<?php
class Dosen extends Person {
    private $nidn;

    public function __construct ($name, $nidn){
        parent :: __construct($name);
        $this->nidn = $nidn;
    }
    public function getNidn() {
        return $this->nidn;
    }
    public function getRole() {
        return " Dosen ";
    }
}
?>
```
### c). Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda
menambahkan getRole() di class person
```php
<?php
public function getRole() {
        return $this->role;
    }
?>
```
override methode getRole() di class Dosen
```php
<?php
 public function getRole() {
        return " Dosen ";
    }
?>
```
override methode getRole() di class Mahasiswa
```php
<?php
 public function getRole() {
        return " Mahasiswa ";
    }
?>
```
### d).Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.
dengan mengubah access modifier public menjadi privaat di atribut nim yang ada pada kelas mahasiswa dan nidn pada kelas dosen

- pada kelas Dosen 
```php
<?php
class Dosen extends Person {
    private $nidn;
}
?>
```

- pada kelas Mahasiswa 
```php
<?php
class Dosen extends Person {
    private $nidn;
    }
?>
```
### e). Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```php
<?php
abstract class Jurnal {
    abstract public function kelolaPengajuan();
}

class JurnalDosen extends Jurnal {
    public function kelolaPengajuan() {
        return "Pengajuan Jurnal Oleh dosen dan akan melalui proses review editor.";
    }
}
class JurnalMahasiswa extends Jurnal {
    public function kelolaPengajuan()  {
        return "Pengajuan Jurnal Oleh Mahasiswa dan akan melalui proses review editor.";
    }
}
//pembentukan objek
$jurnalDosen = new JurnalDosen();
echo $jurnalDosen->kelolaPengajuan(). "\n";
echo"<br>";
$jurnalMahasiswa = new JurnalMahasiswa();
echo $jurnalMahasiswa->kelolaPengajuan(). "\n";
?>
```
### f). tugas.php

- Coding
  ![tugas1](https://github.com/user-attachments/assets/dcefd102-579e-4a04-92a8-2deee9e30572)
  ![tugas1 2](https://github.com/user-attachments/assets/7ec1a0dd-9925-42a4-8c53-fc5540bfbadf)


- Output
![hasil tugas1](https://github.com/user-attachments/assets/b7d7ff73-e1fb-4f44-a558-ddfbfdb564fb)

