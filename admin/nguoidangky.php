
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
                    <h1 class="mt-4">Danh sách người đăng ký</h1>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                        <?php if (isset($_GET['msg']) && ($_GET['msg'] = 1)){ ?>
                             <div class="alert alert-success">
                                <strong>Thành công</strong>
                            </div>
                            <?php }  ?>    
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModalAdd">
                                Thêm mới
                            </button>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Số CMND</th>
                                        <th>Email</th>
                                        <th>Ngày giờ kiểm định</th>
                                        <th>Thao tác</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Số CMND</th>
                                        <th>Email</th>
                                        <th>Ngày giờ kiểm định</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                   
                                   $query = "SELECT a.*,b.tenloaixe,b.giadangkiem FROM profile as a,loaixe as b WHERE a.loaixe = b.id ORDER BY a.id DESC";
                                   $result = mysqli_query($connect, $query);
                                   $stt = 1;
                                   while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                       $idModelDel = "exampleModalDel".$arUser["id"] ;
                                       $idModelEdit = "exampleModalEdit".$arUser["id"];
                                       $idModelInfor = "exampleModalInfor".$arUser["id"];
                                       $time = date_create($arUser["ngaydangkiem"]);
                                       $ngay = date_format($time,"Y-m-d");
                                       $gio = date_format($time,"h:i:s");
                                       $datedk = $ngay."T".$gio
                                   ?>
                                    <tr>
                                        <td><?php echo $stt ?></td>
                                        <td><?php echo $arUser["hoten"] ?></td>
                                        <td>0<?php echo $arUser["sodienthoai"] ?></td>
                                        <td><?php echo $arUser["socmnd"] ?></td>
                                        <td><?php echo $arUser["email"] ?></td>
                                        <td><?php echo $arUser["ngaydangkiem"] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#<?php echo $idModelInfor ?>">
                                                Chi tiết
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#<?php echo $idModelEdit ?>">
                                                Cập nhập
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#<?php echo $idModelDel ?>">
                                                Xóa
                                            </button>
                                            <!--Detail-->
                                            <div class="modal fade" id="<?php echo $idModelInfor ?>" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Chi tiết</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           
                                                
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Biển số</label>
                                                           <strong>:</strong>&emsp;&emsp;<?php echo $arUser["bienso"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Loại xe</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["tenloaixe"] ?>
                                                        </div>

                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Số khung số máy</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["sokhung"] ?>
                                                        </div>

                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Phí đăng kiểm</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["giadangkiem"] ?> VND
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Trạng thái</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php if($arUser["trangthai"] == 1){
                                                                        echo "Đã kiểm định";
                                                                    }else{
                                                                        echo "Chưa kiểm định";
                                                                    }?>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Họ tên</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["hoten"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Số điện thoại</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["sodienthoai"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Số CMND</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["socmnd"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Email</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["email"] ?>
                                                        </div>
                                                        <div class="">
                                                            <label for="category-film"
                                                                   class="col-form-label" style="font-weight:bold;width : 150px">Ngày đăng kiểm:</label>
                                                                   <strong>:</strong>&emsp;&emsp;<?php echo $arUser["ngaydangkiem"] ?>
                                                        </div>

                                                    </div>
                                                </div>
                                               
                                           
                                        </div>

                                    </div>
                                </div>
                            </div>
                                            <!--Dele-->
                                            <div class="modal fade" id="<?php echo $idModelDel ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Bạn chắc chắn muốn xóa ?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            Người đăng ký : <?php echo $arUser["hoten"] ?>
                                                            <form action="function.php" method="post">
                                                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $arUser["id"] ?>">
                                                                <div class="modal-footer" style="margin-top: 20px">
                                                                    <button style="width:100px" type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">
                                                                        Đóng
                                                                    </button>
                                                                    <button style="width:100px" type="submit" class="btn btn-danger" name="deletenguoidk"> Xóa</button>

                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--Dele-->
                                        </td>

                                    </tr>
                                    <div class="modal fade" id="<?php echo $idModelEdit ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cập nhập</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="function.php" method="POST" >
                                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $arUser["id"] ?>">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Biển số:</label>
                                                                <input type="text" class="form-control" id="category-film" name="bienso" value="<?php echo $arUser["bienso"] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số khung số máy:</label>
                                                                <input type="text" class="form-control" id="category-film" name="sokhung" value="<?php echo $arUser["sokhung"] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Họ tên:</label>
                                                                <input type="text" class="form-control" id="category-film" name="hoten" value="<?php echo $arUser["hoten"] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số điện thoại:</label>
                                                                <input type="text" class="form-control" id="category-film" name="sdt" value="<?php echo $arUser["sodienthoai"] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số CMND:</label>
                                                                <input type="text" class="form-control" id="category-film" name="cmnd" value="<?php echo $arUser["socmnd"] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Email:</label>
                                                                <input type="email" class="form-control" id="category-film" name="email" value="<?php echo $arUser["email"] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Ngày đăng kiểm:</label>
                                                                <input type="datetime-local" class="form-control" id="category-film" name="ngaydk" value="<?php echo $datedk ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Trạng thái:</label>
                                                                <select class="form-select" aria-label="Default select example" id="theloai" name="trangthai" required>
                                                                <?php if($arUser["trangthai"] == 0){?>
                                                                    <option value="0" selected>Chưa kiểm định </option>
                                                                    <option value="1" >Đã kiểm định</option>
                                                                <?php } else { ?>
                                                                    <option value="1" selected>Đã kiểm định </option>
                                                                    <option value="0" >Chưa kiểm định</option>
                                                                <?php } ?>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category-film"
                                                            class="col-form-label">Loại xe:</label>
                                                            <select class="form-select" aria-label="Default select example" id="theloai" name="loaixe" required>
                                                                <?php 
                                                                $querys = "SELECT * FROM loaixe";
                                                                $results = mysqli_query($connect, $querys);
                                                                while ($arUsers = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
                                                                if($arUsers["id"] == $arUser["loaixe"]){
                                                                ?>
                                                                <option value="<?php echo $arUsers["id"] ?>" selected><?php echo $arUsers["tenloaixe"] ?> - Phí kiểm định : <?php echo $arUsers["giadangkiem"] ?> VND </option>
                                                                <?php }else{?>
                                                                <option value="<?php echo $arUsers["id"] ?>" ><?php echo $arUsers["tenloaixe"] ?> - Phí kiểm định : <?php echo $arUsers["giadangkiem"] ?> VND </option>
                                                                <?php } }?>
                                                            </select>
                                                    </div>
                                                        <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="editnguoidk">Lưu</button>
                                                </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Update-->
                                    <?php $stt++;} ?>
                                    <!-- Modal Add-->
                                    <div class="modal fade" id="exampleModalAdd" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Thêm mới</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="function.php" method="POST">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Biển số:</label>
                                                                <input type="text" class="form-control" id="category-film" name="bienso" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số khung số máy:</label>
                                                                <input type="text" class="form-control" id="category-film" name="sokhung" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Họ tên:</label>
                                                                <input type="text" class="form-control" id="category-film" name="hoten" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số điện thoại:</label>
                                                                <input type="text" class="form-control" id="category-film" name="sdt" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Số CMND:</label>
                                                                <input type="text" class="form-control" id="category-film" name="cmnd" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Email:</label>
                                                                <input type="email" class="form-control" id="category-film" name="email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Ngày đăng kiểm:</label>
                                                                <input type="datetime-local" class="form-control" id="category-film" name="ngaydk" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="category-film"
                                                                    class="col-form-label">Trạng thái:</label>
                                                                <select class="form-select" aria-label="Default select example" id="theloai" name="trangthai" required>
                                                                <option value="0" selected>Chưa kiểm định </option>
                                                                <option value="1" >Đã kiểm định</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category-film"
                                                            class="col-form-label">Nội dung:</label>
                                                            <select class="form-select" aria-label="Default select example" id="theloai" name="loaixe" required>
                                                                <option value="" selected>Chọn loại xe</option>
                                                                <?php 
                                                                $query = "SELECT * FROM loaixe";
                                                                $result = mysqli_query($connect, $query);
                                                                while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                                ?>
                                                                <option value="<?php echo $arUser["id"] ?>" ><?php echo $arUser["tenloaixe"] ?> - Phí kiểm định : <?php echo $arUser["giadangkiem"] ?> VND </option>
                                                                <?php }?>
                                                            </select>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="addnguoidk">Lưu </button>
                                                </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Update-->

                                </tbody>
                            </table>
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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>