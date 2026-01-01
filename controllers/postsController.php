<?php

$conn = mysqli_connect("localhost", "root", "", "faridyazdani_blog");

$title     = $_POST['title'];
$post_body = $_POST['post_body'];
$user_id   = $_POST['user_id'];
$img       = $_FILES['img'];


$img_name = time() . '_' . $img['name'];

move_uploaded_file(
    $img['tmp_name'],
    "../img/profile_images/" . $img_name
);

$img_path = "img/profile_images/" . $img_name;

$query = "INSERT INTO posts (title, img_path, post_body, user_id)
          VALUES ('$title', '$img_path', '$post_body', '$user_id')";

mysqli_query($conn, $query);

header("Location: ../my-posts.php");
exit;


$query = "INSERT INTO posts (title, img_path, post_body, user_id)
          VALUES ('$title', '$img_path', '$post_body', '$user_id')";

mysqli_query($conn, $query);

header("Location: ../my-posts.php");
exit;
