<?php


session_start();

require "../database/Database.php";
require "../models/User.php";

$db   = new Database();
$user = new User($db->connection());

// -------- Register --------
if ($_POST['form_name'] === 'register') {

    $user->register(
        $_POST['username'],
        $_POST['mobile'],
        $_FILES['img']
    );

    header("Location: ../views/auth/Login.html");
    exit;
}

// -------- Login --------
if ($_POST['form_name'] === 'login') {

    $result = $user->login(
        $_POST['username'],
        $_POST['mobile']
    );

    if (mysqli_num_rows($result) === 1) {

        $data = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $data['id'];
        $_SESSION['name']    = $data['name'];

        header("Location: ../views/posts/create-post.php");
        exit;
    }

    echo "نام کاربری یا رمز عبور اشتباه است";
}



// session_start();

// $conn = mysqli_connect("localhost", "root", "", "faridyazdani_blog");

// // -----------------ریجستر---------------
// if ($_POST['form_name'] === 'register') {

//     $username = $_POST['username'];
//     $mobile = $_POST['mobile']; 
//     $img = $_FILES['img'];

//     move_uploaded_file(
//         $img['tmp_name'],
//         "../img/profile_images/" . $img['name']
//     );

    
//      $img_name = time() . '_' . $img['name'];

//      move_uploaded_file(
//     $img['tmp_name'],
//     "../img/profile_images/" . $img_name
//       );

// $path = "img/profile_images/" . $img_name;

    
//     $query = "INSERT INTO users (name, profile, mobile)
//               VALUES ('$username', '$path', '$mobile')";

//     mysqli_query($conn, $query);

//     header("Location: ../Login.html");  
//     exit;
// }

// // -----------لاگین----------
// if ($_POST['form_name'] === 'login') {

//     $username = $_POST['username'];
//     $password = $_POST['mobile']; // رمز عبور = موبایل

//     $query = "SELECT * FROM users
//               WHERE name='$username' AND mobile='$password'";

//     $result = mysqli_query($conn, $query);

//     if (mysqli_num_rows($result) === 1) {

//         $user = mysqli_fetch_assoc($result);

//         $_SESSION['user_id'] = $user['id'];     
//         $_SESSION['name']    = $user['name'];

//         header("Location: ../create-post.php"); 
//         exit;

//     } else {
//         echo "نام کاربری یا رمز عبور اشتباه است";
//     }
// }


