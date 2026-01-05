<?php


require "../database/Database.php";
require "../models/Post.php";

$db   = new Database();
$post = new Post($db->connection());

$post->create(
    $_POST['title'],
    $_POST['post_body'],
    $_POST['user_id'],
    $_FILES['img']
);

header("Location: ../views/posts/my-posts.php");
exit;
