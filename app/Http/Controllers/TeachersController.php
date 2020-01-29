<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teachers;

class TeachersController extends Controller
{  
    
     public function index()
    {
        $teach = teachers::paginate(4);
        return view('/teacher',['teachers'=>$teach]);
    }

    
    public function create()
    {
        return view('addteacher');
    }

    
    public function store()
    {
        
        $teach = new teachers;
        $teach->name = request('name');
        $teach->address = request('address');
        $teach->contact = request('contact');
        $teach->subject = request('subject');

        $teach->save();

        return redirect('/teachers');

    }

   
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $teach = teachers::find($id); 
        return view('tedit',['teacher'=>$teach]);
    }

   
    public function update($id)
    {

        $teach = teachers::find($id);

        $teach->name = request('name');
        $teach->address = request('address');
        $teach->contact = request('contact');
        $teach->subject = request('subject');

        $teach->save();

        return redirect('/teachers');
    }

    public function destroy($id)
    {
        teachers::where('id',$id)->delete();

        return redirect('/teachers');
    }
    
}
