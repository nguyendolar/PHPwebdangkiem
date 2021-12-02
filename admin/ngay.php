
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
                    <div class="card mb-4 mt-4">
                        <div class="card-header">
                        <form method="POST" action="" class="register-form" id="register-form">
                        <div class="row" style="justify-content:space-around !important">
                        <div class="col-3">
                            <input type="text" class="form-control" value="Chọn ngày muốn xem" disabled/>
                        </div>
                        <div class="col-4">
                            <input type="date" class="form-control" name="ngay" required >
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-success" name="thongke" >
                                Tìm
                            </button>
                        </div>
                    </div>
                </form>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Biển số</th>
                                        <th>Loại xe</th>
                                        <th>Số khung số máy</th>
                                        <th>Phí kiểm định</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Biển số</th>
                                        <th>Loại xe</th>
                                        <th>Số khung số máy</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                   if(isset($_POST['thongke'])){
                                   $ngay = $_POST['ngay'];
                                   echo "<h4>Danh sách phương tiện đăng kiểm ngày ".$ngay."</h4>";
                                   $query = "SELECT a.*,b.tenloaixe,b.giadangkiem FROM profile as a,loaixe as b WHERE a.loaixe = b.id AND DATE(ngaydangkiem) = '{$ngay}' ORDER BY a.id DESC";
                                   $result = mysqli_query($connect, $query);
                                   $stt = 1;
                                   while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                       $idModelEdit = "exampleModalEdit".$arUser["id"];
                                       $idModelInfor = "exampleModalInfor".$arUser["id"];
                                   ?>
                                    <tr>
                                        <td><?php echo $stt ?></td>
                                        <td><?php echo $arUser["bienso"] ?></td>
                                        <td><?php echo $arUser["tenloaixe"] ?></td>
                                        <td><?php echo $arUser["sokhung"] ?></td>
                                        <td><?php echo $arUser["giadangkiem"] ?> VND</td>
                                        <td>
                                        <?php if($arUser["trangthai"] == 1){
                                              echo "Đã kiểm định tất cả";
                                          }
                                          else if($arUser["trangthai"] == 2){
                                            echo "Đã kiểm định Thắng xe";
                                          }
                                          else if($arUser["trangthai"] == 3){
                                            echo "Đã kiểm định Sơn xe";
                                          }
                                          else if($arUser["trangthai"] == 4){
                                            echo "Đã kiểm định Khói xe";
                                          }
                                          else if($arUser["trangthai"] == 5){
                                            echo "Chờ duyệt";
                                          }
                                          else if($arUser["trangthai"] == 6){
                                            echo "Đã duyệt";
                                          }
                                          else if($arUser["trangthai"] == 7){
                                            echo "Không được duyệt";
                                          }
                                          else{
                                            echo "Kiểm định thất bại";
                                          }?>
                                        </td>
                                        <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#<?php echo $idModelInfor ?>">
                                                Chi tiết
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
                                                                   <strong>:</strong>&emsp;&emsp;
                                                                   <?php if($arUser["trangthai"] == 1){
                                              echo "Đã kiểm định tất cả";
                                          }
                                          else if($arUser["trangthai"] == 2){
                                            echo "Đã kiểm định Thắng xe";
                                          }
                                          else if($arUser["trangthai"] == 3){
                                            echo "Đã kiểm định Sơn xe";
                                          }
                                          else if($arUser["trangthai"] == 4){
                                            echo "Đã kiểm định Khói xe";
                                          }
                                          else if($arUser["trangthai"] == 5){
                                            echo "Chờ duyệt";
                                          }
                                          else if($arUser["trangthai"] == 6){
                                            echo "Đã duyệt";
                                          }
                                          else if($arUser["trangthai"] == 7){
                                            echo "Không được duyệt";
                                          }
                                          else{
                                            echo "Kiểm định thất bại";
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
                                        
                                    </td>
                                        
                                    </tr>
                                    <?php $stt++;} } ?>
                                    
                                    

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