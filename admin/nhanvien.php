
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
                    <h1 class="mt-4">Danh sách nhân viên</h1>
                    

                    <div class="card mb-4">
                        <div class="card-body">
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                <th scope="col">Nhân viên</th>
                                <th scope="col" style="width:130px">Quản lý <br>người dùng</th>
                                <th scope="col" style="width:130px">Quản lý <br>người đăng ký</th>
                                <th scope="col" style="width:135px">Quản lý <br>phương tiện</th>
                                <th scope="col" style="width:130px">Kiểm định <br>Thắng xe</th>
                                <th scope="col" style="width:130px">Kiểm định <br>Sơn xe</th>
                                <th scope="col" style="width:130px">Kiểm định <br>Khói xe</th>
                                <th scope="col" style="width:80px">Duyệt <br>hồ sơ</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                   $querys = "SELECT * FROM user WHERE role_id = 3 ORDER BY id DESC";
                                   $results = mysqli_query($connect, $querys);
                                   while ($arUsers = mysqli_fetch_array($results, MYSQLI_ASSOC)) {?>
                                <tr>
                                <td><?php echo $arUsers["fullname"] ?></th>
                                <td><?php if($arUsers["chucnang"] == 1 ){echo "X";}?></td>
                                <td><?php if($arUsers["chucnang"] == 2 ){echo "X";}?></td>
                                <td><?php if($arUsers["chucnang"] == 3 ){echo "X";}?></td>
                                <td><?php if($arUsers["chucnang"] == 4 ){echo "X";}?></td>
                                <td><?php if($arUsers["chucnang"] == 5 ){echo "X";}?></td>
                                <td><?php if($arUsers["chucnang"] == 6 ){echo "X";}?></td>
                                <td><?php if($arUsers["chucnang"] == 7 ){echo "X";}?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>
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
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Tài khoản</th>
                                        <th>Mật khẩu</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Tài khoản</th>
                                        <th>Mật khẩu</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                   $query = "SELECT * FROM user WHERE role_id = 3 ORDER BY id DESC";
                                   $result = mysqli_query($connect, $query);
                                   $stt = 1;
                                   while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                       $idModelDel = "exampleModalDel".$arUser["id"] ;
                                       $idModelEdit = "exampleModalEdit".$arUser["id"];
                                   ?>
                                   <tr>
                                       <td><?php echo $stt ?></td>
                                       <td><?php echo $arUser["fullname"] ?></td>
                                       <td><?php echo $arUser["username"] ?></td>
                                       <td><?php echo $arUser["password"] ?></td>
                                       <td>
                                           <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                               data-bs-target="#<?php echo $idModelEdit ?>">
                                               Cập nhập
                                           </button>
                                           <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                               data-bs-target="#<?php echo $idModelDel ?>">
                                               Xóa
                                           </button>
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
                                                           Nhân viên : <?php echo $arUser["fullname"] ?>
                                                           <form action="function.php" method="post">
                                                               <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $arUser["id"] ?>">
                                                               <div class="modal-footer" style="margin-top: 20px">
                                                                   <button style="width:100px" type="button" class="btn btn-secondary"
                                                                           data-bs-dismiss="modal">
                                                                       Đóng
                                                                   </button>
                                                                   <button style="width:100px" type="submit" class="btn btn-danger" name="deletenhanvien"> Xóa</button>

                                                               </div>

                                                           </form>

                                                       </div>

                                                   </div>
                                               </div>
                                           </div>
                                           <!--Dele-->
                                       </td>

                                   </tr>
                                   <!-- Modal Update-->
                                   <div class="modal fade" id="<?php echo $idModelEdit ?>" tabindex="-1"
                                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLabel">Cập nhập</h5>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                       aria-label="Close"></button>
                                               </div>
                                               <div class="modal-body">
                                                   <form action="function.php" method="POST" >
                                                       <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $arUser["id"] ?>">
                                                       <div class="mb-3">
                                                           <label for="category-film"
                                                               class="col-form-label">Họ tên:</label>
                                                           <input type="text" class="form-control" id="category-film" name="hoten" value="<?php echo $arUser["fullname"] ?>" required >
                                                       </div>
                                                       <div class="mb-3">
                                                           <label for="category-film"
                                                               class="col-form-label">Tài khoản:</label>
                                                           <input type="text" class="form-control" id="category-film" name="taikhoan" value="<?php echo $arUser["username"] ?>" required>
                                                       </div>
                                                       <div class="mb-3">
                                                           <label for="category-film"
                                                               class="col-form-label">Mật khẩu:</label>
                                                           <input type="text" class="form-control" id="category-film" name="matkhau" value="<?php echo $arUser["password"] ?>" required>
                                                       </div>
                                                       <div class="mb-3">
                                                           <label for="category-film"
                                                               class="col-form-label">Phân quyền:</label>
                                                               <select class="form-select" aria-label="Default select example" id="theloai"  name="quyen" required>
                                                                    <option value="<?php echo $arUser["chucnang"] ?>" selected><?php if($arUser["chucnang"] == 1){
                                                                        echo "Quản lý người dùng";
                                                                    }else if($arUser["chucnang"] == 2) {
                                                                        echo "Quản lý người đăng ký";
                                                                    }else{
                                                                        echo "Quản lý phương tiện";
                                                                    }
                                                                    ?></option>
                                                                    <option value="1" >Quản lý người dùng</option>
                                                                    <option value="2" >Quản lý người đăng ký</option>
                                                                    <option value="3" >Quản lý phương tiện</option>
                                                                    <option value="4" >Kiểm định Thắng xe</option>
                                                                    <option value="5" >Kiểm định Sơn xe</option>
                                                                    <option value="6" >Kiểm định Khói xe</option>
                                                                    <option value="7" >Duyệt hồ sơ</option>
                                                                </select>
                                                       </div>
                                                       <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary"
                                                       data-bs-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn btn-primary" name="editnhanvien">Lưu</button>
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
                                       <div class="modal-dialog">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLabel">Thêm mới</h5>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                       aria-label="Close"></button>
                                               </div>
                                               <div class="modal-body">
                                                   <form action="function.php" method="POST">
                                                       <div class="mb-3">
                                                           <label for="category-film"
                                                               class="col-form-label">Họ tên:</label>
                                                           <input type="text" class="form-control" id="category-film" name="hoten" required>
                                                       </div>
                                                       <div class="mb-3">
                                                           <label for="category-film"
                                                               class="col-form-label">Tài khoản:</label>
                                                           <input type="text" class="form-control" id="category-film" name="taikhoan" required>
                                                       </div>
                                                       <div class="mb-3">
                                                           <label for="category-film"
                                                               class="col-form-label">Mật khẩu:</label>
                                                           <input type="text" class="form-control" id="category-film" name="matkhau" required>
                                                       </div>
                                                       <div class="mb-3">
                                                           <label for="category-film"
                                                               class="col-form-label">Phân quyền:</label>
                                                               <select class="form-select" aria-label="Default select example" id="theloai"  name="quyen" required>
                                                                    <option value="" selected>Chọn quyền cho nhân viên</option>
                                                                    <option value="1" >Quản lý người dùng</option>
                                                                    <option value="2" >Quản lý người đăng ký</option>
                                                                    <option value="3" >Quản lý phương tiện</option>
                                                                    <option value="4" >Kiểm định Thắng xe</option>
                                                                    <option value="5" >Kiểm định Sơn xe</option>
                                                                    <option value="6" >Kiểm định Khói xe</option>
                                                                    <option value="7" >Duyệt hồ sơ</option>
                                                                </select>
                                                       </div>
                                                       <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary"
                                                       data-bs-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn btn-primary" name="addnhanvien">Lưu </button>
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