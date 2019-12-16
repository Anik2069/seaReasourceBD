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

        <!-- Eita Channnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnge hobbeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
     @include("admin.nav")

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

                    <!-- Page content -->
                    <div class="container-fluid pt-8">
                        <div class="page-header mt-0 shadow p-3">
                            <ol class="breadcrumb mb-sm-0">
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Preview</li>
                            </ol>

                        </div>




                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-profile  overflow-hidden">
                                    <div class="card-body text-center cover-image" data-image-src="../{{'assets'}}/img/profile-bg.jpg">
                                        <div class=" card-profile">
                                            <div class="row justify-content-center">
                                                <div class="">
                                                    <div class="">
                                                        <a href="#">
                                                            <img src="../{{'assets'}}/img/faces/female/32.jpg" class="rounded-circle" alt="profile">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="mt-3 text-white">{{$details['name']}}</h3>
                                        <p class="mb-4 text-white">Dealers</p>
                                          </div>
                                    <div class="card-body">
                                        <div class="nav-wrapper p-0">
                                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">

                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-0 active show mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="true"><i class="far fa-home mr-2"></i>About</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow ">
                                    <div class="card-body pb-0">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">

                                            </div>
                                            <div aria-labelledby="tabs-icons-text-2-tab" class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="content content-full-width" id="content">
                                                            <!-- begin profile-content -->
                                                            <div class="profile-content">
                                                                <!-- begin tab-content -->
                                                                <div class="tab-content p-0">
                                                                    <!-- begin #profile-friends tab -->
                                                                    <div class="tab-pane fade in active show" id="profile-friends">
                                                                        <h4 class="mt-0 mb-4">Friend List (14)</h4><!-- begin row -->
                                                                        <div class="row row-space-2">
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/female/2.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Latoya Laver</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/female/4.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Polly Amon</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/male/2.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Isaac Arceneaux</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/female/1.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Corinna Eifert</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/female/3.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Kenna Pride</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/male/3.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Mark Sunseri</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/female/5.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Kenna Pride</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/female/6.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Thu Dake</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/male/5.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Trenton Tookes</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/male/6.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Elias Arboleda</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/female/7.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Rosetta Robertson</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/male/7.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Sergio Silverio</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/female/9.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Kathern Risner</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end col-6 -->
                                                                            <div class="col-xl-6">
                                                                                <div class="card border shadow">
                                                                                    <div class="media card-body media-xs overflow-visible">
                                                                                        <a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md img-circle" src="assets/img/faces/female/8.jpg"></a>
                                                                                        <div class="media-body valign-middle">
                                                                                            <b class="text-inverse">Honey Maloney</b>
                                                                                        </div>
                                                                                        <div class="media-body valign-middle text-right overflow-visible">
                                                                                            <div class="btn-group">
                                                                                                <button class="btn btn-sm btn-primary d-none d-sm-block btn-square" type="button">Friends</button> <button class="btn btn-sm btn-primary btn-square dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span> <span class="sr-only">View profile</span></button>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="dropdown-item" href="#">Follow</a> <a class="dropdown-item" href="#">Message</a> <a class="dropdown-item" href="#">Suggestion</a>
                                                                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Un friend</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- end col-6 -->
                                                                        </div><!-- end row -->
                                                                    </div><!-- end #profile-friends tab -->
                                                                </div><!-- end tab-content -->
                                                            </div><!-- end profile-content -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                                <h2>About Dealers</h2>
                                                <p class="description">He is our leading dealers of product</p>
                                                <div class="table-responsive border ">
                                                    <table class="table row table-borderless w-100 m-0 ">
                                                        <tbody class="col-lg-6 p-0">
                                                        <tr>
                                                            <td><strong>Full Name :</strong> {{$details['name']}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Phone :</strong>  {{$details['phone']}}</td>
                                                        </tr>

                                                        </tbody>
                                                        <tbody class="col-lg-6 p-0">
                                                        <tr>
                                                            <td><strong>Tags :</strong>  {{$details['tags']}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Address</strong> {{$details['address']}}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="media-heading mt-3">
                                                    <h3><strong>Payment Leger</strong></h3>
                                                    <div class="row">
                                                        <div class="table-responsive col-md-6">
                                                            <h2>Add Incoming History</h2>
                                                            <table class="table table-striped table-bordered w-100 ">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Product Name</th>
                                                                    <th>quantity</th>
                                                                    <th>Price</th>
                                                                    <th>Action</th>


                                                                </tr>
                                                                <tr>
                                                                    <form action="/addincoming" method="post"> @csrf
                                                                        <input type="text" name="pid" value="{{$details['id']}}" style="display: none">

                                                                        <th><input type="date" name="date"></th>
                                                                    <th><input type="text" name="name1"></th>
                                                                    <th><input type="text" name="quantity"></th>
                                                                    <th><input type="text" name="price"></th>
                                                                    <th><input type="submit" class="btn btn-primary"></th>
                                                                    </form>



                                                                </tr>


                                                            </table>
                                                        </div>
                                                        <div class="table-responsive col-md-6">
                                                            <h2>Add OutGOing History</h2>
                                                            <table class="table table-striped table-bordered w-20 ">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Purpuse Name</th>

                                                                    <th>Amount</th>
                                                                    <th>Action</th>


                                                                </tr>
                                                                <tr>
                                                                    <form action="/addout" method="post">
                                                                        @csrf
                                                                        <input type="text" name="pid" value="{{$details['id']}}" style="display: none">

                                                                        <th><input type="date" name="date"></th>
                                                                        <th><input type="text" name="name2"></th>
                                                                        <th><input type="text" name="price"></th>
                                                                        <th><input type="submit" class="btn btn-primary"></th>
                                                                    </form>



                                                                </tr>


                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="table-responsive col-md-6">
                                                            <h2>Add Incoming History</h2>
                                                            <table class="table table-striped table-bordered w-100 ">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Product Name</th>
                                                                    <th>quantity</th>
                                                                    <th>Price</th>
                                                                    <th>Action</th>


                                                                </tr>
                                                                @foreach($income as $in)
                                                                <tr>

                                                                        <td>{{$in->date}}</td>
                                                                        <td>{{$in->name}}</td>
                                                                        <td>{{$in->quantity}}</td>
                                                                        <td>{{$in->price}}</td>
                                                                        <td><a href="/deletein/{{$in->id}}">
                                                                            <button type="button" class="close" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                            </a></td>



                                                                </tr>
                                                                @endforeach


                                                            </table>
                                                        </div>
                                                        <div class="table-responsive col-md-6">
                                                            <h2>Add Outgoing History</h2>
                                                            <table class="table table-striped table-bordered w-100 ">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Purpose Name</th>

                                                                    <th>Price</th>
                                                                    <th>Action</th>


                                                                </tr>
                                                                @foreach($outcome as $in)
                                                                    <tr>

                                                                        <td>{{$in->date}}</td>
                                                                        <td>{{$in->name}}</td>

                                                                        <td>{{$in->price}}</td>
                                                                        <td><a href="/deleteout/{{$in->id}}">
                                                                                <button type="button" class="close" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </a></td>



                                                                    </tr>
                                                                @endforeach


                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>

                                                    <h3 style="text-align: center">Total CalCulation</h3><hr>
                                                <h4 style="text-align: center">Total Amount:{{$intotal}}</h4>
                                                <h4 style="text-align: center">Total Paid:{{$outtotal}}</h4>
                                                <h4 style="text-align: center">Total Payable:{{$intotal-$outtotal}}</h4>

<a href="/dealersinovice/{{$details['id']}}"><input type="submit" class="btn-darker"></a>


                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Footer -->
                      @include("admin.footer")
                        <!-- Footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Ansta Scripts -->
<!-- Core -->
<script src="../{{'assets'}}/plugins/jquery/dist/jquery.min.js"></script>
<script src="../{{'assets'}}/js/popper.js"></script>
<script src="../{{'assets'}}/plugins/bootstrap/js/bootstrap.min.js"></script>

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
