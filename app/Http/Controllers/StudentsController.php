<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;

class StudentsController extends Controller
{
     public function index()
    {
        $std = students::paginate(4);
        return view('/students',['students'=>$std]);
    }

    
    public function create()
    {
        return view('addstudent');
    }

    
    public function store()
    {
    	
        $std = new students;
        $std->name = request('name');
        $std->address = request('address');
        $std->contact = request('contact');

        $std->save();

        return redirect('/students');

    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
    	$std = students::find($id); 
        return view('edit',['student'=>$std]);
    }

   
    public function update($id)
    {

        $std = students::find($id);

        $std->name = request('name');
        $std->address = request('address');
        $std->contact = request('contact');

        $std->save();

        return redirect('/students');
    }

    public function destroy($id)
    {
        students::where('id',$id)->delete();

        return redirect('/students');
    }
}
