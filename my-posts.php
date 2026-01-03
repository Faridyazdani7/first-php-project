<?php
session_start();

require "database/Database.php";
require "models/Post.php";

$db   = new Database();
$post = new Post($db->connection());

$posts = $post->userPosts($_SESSION['user_id']);
?>

<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Easy Shop</title>
      <link href="style/font-awesome.css" rel="stylesheet" type="text/css">
      <link href="style/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="style/owl.carousel.css" rel="stylesheet" type="text/css">
      <link href="style/owl.theme.default.css" rel="stylesheet" type="text/css">
      <link href="style/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="social">
         <ul>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-send"></i></a></li>
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
         </ul>
      </div>
      <!---------------------------------->      
      <div class="top2">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="login">
                     <a href="register.html" class="mybtn"><i class="fa fa-user-plus"></i>ثبت نام</a>
                     <a href="Login.html" class="mybtn"><i class="fa fa-user-o"></i>ورود</a>
                     <a href="#" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد</a>
                     <a href="search-posts.php" class="mybtn"><i class="fa fa-cart-arrow-down"></i>پست های کاربران</a>  				
                  </div>
               </div>
               <div class="col-md-6">
                  <form action="" >
                     <input type="text" placeholder="کالای مورد نظر را جستجو کنید">
                     <button type="submit" ><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!--top2-->      
      <!---------------------------------->        
      <div class="main-menu">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <ul>
                     <li>
                        <a href="#">کالای دیجیتال</a>
                        <ul>
                           <li><a href="#">گوشی موبایل</a></li>
                           <li><a href="#">تبلت</a></li>
                           <li><a href="#">لپ تاپ</a></li>
                           <li><a href="#">نمایشگر</a></li>
                           <li><a href="#">دوربین عکاسی</a></li>
                           <li><a href="#">لوازم جانبی رایانه</a></li>
                           <li><a href="#">لوازم جانبی موبایل</a></li>
                           <li><a href="#">سایر</a></li>
                        </ul>
                     </li>
                     <li><a href="#">آرایشی و بهداشتی</a></li>
                     <li>
                        <a href="#">مد و پوشاک</a>
                        <ul>
                           <li><a href="#">لباس فصل</a></li>
                           <li><a href="#">ساعت  مچی</a></li>
                           <li><a href="#">بدلیجات</a></li>
                        </ul>
                     </li>
                     <li><a href="#">خانه و آشپزخانه</a></li>
                     <li><a href="#">ابزار اداری</a></li>
                     <li><a href="#">اسباب بازی</a></li>
                     <li>
                        <a href="#">اخبار</a>
                        <ul>
                           <li><a href="#">تکنولوژی</a></li>
                           <li><a href="#">علم و دانش</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!----------------------------------> 
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="slider-box">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="col-md-6" style="padding-top: 20px;">
                              <h4>Canon 638044</h4>
                              <span>دوربین کانن سری 6</span>
                              <p>دوربین کانن از سری 6 با لنز همراه.قابلیت تصویر برداری اچ دی.قابلیت تنظیم در حالت شب . دارای دو عدد باتری اضافی</p>
                           </div>
                           <div class="col-md-6">
                              <img src="img/p20lite-listimage-black.png" class="w-75" >
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="col-md-6" style="padding-top: 20px;">
                              <h4>Huawei Tab G45</h4>
                              <span>تبلت جی 5 هوآوی</span>
                              <p>تبلت 10 اینج هوآوی . با قابلیت نصب سه عدد سیمکارت همزمان . دارای شبکه فورجی و اتصال سریع . دارای باتری اتمی و دوربین 13 مگاپیکسل</p>
                           </div>
                           <div class="col-md-6">
                              <img src="img/p20lite-listimage-black.png" class="w-75" >
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--slider-box-->
            </div>
         </div>
      </div>
      <!----------------------------------> 



<!-- ------------محتوا------------- -->
<?php
// $conn = mysqli_connect("localhost", "root", "", "faridyazdani_blog");
// session_start();

// $user_id = $_SESSION['user_id'];

// $query = "SELECT * FROM posts WHERE user_id = $user_id";
// $result = mysqli_query($conn, $query);

// $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>




<div class="container mt-4">
  <div class="row">

    <?php foreach ($posts as $post): ?>
      <div class="col-md-4">
        <div class="blog-content user-post">

          <figure>
            <img src="<?= htmlspecialchars($post['img_path']) ?>" class="w-100">
          </figure>

          <h5><?= htmlspecialchars($post['title']) ?></h5>

          <p>
            <?= mb_substr(strip_tags($post['post_body']), 0, 120) ?>...
          </p>

          <a href="#" class="mybtn">
            ادامه مطلب »
          </a>

        </div>
      </div>
    <?php endforeach; ?>
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

<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/js.js"></script>

</body>
</html>
