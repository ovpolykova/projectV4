<?php
class Db
{
    // укажите свои учетные данные базы данных
    private $host = "localhost";
    private $db_name = "api_db";
    private $username = "root";
    private $password = "";
    public $conn;

    // получаем соединение с БД
    public function getConnect()
    {
      //  $this->conn = null;
   //  $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
     $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        return $this->conn;
        // try {
        //     $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        //     // $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        //     // $this->conn->exec("set names utf8");
        // } catch (PDOException $exception) {
        //     echo "Ошибка подключения: " . $exception->getMessage();
        // }
    }
}
?>