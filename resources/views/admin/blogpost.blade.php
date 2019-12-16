@extends("admin.masteradmin");

@section('content')
    <div class="container-fluid pt-4">
        <div class="page-header mt-0 shadow p-3">
            <ol class="breadcrumb mb-sm-0">
                <li class="breadcrumb-item"><a href="#">Blogs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Blogs</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">Create Blogs</h2>
                    </div>


                    <form method="post" action="/uploadblog"   enctype="multipart/form-data">

                        @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enter Date</label>
                                    <input type="date" class="form-control" name="date" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Enter Blogs Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Enter Blogs Type</label><br>
                                    <select name="type">
                                        <option value="foods">Foods Product</option>
                                        <option value="items">Different Sea Items</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tags</label>
                                    <input type="text" class="form-control" name="tags" placeholder="tags">
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group mb-0">
                                    <label class="form-label">Description </label>
                                    <textarea class="form-control" name="description" rows="4" placeholder="text here.."></textarea>
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

