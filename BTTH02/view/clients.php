<?php
    // require_once('../model/student.php');
    // $studentModel = new student();
    // $student = $studentModel->getAll();
    // echo "<pre>";
    //     print_r($student);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Sinh Viên</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../public/template/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../public/template/admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-white-primary elevation-4">
            <a href="" class="brand-link">
                <img src="../public/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Công nghệ Web-2-22</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../public/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Nguyễn Văn A</a>
                    </div>
                </div>


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Điểm Danh
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Khu vực điểm danh 62TH2.1</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Khu vực điểm danh 62TH2.2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-graduation-cap"></i>
                                <p>
                                    Slide Bài Giảng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bài 1 - Giới thiệu môn học</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bài 2 - Kiến thức cơ bản</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-video"></i>
                                <p>
                                    Video Hướng Dẫn
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cài đặt Nginx, PHP 8, MariaDB</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hướng dẫn khởi chạy Nginx</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Khu vực điểm danh 62TH2.1</h1>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col-md-10 mx-auto">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Ngày</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th>Lý do</th>
                                <th>Gửi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    12/5/2023
                                    <br />
                                    1PM - 1:05PM
                                </td>
                                <td>Buổi học bình thường</td>
                                <td>
                                    <select class="form-select">
                                        <option>Đi học</option>
                                        <option>Vắng</option>
                                    </select>
                                </td>
                                <td>...</td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    16/5/2023
                                    <br />
                                    1PM - 1:05PM
                                </td>
                                <td>Buổi học bình thường</td>
                                <td>
                                    <select class="form-select">
                                        <option>Đi học</option>
                                        <option>Vắng</option>
                                    </select>
                                </td>
                                <td>...</td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    19/5/2023
                                    <br />
                                    1PM - 1:05PM
                                </td>
                                <td>Buổi học bình thường</td>
                                <td>
                                    <select class="form-select">
                                        <option>Đi học</option>
                                        <option>Vắng</option>
                                    </select>
                                </td>
                                <td>...</td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="../public/template/admin/plugins/jquery/jquery.min.js"></script>
        <script src="../public/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../public/template/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <script src="../public/template/admin/dist/js/adminlte.min.js"></script>
        <script src="../public/template/admin/dist/js/demo.js"></script>

</body>

</html>