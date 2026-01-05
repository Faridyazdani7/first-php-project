
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/Login.html");
    exit;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ایجاد پست | Easy Shop</title>

    <link href="../../assets/style/font-awesome.css" rel="stylesheet">
    <link href="../../assets/style/bootstrap.css" rel="stylesheet">
    <link href="../../assets/style/owl.carousel.css" rel="stylesheet">
    <link href="../../assets/style/owl.theme.default.css" rel="stylesheet">
    <link href="../../assets/style/style.css" rel="stylesheet">
</head>

<body>

<!-- social -->
<div class="social">
    <ul>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-send"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    </ul>
</div>

<!-- top -->
<div class="top2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login">
                    <a href="../auth/register.html" class="mybtn"><i class="fa fa-user-plus"></i>ثبت نام</a>
                    <a href="../auth/Login.html" class="mybtn"><i class="fa fa-user-o"></i>ورود</a>
                    <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>
                    <a href="../posts/search-posts.php" class="mybtn"><i class="fa fa-file-text"></i>پست‌های کاربران</a>
                </div>
            </div>
            <div class="col-md-6">
                <form>
                    <input type="text" placeholder="کالای مورد نظر را جستجو کنید">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- menu -->
<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a href="#">کالای دیجیتال</a></li>
                    <li><a href="#">آرایشی و بهداشتی</a></li>
                    <li><a href="#">مد و پوشاک</a></li>
                    <li><a href="#">خانه و آشپزخانه</a></li>
                    <li><a href="#">اخبار</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- --------------محتوا------------- -->
<div class="container mt-200 p-30">
     <div class="row"> 
        <div class="col-md-6 offset-md-3"> 
            <div class="register-form p-30">
                 <h2 class="text-center">ایجاد پست جدید</h2> 
                 <form action="../../controllers/postsController.php" method="post" enctype="multipart/form-data"> 
                    <div class="form-group"> <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>"> 
                    <label>عنوان پست</label> <input type="text" name="title" class="form-control" required>
                     <label>عکس پست</label> <input type="file" name="img" class="form-control" required> 
                     <label>متن پست</label> <textarea name="post_body" class="form-control" rows="5" required>
                     </textarea> <input type="submit" value="ایجاد پست" class="btn btn-primary btn-block mt-3" >
                     </div>
                </form> 
                </div>
         </div>
    </div> 
</div>



<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer-description">
                    <ul>
                        <li>تضمین اصالت کالاهای فروخته شده</li>
                        <li>پاسخگویی 24 ساعته</li>
                        <li>امکان پرداخت آنلاین و در محل</li>
                        <li>خرید آسان و مطمئن</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-description2">
                    <ul>
                        <li><i class="fa fa-truck"></i>تحویل سریع</li>
                        <li><i class="fa fa-plane"></i>ارسال پیشتاز</li>
                        <li><i class="fa fa-cart-arrow-down"></i>خرید آسان</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-form">
                    <h5>عضویت در خبرنامه</h5>
                    <form>
                        <input type="email" placeholder="ایمیل">
                        <button type="submit"><i class="fa fa-envelope-o"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="copy-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                &copy; طراحی و کدنویسی SEO90
            </div>
        </div>
    </div>
</div>

<script src="../../assets/js/jquery-3.3.1.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/owl.carousel.min.js"></script>
<script src="../../assets/js/js.js"></script>

</body>
</html>

