@extends('admin/index')
@section('content')
<!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Boy Baby Name & Girl Baby Name</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="p-5">
                        <form class="user" method="post" action="/savename">

                            @csrf
                            <div class="form-group">
                                <label for="form-label" class="label-control">Name</label>
                                <input type="text" class="form-control form-control-user"
                                    name="inputName" aria-describedby="emailHelp"
                                    placeholder="Enter Name..." value="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="M" >Male</option>
                                    <option value="F" >Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="form-label" class="label-control">Tamil Name</label>
                                <input type="text" class="form-control form-control-user"
                                    id="exampleInputEmail" name="tamil_name" aria-describedby="emailHelp"
                                    placeholder="Enter Tamil Name">
                            </div>
                            <div class="form-group">
                               <button type="submit" class="form-control btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection