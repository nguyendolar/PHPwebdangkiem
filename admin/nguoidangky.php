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
                                    <tr>
                                        <td>1</td>
                                        <td>Lê Văn C</td>
                                        <td>0394072435</td>
                                        <td>206314413</td>
                                        <td>levanc@gmail.com</td>
                                        <td>10/30/2021 16:30</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Cập nhập
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                Xóa
                                            </button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Lê Văn C</td>
                                        <td>0394072435</td>
                                        <td>206314413</td>
                                        <td>levanc@gmail.com</td>
                                        <td>10/30/2021 16:30</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Cập nhập
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                Xóa
                                            </button>
                                        </td>

                                    </tr>
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
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="category-film"
                                                                class="col-form-label">Username:</label>
                                                            <input type="text" class="form-control" id="category-film">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category-film"
                                                                class="col-form-label">Email:</label>
                                                            <input type="email" class="form-control" id="category-film">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category-film"
                                                                class="col-form-label">Password:</label>
                                                            <input type="password" class="form-control"
                                                                id="category-film">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category-film"
                                                                class="col-form-label">Role:</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option value="1">Khách hàng</option>
                                                                <option value="2">Nhân viên</option>
                                                                <option value="3">Admin</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Update-->
                                    <!-- Modal Update-->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cập nhập</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="category-film"
                                                                class="col-form-label">Username:</label>
                                                            <input type="text" class="form-control" id="category-film">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category-film"
                                                                class="col-form-label">Email:</label>
                                                            <input type="email" class="form-control" id="category-film">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category-film"
                                                                class="col-form-label">Password:</label>
                                                            <input type="password" class="form-control"
                                                                id="category-film">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category-film"
                                                                class="col-form-label">Role:</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option value="1">Khách hàng</option>
                                                                <option value="2">Nhân viên</option>
                                                                <option value="3">Admin</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
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