<!-- Start Top Bar -->
<?php include('inc/connect.php'); ?>
        <!-- End Top Bar -->

        <!-- Start  Logo & Naviagtion  -->
        <div class="navbar navbar-default navbar-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- End Toggle Nav Link For Mobiles -->
                    <a class="navbar-brand" href="">WEBSITE</a>
                </div>
                <div class="navbar-collapse collapse">

                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="" href="index.php">Trang chủ</a>
                        </li>
                        <?php if (isset($_SESSION['User'])) {
                            
                            ?>
                        <li>
                            <a class="" href="#">Xin chào, <?php echo $_SESSION['fullname'] ?></a>
                        </li>
                        <li>
                            <a class="" href="create.php">Tạo hồ sơ</a>
                        </li>
                        <li>
                            <a class="" href="logout.php">Đăng xuất</a>
                        </li>
                        <?php }else { ?>
                        <li>
                            <a class="" href="login.php">Đăng nhập</a>
                        </li>
                        <li>
                            <a class="" href="register.php">Đăng ký</a>
                        </li>
                        <?php }?>
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
        </div>
        <!-- End Header Logo & Naviagtion -->