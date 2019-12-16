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
                                    <th>Customer Name</th>
                                    <th>Customer Phone</th>
                                    <th>Customer Email</th>
                                    <th>Address</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                @foreach($value as $val)
                                    <tr>
                                        <td>{{$val['created_at']}}</td>
                                        <td>{{$val['customername']}}</td>
                                        <td>{{$val['phone']}}</td>
                                        <td>{{$val['email']}}</td>
                                        <td>{{$val['address']}}</td>
                                        <td>{{$val['foodname']}}</td>
                                        <td>{{$val['quantity']}}</td>
                                        <td>{{$val['price']*$val['quantity']}}</td>
                                        <td><a href="/invoice/{{$val['id']}}">Preview </a></td>




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



