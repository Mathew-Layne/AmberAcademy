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
            'cost' => $req->cost,
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
        ->where('applied.app_status', 'Pending')        
        ->get();

        return view('admin',['data' => $data]);
    }

    function approve($cid, $uid)
    {
        DB::table('applied')
        ->where('user_id', $uid)
        ->where('course_id', $cid)
        ->update([
            'app_status' => 'Approved'
        ]);

        echo "
                <script>
                    alert('Applicant has been Approved.');   
                    window.location.href ='/applications';        
                </script>
            ";         
    }

    function deny($cid, $uid)
    {
       DB::table('applied')
       ->where('user_id', $uid)
        ->where('course_id', $cid)        
       ->update([
           'app_status' => 'Denied'
       ]);

        echo "
                <script>
                    alert('Applicant has been Denied.');   
                    window.location.href ='/applications';        
                </script>
            ";   
    }

    function payments()
    {
        session()->put('check', 'payment');
        return view('admin');
    }

    
}
