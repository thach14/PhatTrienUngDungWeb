<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Web Bán Sữa</title>
    <link href="../eshopper/css/bootstrap.min.css" rel="stylesheet">
    <link href="../eshopper/css/font-awesome.min.css" rel="stylesheet">
    <link href="../eshopper/css/prettyPhoto.css" rel="stylesheet">
    <link href="../eshopper/css/price-range.css" rel="stylesheet">
    <link href="../eshopper/css/animate.css" rel="stylesheet">
    <link href="../eshopper/css/main.css" rel="stylesheet">
    <link href="../eshopper/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../eshopper/js/htlogo pull-leftml5shiv.js"></script>
    <script src="../eshopper/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../eshopper/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="../eshopper/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="../eshopper/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="../eshopper/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../eshopper/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 0379501403</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> ngocthach14032000@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="../index.php"><img src="../eshopper/images/home/logo.jpg" alt=""/></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">

                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="../index.php" class="active">Home</a></li>
                            <li><a href="khachhang/list.php">Khách hàng</a></li>
                            <li><a href="hangsua/list.php">Hãng sữa</a></li>
                            <li><a href="sua/list.php">Sản phẩm sữa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Tìm kiếm"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">


                    <div class="shipping text-center"><!--shipping-->
                        <img src="../eshopper/images/home/yone.jpg" alt="" ">
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <?php
                            isset($_GET['id']) ? $id = $_GET['id'] : $id = 0;
                            require_once '../model/sua.php';
                            $sua = new Sua('cuahangsua');
                            $result = $sua->GetByID($id);
                            ?>
                            <img src="<?php echo $result['image_path'] ?>" style="object-fit: cover">

                        </div>


                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="images/product-details/new.jpg" class="newarrival" alt="">
                            <h2><?php echo $result['TenSua'] ?></h2>
                            <p>Loại: <?php echo $result['LoaiSua'] ?></p>
                            <img src="../eshopper/images/product-details/rating.png" alt="">
                            <span>
									<span><?php echo number_format($result['DonGia']) ?> VND</span>

								</span>
                            <p><b>Trọng lượng:</b> <?php echo $result['TrongLuong'] ?> gram</p>
                            <p><input type="button" class="btn btn-info" onclick="window.history.go(-1)" value="Quay lại"></input></p>

                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->


            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>ĐẠI HỌC ĐÀ LẠT
          </h6>
          <p>
            Trung tâm công nghệ thông tin Đại học Đà Lạt
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="www.facebook.com/fb.thach14" class="text-reset" target="_blank">Facebook</a>
          </p>
          <p>
            <a href="https://www.youtube.com/watch?v=fC4ugFlSDaM&t=8s" target="_blank" class="text-reset">Zalo</a>
          </p>
          <p>
            <a href=https://www.youtube.com/watch?v=fC4ugFlSDaM&t=8s" target="_blank" class="text-reset">YouTube</a>
          </p>
          <p>
            <a href="https://github.com/thach14" class="text-reset" target="_blank">Github</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> 01 Phù Đổng Thiên Vương - Phường 8 - Đà Lạt</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            ngocthach14032000@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 84 585 499 949</p>
          <p><i class="fas fa-print me-3"></i> + 84 379 501 403</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://github.com/thach14/">github.com/thach14</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<script src="../eshopper/js/jquery.js"></script>
<script src="../eshopper/js/bootstrap.min.js"></script>
<script src="../eshopper/js/jquery.scrollUp.min.js"></script>
<script src="../eshopper/js/price-range.js"></script>
<script src="../eshopper/js/jquery.prettyPhoto.js"></script>
<script src="../eshopper/js/main.js"></script>
</body>
</html>