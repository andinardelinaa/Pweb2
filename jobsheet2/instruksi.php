<?php
//mahasiswa mengambil sifat dari class pengguna
class Mahasiswa extends Pengguna {
    //atribut
    private $nim;
    private $jurusan;
    //inisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        //mengambil atribut nama dari pengguna
        parent :: __construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function tampilkanData() {
        return "Hai, Nama saya $this->nama dengan NIM $this->nim dari Jurusan $this->jurusan<br>";
    }
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
    public function aksesFitur() {
        return "Akses fitur khusus Dosen: Melihat Nilai dan mengisi KRS";
    }
}
//instansiasi objek 
$mahasiswa1 = new Mahasiswa("Andin", "230102052", "Komputer dan Bisnis");
echo "<b>Kelas dan Object </b><br>";
echo "<b>Data Awal : <br></b>";
echo $mahasiswa1->tampilkanData();
echo "<br><hr>";

echo "<b>Encapsulation </b><br>";
//menampilkan data menggunakan get
echo "Nama : ".$mahasiswa1->getNama(). "<br>";
echo "NIM : " .$mahasiswa1->getNim(). "<br>";
echo "Jurusan : " .$mahasiswa1->getJurusan(). "<br>";

//mengubah nama dan jurusan menggunakan setter
$mahasiswa1->setNama ("Andin Ardelina");
$mahasiswa1->setNim("1234567890");
$mahasiswa1->setJurusan ("Teknik Informatika");

echo "<br><b>Data Setelah perubahan: </b></br>";
echo $mahasiswa1->tampilkanData();
echo "<hr>";
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
    //override metode akseksFitur
    public function aksesFitur() {
        return "Akses fitur khusus Dosen: Mengelola mata kuliah dan penilaian.";
    }

    //method untuk menampilkan data dosen
    public function tampilkanDataDosen() {
        return "Dosen : $this->nama, Mata Kuliah: $this->mataKuliah<br>";
    }
}
//instansiasi 
echo "<b>Inheritence</b><br>";
$dosen1 = new Dosen ("Bu Andin", "Pemrograman Web");
echo $dosen1->tampilkanDataDosen();
echo "<hr>";

$dosen1 = new Dosen ("Bu Andin", "Pemrograman Web");
$mahasiswa1 = new Mahasiswa("Andin", "123456", "Teknik Informatika");
//menampilkan data Dosen
echo "<b>Polymorpism</b>";
echo "<br><b>Dosen : </b></br>";
echo $dosen1->tampilkanDataDosen();
echo $dosen1->aksesFitur(). "<br>";
echo "<br><b>Mahasiswa : </b></br>";
echo $mahasiswa1->tampilkanData();
echo $mahasiswa1->aksesFitur(). "<br><hr>";

$dosen1 = new Dosen ("Bu Andin", "Pemrograman Web");
$mahasiswa1 = new Mahasiswa("Andin", "123456", "Teknik Informatika");
//menampilkan data Dosen
echo "<b>Abstraction</b>";
echo "<br><b>Dosen : </b></br>";
echo $dosen1->tampilkanDataDosen();
echo $dosen1->aksesFitur(). "<br>";
echo "<br><b>Mahasiswa : </b></br>";
echo $mahasiswa1->tampilkanData();
echo $mahasiswa1->aksesFitur(). "<br>";
?>