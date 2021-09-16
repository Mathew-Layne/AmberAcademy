<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function adminview(){
        session()->put('check', 'admin');
        return view('admin');
    }

    function courseview()
    {
        session()->put('check', 'addcourse');
        return view('admin');
    }

    function addcourse(Request $req)
    {
        
        DB::table('courses')
        ->insert([
            'course' => $req->course,
            'training_loc' => $req->training_loc,
            'award' => $req->award,
            'format' => $req->format,
            'status' => $req->status,
            'start_date' => $req->start_date,  
            'created_at' => now(),

        ]);
        return redirect('addcourse');
    }

    function users()
    {
        session()->put('check', 'users');
        $data = DB::table('user')
        ->get();
        return view('admin', ['data' => $data]);
    }

    function applications()
    {
        session()->put('check', 'applications');
        $data = DB::table('applied')
        ->join('user', 'applied.user_id', 'user.id')
        ->join('courses', 'applied.course_id', 'courses.id')        
        ->get();

        return view('admin',['data' => $data]);
    }

    function approve($id)
    {
        DB::table('applied')
        ->where('user_id', $id)
        ->update([
            'status' => 'Approved'
        ]);
        return redirect('/applicants');
    }

    function deny($id)
    {
       DB::table('applied')
       ->where('user_id', $id)
       ->update([
           'status' => 'Denied'
       ]);
        return redirect('/applicants');
    }

    function payments()
    {
        session()->put('check', 'payment');
        return view('admin');
    }

    
}
