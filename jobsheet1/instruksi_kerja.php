<?php
//membuatt kelas mahasiswa
class Mahasiswa {
    //atribut / properti untuk dosen
    public $nama;
    public $nim;
    public $jurusan;
    
    // Constructor untuk inisialisasi properti
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Hai, Nama saya $this->nama dengan NIM $this->nim dari Jurusan $this->jurusan<br>";
    }

    // Setter untuk mengubah nilai jurusan
    public function updateJurusan($jurusanBaru) {
            $this->jurusan = $jurusanBaru;
    }
    //setter untuk mengunabi nilai nim
    public function updateNIM ($nimBaru) {
            $this->nim= $nimBaru;
    }
}

// Instansiasi objek mahasiswa
$mahasiswa1 = new Mahasiswa("Andin", "230102052", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
echo "<br>";

// Mengubah jurusan menggunakan setter
$mahasiswa1->updateJurusan("Teknik Informatika");
echo "Data setelah Jurusan baru: <br>";
echo $mahasiswa1->tampilkanData();
echo "<br>";

// Mengubah NIM menggunakan setter
$mahasiswa1->updateNIM("230102022");
echo "Data setelah NIM baru: <br>";
echo $mahasiswa1->tampilkanData();

?>
