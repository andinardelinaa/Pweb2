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
1. nama =nama mahasiswa
2. nim= nomor induk mahasiswa
3. jurusan = jurusan mahasiswa<br>
Dengan access modifier public, bisa digunakan darimana saja. atribut digunakan untuk menyimpan data atau keadaan dari objek.

- <h4>Methode :</h4> 
### b). Buat metode tampilkanData() dalam class Mahasiswa.
1. Method tampilkanData() untuk menampilkan data mahasiswa atribut nama, nim, dan jurusan
 ![method](https://github.com/user-attachments/assets/248e23a9-fb8b-48ad-94d2-a70ef9aea020)
### c). Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
2. Method construct, digunakan untuk menginisialisasi atribut, nama, nim, jurusan yang digunakan untuk mengatur nilai awal atribut saat objek dibuat<br>
   ![construct](https://github.com/user-attachments/assets/fc65f63b-848a-4f02-8194-229573ebbcbe)
### d). Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
5. Method updateJurusan() untuk memungkinkan perubahan jurusan
   ![update jurusan](https://github.com/user-attachments/assets/56045d39-7905-4a3b-bd46-55335313f3a5)
### e). Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
7. Methode updateNIM() untuk memungkinkan perubahan NIM
   ![update nim](https://github.com/user-attachments/assets/861a2f8a-5217-467b-8854-1eec47011231)
### f). Instansiasi objek Mahasiswa
- <b>Instansiasi</b> objek Mahasiswa, instansiasi pembentukan objek mahasiswa
   ![instansiasi](https://github.com/user-attachments/assets/0e4f0870-3476-420c-b75d-3ea4b52225a5)
### g). menggunakan metode updateJurusan() dan updateNim() untuk mengubah jurusan dan nim
- Update Jurusan dan NIM
  ![update](https://github.com/user-attachments/assets/488957b4-4a83-4fde-a247-10d94d748b79)
### h). Menampilkan hasil output
- Output
  ![mahasiswa](https://github.com/user-attachments/assets/0f80c30b-afac-44e1-bebc-e207940519c1)

<hr>

  ## Kelas Dosen

 ### a). Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
  - <h4>Atribut :</h4>
  1. nama = nama dosen
  2. NIP = nomor induk pegawai
  3. mata kuliah = mata kuliah yang diampu dosen

  - <h4>Method :</h4>
### b). Membuat constructor untuk menginisialisasi atribut nama, NIP, dan mata kuliah
  1. Construct, untuk menginisialisasi atribut nama, nip, matakuliah yang digunakan untuk mengatur nilai awal atribut saat objek dibuat<br>
     ![construct dosen](https://github.com/user-attachments/assets/2e8f1b54-732a-4145-937c-ccfdb1865940)
### c).Buat metode tampilkanDosen() untuk menampilkan informasi dosen
  3. Methode tampilkanDosen() untuk menampilkan adata dosen
     ![tampilkandosen](https://github.com/user-attachments/assets/53cbdc5b-512c-45bd-aadc-9c29eacb9420)
### d). Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untukmenampilkan informasi tersebut
  - Instansiasi Dosen
  ![instansiasi dosen](https://github.com/user-attachments/assets/245a07ac-5abc-4b6a-a841-ef340648441d)
### e). Hasil Output
- Output
  ![dosen](https://github.com/user-attachments/assets/ccfcc912-6f3b-4c71-ae26-5ee1303abadd)


# JOBSHEET 2
Dalam OOP, konsep dasar seperti class dan object
digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip- prinsip dasar OOP:

- Encapsulasi (pembungkusan)  => Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
- Inheritence (pewarisan) => kelas dapat mewarisi atribut atau properti dan metode dari kelas lain
- polymorphism => metode yang sama dapat memiliki implementasi yang berbeda dalam class yang berbeda
- Abstraction => Menyembunyikan detai implementasi dan hanya menampilkan fungsi penting







