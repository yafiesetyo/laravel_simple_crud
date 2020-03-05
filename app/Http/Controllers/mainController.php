<?php

namespace App\Http\Controllers;

use App\main;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
        $emp = main::all();
        return view('main',['emp' => $emp]);
    }

    public function store(Request $request)
    {
        $req = $request;
        $rating = 0;
        $emp_id = rand(0,999999);
        main::create([
            'employee_id'=>$emp_id,
            'employee_num'=>$req->nip,
            'name'=>$req->nama,
            'position'=>$req->posisi,
            'rating'=>$rating
        ]);
        return redirect('/');
    }

    public function delete($id)
    {
        $emp_id = $id;
        if(isset($emp_id)){
            $emp = main::where('employee_id','=',$emp_id);
            $emp->delete();
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    public function showEdit($id)
    {
        $emp_id = $id;
        if(isset($emp_id)){
            $emp = main::where('employee_id',$emp_id)->get();
            return view('edit',['employee'=>$emp]);
        }else{
            return redirect('/');
        }
        
    }

    public function update(Request $req, $id)
    {
        $emp=main::where('employee_id','=',$id);
        $emp->update([
            'name' => $req->nama,
            'position' => $req->posisi,
            'rating' => $req->rating,
        ]);
        
        return redirect('/');

    }

}
