<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
    <meta content="Spruko" name="author">

    <!-- Title -->
    <title>Ansta - Responsive Multipurpose Admin Dashboard Template</title>

    <!-- Favicon -->
    <link href="../{{'assets'}}/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    <!-- Icons -->
    <link href="../{{'assets'}}/css/icons.css" rel="stylesheet">

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="../{{'assets'}}/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Ansta CSS -->
    <link href="../{{'assets'}}/css/dashboard.css" rel="stylesheet" type="text/css">

    <!-- Custom scroll bar css-->
    <link href="../{{'assets'}}/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!-- Sidemenu Css -->
    <link href="../{{'assets'}}/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">

</head>
<body class="app sidebar-mini rtl" >
<div id="global-loader" ></div>
<div class="page">
    <div class="page-main">
        <!-- Sidebar menu-->
       @include("admin.nav")
        <!-- Sidebar menu-->

        <!-- app-content-->
        <div class="app-content ">
            <div class="side-app">
                <div class="main-content">
                    <div class="p-2 d-block d-sm-none navbar-sm-search">
                        <!-- Form -->
                        <form class="navbar-search navbar-search-dark form-inline ml-lg-auto">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div><input class="form-control" placeholder="Search" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Top navbar -->
                    <nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>

                            <!-- Horizontal Navbar -->
                            <ul class="navbar-nav align-items-center d-none d-xl-block">
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0 d-none d-lg-block" data-toggle="dropdown" href="#" role="button">
                                        Default Settings <span class="fas fa-caret-down"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><span>Manage Profile</span></a>
                                        <a class="dropdown-item" href="#"><span>Themes</span></a>
                                        <a class="dropdown-item" href="#"><span>Passwords</span></a>
                                        <a class="dropdown-item" href="#"><span>Payment methods</span></a>
                                        <a class="dropdown-item" href="#"><span>Other Settings</span></a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0 d-none d-lg-block" data-toggle="dropdown" href="#" role="button">
                                        Projects <span class="fas fa-caret-down"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><span>Active</span></a>
                                        <a class="dropdown-item" href="#"><span>Marketing</span></a>
                                        <a class="dropdown-item" href="#"><span>Users</span></a>
                                        <a class="dropdown-item" href="#"><span>Development</span></a>
                                        <a class="dropdown-item" href="#"><span>Settings</span></a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Brand -->
                            <a class="navbar-brand pt-0 d-md-none" href="index-2.html">
                                <img src="assets/img/brand/logo-light.png" class="navbar-brand-img" alt="...">
                            </a>
                            <!-- Form -->
                            <form class="navbar-search navbar-search-dark form-inline mr-3  ml-lg-auto">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                        </div><input class="form-control" placeholder="Search" type="text">
                                    </div>
                                </div>
                            </form>
                            <!-- User -->
                            <ul class="navbar-nav align-items-center ">
                                <li class="nav-item d-none d-md-flex">
                                    <div class="dropdown d-none d-md-flex mt-2 ">
                                        <a class="nav-link full-screen-link pl-0 pr-0"><i class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown d-none d-md-flex">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-0" data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <i class="fe fe-user "></i>
                                        </div></a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                                        <a class="dropdown-item d-flex" href="#">
                                            <span class="avatar brround mr-3 align-self-center"> <img src="assets/img/faces/male/4.jpg" alt="imag" ></span>
                                            <div>
                                                <strong>Madeleine Scott</strong> sent you friend request
                                                <div class=" mt-2 small text-muted">
                                                    <span class="btn btn-sm btn-primary">Conform</span>
                                                    <span class="btn btn-sm btn-outline-primary">Delete</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#">
                                            <span class="avatar brround mr-3 align-self-center"><img src="assets/img/faces/female/14.jpg" alt="imag" ></span>
                                            <div>
                                                <strong>rebica</strong> sent you friend request
                                                <div class=" mt-2 small text-muted">
                                                    <span class="btn btn-sm btn-primary">Conform</span>
                                                    <span class="btn btn-sm btn-outline-primary">Delete</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#">
                                            <span class="avatar brround mr-3 align-self-center"><img src="assets/img/faces/male/1.jpg" alt="imag"></span>
                                            <div>
                                                <strong>Devid robott</strong> sent you friend request
                                                <div class=" mt-2 small text-muted">
                                                    <span class="btn btn-sm btn-primary">Conform</span>
                                                    <span class="btn btn-sm btn-outline-primary">Delete</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-center text-muted-dark" href="#">View all Requestes</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown d-none d-md-flex">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-0" data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <i class="fe fe-mail "></i>
                                        </div></a>
                                    <div class="dropdown-menu  dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                                        <a href="#" class="dropdown-item text-center">12 New Messages</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar brround mr-3 align-self-center"><img src="assets/img/faces/male/41.jpg" alt="img"></span>
                                            <div>
                                                <strong>Madeleine</strong> Hey! there I' am available....
                                                <div class="small text-muted">3 hours ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar brround mr-3 align-self-center"><img src="assets/img/faces/female/1.jpg" alt="img" ></span>
                                            <div>
                                                <strong>Anthony</strong> New product Launching...
                                                <div class="small text-muted">5  hour ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">See all Messages</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown d-none d-md-flex">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-0" data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <i class="fe fe-bell f-30 "></i>
                                        </div></a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                                        <a href="#" class="dropdown-item d-flex">
                                            <div>
                                                <strong>Someone likes our posts.</strong>
                                                <div class="small text-muted">3 hours ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <div>
                                                <strong> 3 New Comments</strong>
                                                <div class="small text-muted">5  hour ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <div>
                                                <strong> Server Rebooted.</strong>
                                                <div class="small text-muted">45 mintues ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">View all Notification</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="#" role="button">
                                        <div class="media align-items-center">
                                            <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="assets/img/faces/female/32.jpg"></span>
                                            <div class="media-body ml-2 d-none d-lg-block">
                                                <span class="mb-0 ">Cori Stover</span>
                                            </div>
                                        </div></a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome!</h6>
                                        </div>
                                        <a class="dropdown-item" href="user-profile.html"><i class="ni ni-single-02"></i> <span>My profile</span></a>
                                        <a class="dropdown-item" href="#"><i class="ni ni-settings-gear-65"></i> <span>Settings</span></a>
                                        <a class="dropdown-item" href="#"><i class="ni ni-calendar-grid-58"></i> <span>Activity</span></a>
                                        <a class="dropdown-item" href="#"><i class="ni ni-support-16"></i> <span>Support</span></a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="login.blade.php"><i class="ni ni-user-run"></i> <span>Logout</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Top navbar-->

                    <div class="container-fluid pt-4">
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">Product Post Controll</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Product Post</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">Create Product Post</h2>
                    </div>


                    <form method="post" action="/editproduct"   enctype="multipart/form-data">

                        @csrf
                        <input type="text" class="form-control" name="id" placeholder="Name" value="{{$value['id']}}" style="display: none">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="form-label">Enter Product Name</label>
                                    <input type="text" class="form-control" name="pname" placeholder="Name" value="{{$value['pname']}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Enter Product Type</label><br>
                                    <select name="type">
                                        <option value="foods">Foods Product</option>
                                        <option value="items">Different Sea Items</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Price" value="{{$value['price']}}">
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group mb-0">
                                    <label class="form-label">Description </label>
                                    <textarea class="form-control" name="description" rows="4" placeholder="text here..">value="{{$value['description']}}"</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group mb-0">
                                    <label class="form-label">Image </label><br>
                                    <input type="file" name="file_name1" class="form-control">
                                </div>
                            </div>
                            <div class ="col-md-12 ">
                                <div class ="col-md-4 ">
                                    <br>
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    </form>
                </div>

            </div>



        </div>
    </div>

        <!-- Footer -->

        <!-- Footer -->








<!-- Page content -->


                    <!-- Footer -->
                    <footer class="footer">
                        <div class="row align-items-center justify-content-xl-between">
                            <div class="col-xl-6">
                                <div class="copyright text-center text-xl-left text-muted">
                                    <p class="text-sm font-weight-500">Copyright 2018 © All Rights Reserved.Dashboard Template</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <p class="float-right text-sm font-weight-500"><a href="www.templatespoint.net">Templates Point</a></p>
                            </div>
                        </div>
                    </footer>
                    <!-- Footer -->

                </div>
            </div>
        </div>
    </div>
    <!--app-content-->
</div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Ansta Scripts -->
<!-- Core -->
<script src="../{{'assets'}}/plugins/jquery/dist/jquery.min.js"></script>
<script src="../{{'assets'}}/js/popper.js"></script>
<script src="{{'assets'}}/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Optional JS -->
<script src="../{{'assets'}}/plugins/chart.js/dist/Chart.min.js"></script>
<script src="../{{'assets'}}/plugins/chart.js/dist/Chart.extension.js"></script>

<!-- Data tables -->
<script src="../{{'assets'}}/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="../{{'assets'}}/plugins/datatable/dataTables.bootstrap4.min.js"></script>

<!-- Fullside-menu Js-->
<script src="../{{'assets'}}/plugins/toggle-sidebar/js/sidemenu.js"></script>

<!-- Custom scroll bar Js-->
<script src="../{{'assets'}}/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Ansta JS -->
<script src="../{{'assets'}}/js/custom.js"></script>
</body>

</html>
