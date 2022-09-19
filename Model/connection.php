<?php
class db{
  private $host = 'localhost';
  private $username = 'root';
  private $password = '';
  private $database = 'food_db';

  protected $conn;

  public function connect()
  {
    if(!isset($this->conn)){
      $this->conn = new mysqli($this->host,$this->username,$this->password,$this->database);
      if(!$this->conn){
        echo 'Không thể kết nối server!';
        exit;
      }
    }
    return $this->conn;
  }

  public function closedb()
  {
    if($this->conn){
      $this->conn->close();
    }
  }
}
?>