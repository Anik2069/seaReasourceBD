<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
    <meta content="Spruko" name="author">

    <!-- Title -->
    <title>Invoice Show</title>

    <!-- Favicon -->
    <link href="../{{"assets"}}/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    <!-- Icons -->
    <link href="../{{"assets"}}/css/icons.css" rel="stylesheet">

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="../{{"assets"}}/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Ansta CSS -->
    <link href="../{{"assets"}}/css/dashboard.css" rel="stylesheet" type="text/css">

    <!-- Custom scroll bar css-->
    <link href="../{{"assets"}}/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!-- Sidemenu Css -->
    <link href="../{{"assets"}}/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">

</head>
<body class="app sidebar-mini rtl">
<div id="global-loader"></div>
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
                                    </div>
                                    <input class="form-control" placeholder="Search" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Top navbar -->
                @include("admin.navupper")
                <!-- Top navbar-->

                    <!-- Page content -->
                    <div class="container-fluid pt-8">
                        <div class="page-header mt-0 shadow p-3">
                            <ol class="breadcrumb mb-sm-0">
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                            </ol>
                            <div class="btn-group mb-0">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-plus mr-2"></i>Add new Page</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-eye mr-2"></i>View the page
                                        Details</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-edit mr-2"></i>Edit Page</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Settings</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card-box card shadow">
                                    <div class="card-body border-bottom">
                                        <div class="clearfix">
                                            <hr>
                                            <h1 style="text-align: center">Sea Resource BD,BanglaDesh</h1>
                                            <p style="text-align: center">Dhaka,Bangladesh</p>
                                            <hr>
                                            <div class="float-left">
                                                <h3 class="logo mb-0">MIS Report</h3>
                                            </div>
                                            <div class="float-right">
                                                <h3 class="mb-0">Date: <?php echo date("Y/m/d") ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-0">

                                            <!-- end row -->

                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered m-t-30 text-nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>Serial</th>
                                                                <th>Name</th>
                                                                <th>Total Sell Amount</th>
                                                                <th>TOtal Cost</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($value as $val)
                                                                <tr>

                                                                    <td>{{$i=$i+1}}</td>
                                                                    <td>{{$val->foodname}}</td>
                                                                    <td>{{$val->quantity}}</td>
                                                                    <td>{{$val->total}}</td>
                                                                </tr>
@endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <h4><br>

                                                    </h4>
                                                    <hr>
                                                </div>

                                                <div class="col-xl-4 col-12 offset-xl-8">

                                                    <hr>
                                                    <h4 class="text-right text-xl">           </h4>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">Chart Demo</div>

                                                    <div class="panel-body">
                                                        {!! $chart->html() !!}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-print-none">
                                                <div class="float-right">
                                                    <a href="javascript:window.print()" class="btn btn-primary"><i
                                                            class="fa fa-print"></i> print</a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- Footer -->
                        <footer class="footer">
                            <div class="row align-items-center justify-content-xl-between">
                                <div class="col-xl-6">
                                    <div class="copyright text-center text-xl-left text-muted">
                                        <p class="text-sm font-weight-500">Copyright 2018 © All Rights
                                            Reserved.Dashboard Template</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <p class="float-right text-sm font-weight-500"><a href="www.templatespoint.net">Templates
                                            Point</a></p>
                                </div>
                            </div>
                        </footer>
                        <!-- Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- app-content -->
    </div>
</div>
<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Ansta Scripts -->
{!! Charts::scripts() !!}
{!! $chart->script() !!}
<!-- Core -->
<script src="../{{"assets"}}/plugins/jquery/dist/jquery.min.js"></script>
<script src="../{{"assets"}}/js/popper.js"></script>
<script src="../{{"assets"}}/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Optional JS -->
<script src="../{{"assets"}}/plugins/chart.js/dist/Chart.min.js"></script>
<script src="../{{"assets"}}/plugins/chart.js/dist/Chart.extension.js"></script>

<!-- Data tables -->
<script src="../{{"assets"}}/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="../{{"assets"}}/plugins/datatable/dataTables.bootstrap4.min.js"></script>

<!-- Fullside-menu Js-->
<script src="../{{"assets"}}/plugins/toggle-sidebar/js/sidemenu.js"></script>

<!-- Custom scroll bar Js-->
<script src="../{{"assets"}}/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Ansta JS -->
<script src="../{{"assets"}}/js/custom.js"></script>

</body>
</html>
