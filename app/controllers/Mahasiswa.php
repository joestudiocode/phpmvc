<?php

class Mahasiswa extends Controller
{
  public function index()
  {
    $data['judul'] = 'Daftar Buku';
    $db = new Database();
    $koneksi = $db->get_connection();
    $query = "SELECT * FROM buku";
    $result = mysqli_query($koneksi, $query);
    $data['buku'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $data['judul'] = 'Daftar Buku';

    $this->view('templates/header', $data);
    $this->view('templates/sidebar');
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }
  public function tambah()
  {
    $data['judul'] = 'Tambah Buku Baru';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('templates/sidebar');
    $this->view('mahasiswa/tambah');
    $this->view('templates/footer');
  }

  public function simpan()
  {
    if (isset($_POST['bsimpan'])) {

      $db = new Database();
      $koneksi = $db->get_connection();

      $nim = $_POST['nim'];
      $nama = $_POST['nama'];
      $jurusan = $_POST['jurusan'];
      $email = $_POST['email'];

      $query = "INSERT INTO mahasiswa (nim, nama, jurusan, email) VALUES ('$nim', '$nama', '$jurusan', '$email')";
      mysqli_query($koneksi, $query);
    }

    header('Location: ' . BASEURL . '/mahasiswa');
  }

  public function edit($id)
  {
    $data['judul'] = 'Edit Mahasiswa';
    $db = new Database();
    $koneksi = $db->get_connection();
    $query = "SELECT * FROM mahasiswa WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $data['mahasiswa'] = mysqli_fetch_assoc($result);

    $this->view('templates/header', $data);
    $this->view('templates/sidebar');
    $this->view('mahasiswa/edit', $data);
    $this->view('templates/footer');
  }

  public function update()
  {
    if (isset($_POST['bedit'])) {

      $db = new Database();
      $koneksi = $db->get_connection();

      $id = $_POST['id'];
      $nim = $_POST['nim'];
      $nama = $_POST['nama'];
      $jurusan = $_POST['jurusan'];
      $email = $_POST['email'];

      $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', email='$email' WHERE id=$id";
      mysqli_query($koneksi, $query);
    }

    header('Location: ' . BASEURL . '/mahasiswa');
  }
}
