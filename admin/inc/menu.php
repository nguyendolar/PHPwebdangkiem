
<div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Bảng điều khiển
                        </a>
                        <?php if( $_SESSION['chucnang'] == 1){?>
                            <a class="nav-link" href="nguoidung.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Người dùng
                            </a>
                        <?php } else if( $_SESSION['chucnang'] == 2){?>
                            <a class="nav-link" href="nguoidangky.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Người đăng ký
                            </a>
                        <?php } else if( $_SESSION['chucnang'] == 3){?>
                            <a class="nav-link" href="phuongtien.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Phương tiện
                            </a>
                        <?php } else if( $_SESSION['chucnang'] == 4){?>
                            <a class="nav-link" href="thangxe.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Kiểm định Thắng xe
                            </a>
                        <?php } else if( $_SESSION['chucnang'] == 5){?>
                            <a class="nav-link" href="sonxe.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Kiểm định Sơn xe
                            </a>
                        <?php } else if( $_SESSION['chucnang'] == 6){?>
                            <a class="nav-link" href="khoixe.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Kiểm định Khói xe
                            </a>
                        <?php } else if( $_SESSION['chucnang'] == 7){?>
                            <a class="nav-link" href="kiemduyet.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Duyệt hồ sơ
                            </a>
                        <?php } else { ?>
                        <a class="nav-link" href="nguoidung.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Người dùng
                        </a>

                        <a class="nav-link" href="nguoidangky.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Người đăng ký
                        </a>
                        <a class="nav-link" href="phuongtien.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Phương tiện
                        </a>
                        <a class="nav-link" href="nhanvien.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Nhân viên
                        </a>
                        <?php } ?>
                    </div>
                </div>

            </nav>
        </div>