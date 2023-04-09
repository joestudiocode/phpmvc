<?php
include 'BASEURL/app/core/Database.php';

if (isset($_POST['bsimpan'])) {

  $id = $_POST['id'];
  $nim = $_POST['tnim'];
  $nama = $_POST['tnama'];
  $jurusan = $_POST['tjurusan'];
  $email = $_POST['temail'];

  $simpan = "INSERT INTO mahasiswa (id, nim, nama, jurusan, email ) VALUES ('$id','$nim', '$nama', '$jurusan','$email')";
  mysqli_query($koneksi, $simpan);

  if ($simpan) {
    echo "<script>
    alert ('Simpan data Sukses');
    document.location= 'index.php';
    </script>";
  }else{
    echo "<script>
    alert ('Simpan data gagal');
    document.location= 'index.php';
    </script>";
  }
}
