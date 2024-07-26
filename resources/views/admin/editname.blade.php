@extends('admin/index')
@section('content')
<!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Boy Baby Name & Girl Baby Name</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="p-5">
                        <form class="user" method="post" action="/updatename/{{$editname->id}}">

                            @csrf
                            <div class="form-group">
                                <label for="form-label" class="label-control">Name</label>
                                <input type="text" class="form-control form-control-user"
                                    name="inputName" aria-describedby="emailHelp"
                                    placeholder="Enter Name..." required value="{{ $editname->name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="M" @if($editname->gender == 'M') selected  @endif >Male</option>
                                    <option value="F" @if($editname->gender == 'F') selected  @endif >Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="form-label" class="label-control">Laungage Name</label>
                                <input type="text" class="form-control form-control-user"
                                    id="exampleInputEmail" name="tamil_name" aria-describedby="emailHelp"
                                    placeholder="Enter Laungage Name" value="{{ $editname->tamil_name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="1" @if($editname->status == '1') selected  @endif >Active</option>
                                    <option value="0" @if($editname->status == '0') selected  @endif >InActive</option>
                                </select>
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