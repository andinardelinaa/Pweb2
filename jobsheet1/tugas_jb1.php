<?php
//membuat kelas dosen
class Dosen {
    //atribut /properti dalam kelas dosen
    public $nama;
    public $nip;
    public $mataKuliah;
    
    // Constructor untuk inisialisasi properti
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Method untuk menampilkan data dosen
    public function tampilkanDosen() {
        return "Hai, Nama saya $this->nama dengan NIP $this->nip mengampu matakuliah $this->mataKuliah.";
    }
}

// Instansiasi objek Dosen
$dosen1 = new Dosen("Andin Ardelina", "123456789012", "Praktikum Web");
echo $dosen1->tampilkanDosen();
echo "<br>";
?>
