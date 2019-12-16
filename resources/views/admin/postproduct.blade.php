@extends("admin.masteradmin");

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header bg-transparent border-0">
                <h2 class=" mb-0">Post View</h2>
            </div>
            <div class="">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap  align-items-center">
                                <thead class="thead-light">
                                <tr>
                                    <th>Date</th>
                                    <th>Id</th>
                                    <th>Employee Name</th>
                                    <th>Product Type</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                @foreach($value as $val)
                                    <tr>
                                        <td>{{$val['date']}}</td>
                                        <td>{{$val['id']}}</td>
                                        <td>{{$val['pname']}}</td>
                                        <td>{{$val['type']}}</td>
                                        <td>{{$val['description']}}</td>
                                        <td>{{$val['price']}}</td>
                                        <td><a href="/preview/{{$val['id']}}">Preview </a> /<a href="/edit/{{$val['id']}}">Edit </a> </td>




                                    </tr>



                                @endforeach



                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



