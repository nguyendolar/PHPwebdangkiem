
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('inc/head.php')?>
</head>
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
<body class="sb-nav-fixed">
<?php include('inc/header.php')?>
    <div id="layoutSidenav">
    <?php include('inc/menu.php')?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                <h1 class="mt-4">Thống kê</h1>
                <?php $slnguoidung= mysqli_num_rows($connect->query("SELECT * FROM user WHERE role_id = 2"));
                $slphuongtien= mysqli_num_rows($connect->query("SELECT * FROM profile "));
                $thatbai= mysqli_num_rows($connect->query("SELECT * FROM profile WHERE trangthai = 0 "));
                $tatca= mysqli_num_rows($connect->query("SELECT * FROM profile WHERE trangthai = 1 "));
                $thangxe= mysqli_num_rows($connect->query("SELECT * FROM profile WHERE trangthai = 2 "));
                $sonxe= mysqli_num_rows($connect->query("SELECT * FROM profile WHERE trangthai = 3 "));
                $khoixe= mysqli_num_rows($connect->query("SELECT * FROM profile WHERE trangthai = 4 "));
                $choduyet= mysqli_num_rows($connect->query("SELECT * FROM profile WHERE trangthai = 5 "));
                $koduyet= mysqli_num_rows($connect->query("SELECT * FROM profile WHERE trangthai = 7 "));
                $slnhanvien= mysqli_num_rows($connect->query("SELECT * FROM user WHERE role_id = 3"));
                $daduyet = $slphuongtien - ($choduyet + $koduyet);
                $query = "SELECT Sum(b.giadangkiem) AS 'doanhthu' FROM profile as a,loaixe as b WHERE a.loaixe = b.id";
                $result = mysqli_query($connect, $query);
                $arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)
                ?>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Số lượng người dùng : <?php echo $slnguoidung ?></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Phương tiện đăng kiểm : <?php echo $slphuongtien ?></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Số lượng nhân viên : <?php echo $slnhanvien ?></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Doanh thu : <?php echo $arUser['doanhthu'] ?> VND</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body"><strong><?php echo $choduyet ?></strong> phương tiện chờ duyệt</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body"><strong><?php echo $daduyet ?></strong> phương tiện được duyệt</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body"><strong><?php echo $koduyet ?></strong> phương tiện không duyệt</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body"><strong><?php echo $thatbai ?></strong> kiểm định thất bại</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body"><strong><?php echo $thangxe ?></strong> đã kiểm định Thắng xe</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body"><strong><?php echo $sonxe ?></strong> đã kiểm định Sơn xe</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body"><strong><?php echo $khoixe ?></strong> đã kiểm định Khói xe</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body"><strong><?php echo $tatca ?></strong> đã kiểm định tất cả</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

            </main>
            <?php include('inc/footer.php')?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>