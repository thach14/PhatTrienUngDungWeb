<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Bán sữa</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Theme style -->
    <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="../style.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>


        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">


            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../admin.php" class="brand-link">
            <img src="../adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Quản lý bán sữa</span>
        </a>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../adminlte/dist/img/yone.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="../index.php" class="d-block">thach14</a>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="../hangsua/list.php" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Hãng sữa
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="../khachhang/list.php" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Khách hàng
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="../sua/list.php" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Sữa
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">


                    <div class="table-wrapper mt-5 col-12">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Quản lý hãng sữa</h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success float-right" data-toggle="modal"><i
                                                class="fa fa-plus-circle"
                                                aria-hidden="true"></i><span>Thêm hãng sữa</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Mã HS</th>
                                <th>Tên hãng sữa</th>
                                <th>Địa chỉ</th>
                                <th>Điện thoại</th>
                                <th>Email</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            require_once '../model/hangsua.php';
                            $hangsua = new HangSua('cuahangsua');
                            $result = $hangsua->GetAll();
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['MaHS']; ?></td>
                                    <td><?php echo $row['TenHS']; ?></td>
                                    <td><?php echo $row['DiaChi']; ?></td>
                                    <td><?php echo $row['DienThoai']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>

                                    <td>

                                        <a href="#editEmployeeModal" class="update edit" data-toggle="modal"
                                           data-mahs="<?php echo $row["MaHS"]; ?>"
                                           data-tenhs="<?php echo $row["TenHS"]; ?>"
                                           data-diachi="<?php echo $row["DiaChi"]; ?>"
                                           data-dienthoai="<?php echo $row["DienThoai"]; ?>"
                                           data-email="<?php echo $row["Email"]; ?>"
                                        >
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="delete" data-mahs="<?php echo $row["MaHS"]; ?>" href="#deleteEmployeeModal"
                                           data-toggle="modal" >
                                            <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                            </tbody>
                        </table>

                    </div>

                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../adminlte/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/adminlte.min.js"></script>
<!--Admin js-->
<script src="sua.js"></script>

<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="user_form">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm thông tin hãng sữa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Mã HS</label>
                        <input type="text" id="mahs" name="mahs" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tên hãng sữa</label>
                        <input type="text" id="tenhs" name="tenhs" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" id="diachi" name="diachi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="tel" id="dienthoai" name="dienthoai" class="form-control" required
                               pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="1" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-success" id="btn-add">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="update_form">
                <div class="modal-header">
                    <h4 class="modal-title">Chỉnh sửa sản phẩm</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="mahs_u" name="mahs" class="form-control" required>
                    <div class="form-group">
                        <label>Tên hãng sữa</label>
                        <input type="text" id="tenhs_u" name="tenhs" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" id="diachi_u" name="diachi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="tel" id="dienthoai_u" name="dienthoai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_u" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="2" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-info" id="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>

                <div class="modal-header">
                    <h4 class="modal-title">Xóa sản phẩm</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="mahs_d" name="mahs" class="form-control">
                    <p>Bạn có chắc muốn xóa sản phẩm này không?</p>
                    <p class="text-warning"><small>Điều này không thể hoàn nguyên.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-danger" id="delete">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
