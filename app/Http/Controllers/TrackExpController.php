<?php

namespace App\Http\Controllers;

use App\Models\TrackExp;
use Illuminate\Http\Request;

class TrackExpController extends Controller
{
    // public function addEntry(Request $request){
    //     // dd($request);
    //     $cashtype = $request['cashtype'];
    //     $amount = $request['amount'];
    //     // TrackExp::insert(['cashtype'=>$cashtype, 'amount'=>$amount]);
    //     return response()->json(['success' => true]);
    // }

    public function addEntry(){
        return response()->json(['success' => true]);
    }
}
