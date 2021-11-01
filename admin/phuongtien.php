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
                    <h1 class="mt-4">Danh sách phương tiện</h1>
                    

                    <div class="card mb-4">
                        <div class="card-header">

                            
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Biển số</th>
                                        <th>Loại xe</th>
                                        <th>Số khung số máy</th>
                                        <th>Trạng thái</th>
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
                                    <tr>
                                        <td>1</td>
                                        <td>81-N3 20633</td>
                                        <td>Xe bán tải</td>
                                        <td>92-C 312456</td>
                                        <td>
                                          Chưa kiểm định
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>81-N3 20633</td>
                                        <td>Xe 6 chỗ</td>
                                        <td>92-C 312456</td>
                                        <td>
                                          Đã kiểm định
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