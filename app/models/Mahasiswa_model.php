<?php

class Mahasiswa_model
{
  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=belajar_buku';
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  // private $mhs = [
  //   [
  //     "nama" => "Jaohar Bahy",
  //     "nrp" => "123456",
  //     "email" => "jaohar@gmail.com",
  //     "jurusan" => "Manajemen",
  //   ],
  //   [
  //     "nama" => "Budi Doremi",
  //     "nrp" => "78901",
  //     "email" => "budido@gmail.com",
  //     "jurusan" => "Akutansi",
  //   ],
  //   [
  //     "nama" => "Rendi Orton",
  //     "nrp" => "543211",
  //     "email" => "renditon@gmail.com",
  //     "jurusan" => "Perhotelan",
  //   ],
  // ];

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM belajar_buku');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
