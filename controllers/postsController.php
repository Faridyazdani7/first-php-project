<?php

session_start();

require __DIR__ ."/../vendor/autoload.php";

// require "../database/Database.php";
// require "../models/Post.php";

use App\Database\Database;
use App\models\Post;
use App\models\User;

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
