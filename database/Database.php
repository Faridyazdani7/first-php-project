<?php
namespace App\Database;
class Database {
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect(
            "localhost",
            "root",
            "",
            "faridyazdani_blog"
        );
        // return $this->conn;
    }

    public function connection()
    {
        return $this->conn;
    }

}