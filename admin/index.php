<!DOCTYPE html>
<html lang="en">

<head>
<?php include('inc/head.php')?>
</head>

<body class="sb-nav-fixed">
<?php include('inc/header.php')?>
    <div id="layoutSidenav">
    <?php include('inc/menu.php')?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                <h1 class="mt-4">Thống kê</h1>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Số lượng người dùng : 4</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Phương tiện đăng kiểm : 7</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Số lượng nhân viên : 3</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Tổng doanh thu : 17.000.000 đ</div>
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