<?php

namespace App\Http\Controllers;

use App\Models\NameList;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $data['namelist'] =  NameList::all();
        return view('admin/homeadmin', $data);
    }

    public function editName($editid)
    {
        $data['editname'] =  NameList::find($editid);
        return view('admin/editname', $data);
    }

    public function updatename(Request $request, $edit_id)
    {
        $editname = trim($request['inputName']);
        $gender = $request['gender'];
        $status = trim($request['status']);
        $tamil_name = trim($request['tamil_name']);
        NameList::where('id',$edit_id)->update(['name'=>$editname, 'gender'=>$gender, 'tamil_name'=>$tamil_name, 'status' => $status]);
        return redirect('adminuser');
    }

    public function savename(Request $request)
    {
        $addname = new NameList;
        $addname->name = trim($request['inputName']);
        $addname->gender = $request['gender'];
        $addname->tamil_name = trim($request['tamil_name']);
        $addname->status = "1";
        $addname->save();
        return redirect('adminuser');
    }

    public function addname()
    {
        return view('admin/addname');
    }
}
