<?php

namespace App\Http\Controllers;

use App\Models\ContactUsForm;
use App\Models\NameList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NameListController extends Controller
{
    public function index()
    {
        $boyname_count = NameList::where('gender','M')->where("status",1)->count();
        $girlname_count = NameList::where('gender','F')->where("status",1)->count();
        $ta_count = NameList::where('tamil_name','<>','')->where("status",1)->count();
        $en_count = NameList::where('name','<>','')->where("status",1)->count();
        return view("home", compact('boyname_count','girlname_count','ta_count','en_count'));
    }
    
    public function babynamelist($gender='all',$start_letter='A')
    {
        $start_letter =strtoupper($start_letter);
        $title['title'] = env('APP_NAME');
        $en_words = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        if(in_array($start_letter,$en_words)){
            $query = NameList::where('name', 'LIKE', $start_letter.'%')->where("status",1);
        }else{
            $query = NameList::where('tamil_name', 'LIKE', $start_letter.'%')->where("status",1);
        }

        if($gender == 'boy'){
            $query->where('gender','M');
            $title['title'] = "Boy ".env('APP_NAME');
        }elseif($gender == 'girl'){
            $query->where('gender','F');
            $title['title'] = "Girl ".env('APP_NAME');
        }

        $en_letters = NameList::select(DB::raw('LEFT(name, 1) as nameletter'))->groupby(DB::raw('LEFT(name, 1)'))->get();
        $ta_letters = NameList::select(DB::raw('LEFT(tamil_name, 1) as nameletter'))->groupby(DB::raw('LEFT(tamil_name, 1)'))->get();

        if(in_array($start_letter,$en_words)){
            $title['nameList'] = $query->orderBy('name')->get();
            $title['nametype'] = 'en';
        }else{
            $title['nameList'] = $query->orderBy('tamil_name')->get();
            $title['nametype'] = 'ta';
        }
        $title['start_letter'] = $start_letter;
        $title['gender'] = $gender;
        $title['en_letters'] = $en_letters;
        $title['ta_letters'] = $ta_letters;
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
    
    public function tamilbabynamelist($gender='all',$start_letter='அ')
    {
        $title['title'] = "BabyName";

        $query = NameList::where('tamil_name', 'LIKE', $start_letter.'%')->where("status",1);
        if($gender == 'boy'){
            $query->where('gender','M');
        }elseif($gender == 'girl'){
            $query->where('gender','F');
        }
        $title['nameList'] = $query->orderBy('tamil_name')->get();
        $title['start_letter'] = $start_letter;
        $title['gender'] = $gender;
        return view("nameList", $title);
    }
}
