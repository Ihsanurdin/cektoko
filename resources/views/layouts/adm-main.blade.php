<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gur ah meh</title>

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Custom fonts for this template-->
    <link href="{!! asset('theme/vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/font-awesome.min.js">
</head>
    <!-- Custom styles for this template-->
    <link href="{!! asset('theme/css/sb-admin-2.min.css') !!}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-blind" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">NEWBIE NIGG</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
    <a class="nav-link collapsed" href="/siswa" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fa fa-user-circle" aria-hidden="true"></i>
        <span>Siswa</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('siswa.index')}}">Show All</a>
            <a class="collapse-item" href="{{route('siswa.create')}}">Tambah</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="/kategori" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
    <i class="fa fa-th-list" aria-hidden="true"></i>
        <span>kategori</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('kategori.index')}}">Show All</a>
            <a class="collapse-item" href="{{route('kategori.create')}}">Tambah</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="/barang" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-archive" aria-hidden="true"></i>
        <span>Barang</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('barang.index')}}">Show All</a>
            <a class="collapse-item" href="{{route('barang.create')}}">Tambah</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <span>Barang Masuk</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('barangmasuk.index') }}">Show All</a>
            <a class="collapse-item" href="{{ route('barangmasuk.create') }}">Tambah</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFIve" aria-expanded="true" aria-controls="FIve">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
        <span>Barang Keluar</span>
    </a>
    <div id="collapseFIve" class="collapse" aria-labelledby="headingFIve" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('barangkeluar.index') }}">Show All</a>
            <a class="collapse-item" href="{{ route('barangkeluar.create') }}">Tambah</a>
        </div>
    </div>
</li>
       

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search khusus nigg..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler Â· 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun Â· 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez Â· 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog Â· 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Niug asme</span>
                                <img class="img-profile rounded-circle"
                                    src="data:image/jpeg;base64,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">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    
                    <div class="container">
                        @yield('content')
                    </div>
                  

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">Ã—</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{!! asset('theme/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{!! asset('theme/js/sb-admin-2.min.js') !!}"></script>

    <!-- Page level plugins -->
    <script src="{!! asset('theme/vendor/chart.js/Chart.min.js') !!}"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>