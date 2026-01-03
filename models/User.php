<?php

class User
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function register($username, $mobile, $img)
    {
        $img_name = time() . '_' . $img['name'];

        move_uploaded_file(
            $img['tmp_name'],
            "../img/profile_images/" . $img_name
        );

        $path = "img/profile_images/" . $img_name;

        $query = "INSERT INTO users (name, profile, mobile)
                  VALUES ('$username', '$path', '$mobile')";

        mysqli_query($this->conn, $query);
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM users
                  WHERE name='$username' AND mobile='$password'";

        return mysqli_query($this->conn, $query);
    }
}
