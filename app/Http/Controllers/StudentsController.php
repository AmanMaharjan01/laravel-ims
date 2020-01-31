<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;

class StudentsController extends Controller
{
     public function index()
    {
        $std = students::paginate(4);
        return view('students',['students'=>$std]);
    }

    
    public function create()
    {
        return view('addstudent');
    }

    
    public function store()
    {

        request()->validate([
              'name' => ['required','max:40'],
              'address' => 'required',
              'body' => 'required',
              'profile' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $fileName = request('name') . rand(0,99) . '.' .request()->file('profile')->getClientOriginalExtension();

        $profile = request()->file('profile')->storeAs('upload/profile/', $fileName);

        $std = new students;
        $std->name = request('name');
        $std->address = request('address');
        $std->contact = request('contact');
        $std->profile = $fileName;

        if ($std->save();) {

            return redirect('/students')->with('status', 'Student inserted successfully!!');
        }

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
