<?php
class db 
{
  private $host = 'localhost';
  private $usuario = 'root';
  private $senha = '';
  private $database = 'manutaprev';

  public function db_connect() 
  {
    $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
    if(mysqli_connect_errno()) 
    {
      echo "<p>sorry, connection problem with server</p>";
    }
    return $con;
  }
}
?>