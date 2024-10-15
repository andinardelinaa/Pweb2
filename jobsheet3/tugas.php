<?php
class Person {
    protected $name;

    public function __construct ($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }   
    public function getRole() {
        return $this->role;
    }
}
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
$mahasiswa = new mahasiswa("Andin Ardelina", "230102052");
$dosen = new dosen("Fijar", "G67890");

echo "Hai, Nama Saya " .$mahasiswa->getName(); 
echo " dengan NIM  " .$mahasiswa->getNim();
echo "<br>";
echo "Saya berperan sebagai :" .$mahasiswa->getRole();
echo "<br><br>";
echo "Hai, Nama Saya " .$dosen->getName(); 
echo " dengan NIDN  " .$dosen->getNidn();
echo "<br>";
echo "Saya berperan sebagai :" .$dosen->getRole();
echo "<br><br>";

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