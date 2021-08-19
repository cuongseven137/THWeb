<?php



// Tạo và trả ra kết nối CSDL cho các đối tượng khác sử dụng
class Connection
{


    /**
     * Connection constructor.
     */
    public function __construct()
    {
        // Lấy tham số cấu hình CSDL
        include_once (__DIR__ .'/../config/db_config.php');
        $this->db_params = $db_params;

    }

    /**
     * Tạo và  trả ra một kết nối
    */
    public function getConnection(){

        $conn = new mysqli($this->db_params['servername'],
                            $this->db_params['username'],
                            $this->db_params['password'],
                            $this->db_params['dbname']
        );

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //echo "Connected successfully";
        return $conn;
    }

}