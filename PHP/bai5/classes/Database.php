<?php


class Database
{

    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'vnskills';
    public $conn;

    /**
     * Database constructor.
     * @param string $servername
     * @param string $username
     * @param string $password
     * @param string $dbname
     */
    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die('Không kết nối được tới CSDL: ' . $this->conn->connect_error);
        }else {
            //echo 'Đã kết nối thành công, chiến thôi!';
        }

        return $this->conn;
    }

    public function Close(){
        $this->conn->close();
    }

}