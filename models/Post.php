<?php

class Post{
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function searchByUsername($username){
        $query="
        SELECT posts.*
        FROM posts
        JOIN users ON posts.user_id =users.id
        WHERE users.name LIKE '%$username%'
        ";

        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function userPosts($user_id){

        $query = "SELECT * FROM posts WHERE user_id = $user_id";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }

    public function create($title, $body, $user_id, $img)
    {
        $img_name = time() . '_' . $img['name'];

        // move_uploaded_file(
        //     $img['tmp_name'],
        //     "../assets/img/profile_images/" . $img_name
        // );

        // $img_path = "assets/img/profile_images/" . $img_name;

        // $query = "INSERT INTO posts (title, img_path, post_body, user_id)
        //           VALUES ('$title', '$img_path', '$body', '$user_id')";

         
        // مسیر واقعی برای ذخیره
        $upload_path = __DIR__ . "/../assets/img/profile_images/" . $img_name;
        move_uploaded_file($img['tmp_name'], $upload_path);

       // مسیر public برای نمایش
       $img_path = "/php/assets/img/profile_images/" . $img_name;

        $query = "INSERT INTO posts (title, img_path, post_body, user_id)
          VALUES ('$title', '$img_path', '$body', '$user_id')";
         
        mysqli_query($this->conn, $query);
    }
}