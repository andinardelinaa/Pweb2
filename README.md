# PRAKTIKUM WEB 2
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
## Abstraction
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
menghapus isi abstrac function yang ada pada class pengguna, dan anakan kelas yang akan menggunakan wajib mengoverride
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













