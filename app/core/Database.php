
<?php
class Database
{
  private $host = DB_HOST;
  private $username = DB_USER;
  private $password = DB_PASS;
  private $database = DB_NAME;
  private $koneksi;

  function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    if (!$this->koneksi) {
      die("Koneksi gagal: " . mysqli_connect_error());
    }
  }

  public function get_connection()
  {
    return $this->koneksi;
  }

  function __destruct()
  {
    mysqli_close($this->koneksi);
  }
}
