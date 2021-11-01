<?php
if (isset($_SESSION['User'])) {
  header("Location: index.php");
}?>
<!DOCTYPE html>

<html lang="en">

<head>

  <?php include('inc/head.php')?>

</head>

<body>

  <header class="clearfix">

    <?php include('inc/header.php')?>
  </header>
  <?php 
    if (isset($_GET['fail'])) {
        echo "
                    <script>
                        function Redirect() {
                        window.location = 'create.php';
                        }
                        alert('Đăng ký đăng kiểm thất bại !') 
                        Redirect()
                    </script>
                    ";
    }
    if (isset($_GET['msg'])) {
      echo "
                  <script>
                      function Redirect() {
                      window.location = 'create.php';
                      }
                      alert('Đăng ký đăng kiểm thành công !') 
                      Redirect()
                  </script>
                  ";
  }
    ?>
  <section id="service-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <form class="form-horizontal span4" action="checkdk.php" method="POST" >
            <div class="pricing">
                <h4>TẠO HỒ SƠ</h4>
              <div class="pricing-body">
              <div class="form-group" id="Fullname">
                  <div class="row">
                    

                    <div class="col-md-12">
                      <input class="form-control input-lg" id="Username" name="bienso" placeholder="Nhập Biển số"
                        type="text" value="" required>
                    </div>

                  </div>
                </div>
                <div class="form-group" id="Username">
                  <div class="row">
                    <div class="col-md-12">
                      <select class="form-control input-lg" id="Username" name="loaixe" required>
                          <option value="" selected>Chọn loại xe</option>
                          <?php 
                         $query = "SELECT * FROM loaixe";
                         $result = mysqli_query($connect, $query);
                         while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                          ?>
                          <option value="<?php echo $arUser["id"] ?>" ><?php echo $arUser["tenloaixe"] ?></option>
                          <?php }?>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="form-group" id="password">
                  <div class="row">
                    <div class="col-md-12">
                      <input class="form-control input-lg" id="password" name="sokhung" type="text"
                        placeholder="Nhập Số khung số máy" required>
                    </div>

                  </div>

                </div>
                <div class="form-group" id="Fullname">
                  <div class="row">
                    

                    <div class="col-md-12">
                      <input class="form-control input-lg" id="Username" name="hoten" placeholder="Nhập Họ tên"
                        type="text" value="" required>
                    </div>

                  </div>
                </div>
                <div class="form-group" id="Username">
                  <div class="row">
                    <div class="col-md-12">
                    <input class="form-control input-lg" id="Username" name="sdt" placeholder="Nhập Số điện thoại"
                        type="text" value="" required>
                    </div>
                  </div>
                </div>
                <div class="form-group" id="password">
                  <div class="row">
                    <div class="col-md-12">
                      <input class="form-control input-lg" id="password" name="cmnd" type="text"
                        placeholder="Nhập Số CMND" required>
                    </div>

                  </div>

                </div>
                <div class="form-group" id="Fullname">
                  <div class="row">
                    

                    <div class="col-md-12">
                      <input class="form-control input-lg" id="Username" name="email" placeholder="Nhập Email"
                        type="text" value="" required>
                    </div>

                  </div>
                </div>
                <div class="form-group" id="password">
                  <div class="row">
                    <div class="col-md-12">
                      <input class="form-control input-lg"  name="ngaydk" type="datetime-local" required>
                    </div>

                  </div>

                </div>
              </div>
              <div class="form-group" id="subjcode">
                  <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-6">
                      <button type="submit" name="btnLogin" class="btn btn-primary btn-lg" style="width: 100%"><i
                          class="fa fa-key"></i> Đăng ký</button>
                    </div>

                  </div>

                </div>
            </div>
          </form>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </section>





  <?php include('inc/footer.php')?>

  <script src="asset/js/jquery-2.1.3.min.js"></script>
  <script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
  <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="asset/js/owl.carousel.min.js"></script>
  <script src="asset/js/jquery.appear.js"></script>
  <script src="asset/js/jquery.fitvids.js"></script>
  <script src="asset/js/jquery.nicescroll.min.js"></script>
  <script src="asset/js/lightbox.min.js"></script>
  <script src="asset/js/count-to.js"></script>
  <script src="asset/js/styleswitcher.js"></script>

  <script src="asset/js/map.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="asset/js/script.js"></script>
  <script type="text/javascript" src="admin/dist/js/inputmask/jquery.inputmask.js" charset="utf-8"></script>
  <script src="admin/dist/js/bootstrap-datepicker.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="admin/dist/assets/demo/datatables-demo.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>


</body>

</html>