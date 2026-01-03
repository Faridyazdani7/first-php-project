<?php
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
    }

    public function connection()
    {
        return $this->conn;
    }

}