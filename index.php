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
    if (isset($_GET['msg'])) {
        echo "
                    <script>
                        function Redirect() {
                        window.location = 'index.php';
                        }
                        alert('Đăng nhập thành công !') 
                        Redirect()
                    </script>
                    ";
    }
    ?>

    <!--Content-->

    <!-- Start Header Section -->
    <div class="banner">
        <div class="overlay">
            <div class="container">
                <div class="intro-text">
                    <h1>Website <span>Đăng Kiểm Ô Tô</span></h1>
                    <p>Nơi cho phép mọi người đăng kiểm Ô tô của mình<br> qua Trực tuyến</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->


    <!-- Start About Us Section -->
    <section id="about-section" class="about-section">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                      <h2>Về chúng tôi</h2>
                  </div>                        
              </div>
          </div>
          <div class="row">
             <div class="col-md-5">
                 <div class="about-img">
                     <img src="asset/images/corporate1.jpg" class="img-responsive" alt="About images">
                     <div class="head-text">
                         <p>Xin gửi tới các chủ xe, phương tiện cơ giới bảng thu phí đăng kiểm mới nhất cập nhật mới nhất năm 2021 của Cục đăng kiểm và Bộ GTVT</p>
                         <span>Website đăng kiểm xe Ô tô trực tuyến</span>
                     </div>
                 </div>
             </div>
             <div class="col-md-7">
                 <div class="about-text">
                     <p>Đăng kiểm xe ô tô là thủ tục bắt buộc và quan trọng bậc nhất cùng với đăng ký xe nếu chủ xe muốn xe lưu thông trên đường, bao gồm cả xe cũ và xe mới. Khác hoàn toàn với phí bảo trì đường bộ, nếu xe không đăng kiểm đúng hạn thì chủ xe sẽ bị cấm lưu thông và phạt rất nặng.</p>
                     <p>Đăng kiểm xe ô tô giúp các cơ quan chức năng kiểm tra xem phương tiện của bạn có đủ tiêu chuẩn để tiếp tục lưu thông trên đường hay không. Và để thực hiện công việc này, thì các cơ quan đăng kiểm sẽ thu của chủ xe một mức phí tiêu chuẩn. Tùy thuộc vào từng loại xe, mà cơ quan đăng kiểm sẽ có biểu mức thu phí đăng kiểm riêng.</p>
                 </div>
                 
                 <div class="about-list">
                     <h4>Bảng phí đăng kiểm ô tô</h4>
                     <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Loại xe</th>
                            <th scope="col">Phí đăng kiểm</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                         $query = "SELECT * FROM loaixe";
                         $result = mysqli_query($connect, $query);
                         $stt = 1;
                         while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <tr>
                            <th scope="row"><?php echo $stt ?></th>
                            <td><?php echo $arUser["tenloaixe"] ?></td>
                            <td><?php echo $arUser["giadangkiem"] ?> VND</td>
                            </tr>
                            <?php $stt++;} ?>
                        </tbody>
                        </table>
                     
                     
                 </div>
                 
             </div>
              
              
              
          </div>
      </div>
  </section>
      

    

  <?php include('inc/footer.php')?>
    <!-- Start Footer Section -->
    


   



    <!-- Sulfur JS File -->
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