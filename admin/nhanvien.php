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
                                <th scope="col">Chức năng 1</th>
                                <th scope="col">Chức năng 2</th>
                                <th scope="col">Chức năng 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>nhân viên a</th>
                                <td>X</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>nhân viên b</th>
                                <td></td>
                                <td>X</td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>nhân viên c</th>
                                <td></td>
                                <td></td>
                                <td>X</td>
                                </tr>
                            </tbody>
                            </table>
                            <div class="card-header">

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
                                    <tr>
                                        <td>1</td>
                                        <td>Đoàn Ngọc Nguyên</td>
                                        <td>nguyennguyentd</td>
                                        <td>nguyen123hacker</td>
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
                                        <td>2</td>
                                        <td>Lê Thị Loan</td>
                                        <td>lethiloan</td>
                                        <td>leloan123</td>
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
                                                                class="col-form-label">Name:</label>
                                                            <input type="text" class="form-control" id="category-film">
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
                                                                class="col-form-label">Name:</label>
                                                            <input type="text" class="form-control" id="category-film">
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