<?php

namespace App\Http\Controllers;

use App\Models\ContactUsForm;
use App\Models\NameList;
use Illuminate\Http\Request;

class NameListController extends Controller
{
    public function index()
    {
        return view("home");
    }
    
    public function babynamelist($gender='all',$start_letter='a')
    {
        $title['title'] = "BabyName";

        $query = NameList::where('name', 'LIKE', $start_letter.'%')->where("status",1);
        if($gender == 'boy'){
            $query->where('gender','M');
        }elseif($gender == 'girl'){
            $query->where('gender','F');
        }
        $title['nameList'] = $query->orderBy('name')->get();
        $title['start_letter'] = $start_letter;
        $title['gender'] = $gender;
        return view("nameList", $title);
    }

    public function nameList($gender='a')
    {
        return view("babyname");
    }

    public function searchname(Request $request){
        $search_name = $request['name_start'];
        return $this->babynamelist('all',$search_name);
    }

    public function contactus(){
        return view("contactus");
    }

    public function savesubmit(Request $request){
        $form_username = $request['name'];
        $form_usermail = $request['email'];
        $form_usertext = $request['textval'];
        
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        if($validate){
            $save = ContactUsForm::insert(array('name'=>$form_username, 'email'=>$form_usermail, 'textval'=>$form_usertext));
            if($save){
                return redirect()->back()->with('message', 'Successfully submitted your suggestions');
            }else{
                return redirect()->back()->with('message', 'Failed to sumit... Try again');
            }
        }
    }
}
