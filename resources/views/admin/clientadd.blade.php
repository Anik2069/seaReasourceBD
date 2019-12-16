@extends("admin.masteradmin");

@section('content')
    <div class="container-fluid pt-4">
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">Dealers Information</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Dealers Information</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">Create  Dealers Information</h2>
                    </div>


                    <form method="post" action="/adddealers"    enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Registered Date</label>
                                    <input type="date" class="form-control" name="date" >
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Dealer's Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Supply Materials Tags</label><br>
                                    <input type="text" class="form-control" name="tags" placeholder="Tags">

                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="phone">
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group mb-0">
                                    <label class="form-label">Address </label>
                                    <textarea class="form-control" name="address" rows="2" placeholder="text here.."></textarea>
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


@endsection





<!-- Page content -->

