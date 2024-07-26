@extends('admin/index')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Name List</h1>
    <p class="mb-4">List boy and girl baby name list.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Boy Baby Name & Girl Baby Name
            <span class="float-right"><a href="/addname" class="btn btn-success">Add New</a></span></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Tamil</th>
                            <th>Statusphp artisan migrate:statusphp artisan migrate:status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($namelist as $name)
                            <tr>
                                <td>{{$name->name}}</td>
                                <td>{{$name->gender}}</td>
                                <td>{{$name->tamil_name}}</td>
                                <td>{{ ($name->status) ? "Active" : "InActive"}}</td>
                                <td>
                                    <a href="editname/{{$name->id}}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
