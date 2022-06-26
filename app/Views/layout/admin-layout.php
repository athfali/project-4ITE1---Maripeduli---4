<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></title>
    <base href="/">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= route_to('admin.home') ?>"
                        class="nav-link <?= (current_url() == base_url('admin/home')) ? 'active' :'' ; ?>">Tabel Appoiment Donasi</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= route_to('admin.terkumpul') ?>"
                        class="nav-link <?= (current_url() == base_url('admin/terkumpul')) ? 'active' :'' ; ?>">Tabel Donasi Terkumpul</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= route_to('admin.user') ?>"
                        class="nav-link <?= (current_url() == base_url('admin/user')) ? 'active' :'' ; ?>">Tabel User</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= route_to('admin.admin') ?>"
                        class="nav-link <?= (current_url() == base_url('admin/admin')) ? 'active' :'' ; ?>">Tabel Admin</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Mari Peduli</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info"><?= session('name') ?>
                        <a href="#" class="d-block">Athfali Muhamad Rahman</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bolt"></i>
                                <p>
                                    Report Table
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview menu-open">
                                <li class="nav-item">
                                    <a href="<?= route_to('admin.home') ?>"
                                        class="nav-link <?= (current_url() == base_url('admin/home')) ? 'active' :'' ; ?>">
                                        <i class="nav-icon fas fa-coins"></i>
                                        <p>
                                            Appoiment Donasi
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= route_to('admin.terkumpul') ?>"
                                        class="nav-link <?= (current_url() == base_url('admin/terkumpul')) ? 'active' : '' ; ?>">
                                        <i class="nav-icon fas fa-hand-holding-usd"></i>
                                        <p>
                                            Donasi Terkumpul
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= route_to('admin.user') ?>"
                                        class="nav-link <?= (current_url() == base_url('admin/user')) ? 'active' : '' ; ?>">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>
                                            User
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= route_to('admin.admin') ?>"
                                        class="nav-link <?= (current_url() == base_url('admin/admin')) ? 'active' : '' ; ?>">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>
                                            Admin
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>
                                    Admin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview menu-open">
                                <li class="nav-item">
                                    <a href="/logoutAdmin" class="nav-link">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            Logout
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>
                    <div class="row">
                        <div class="col-lg-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>

        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="<?= base_url(); ?>">Mari Peduli</a>.</strong>
        </footer>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>