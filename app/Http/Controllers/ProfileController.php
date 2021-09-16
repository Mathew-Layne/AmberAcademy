<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Applied;

class ProfileController extends Controller
{  

    function profile()
    {

        session()->put('profile', 'myprofile');
        $profile = DB::table('user')
            ->where('id', session('user_id'))
            ->get();
        return view('profile', ['profile' => $profile[0]]);
    }

    function editview()
    {
        session()->put('profile', 'editprofile');
        $data = DB::table('user')
            ->where('id', session('user_id'))
            ->get();
        return view('profile', ['data' => $data[0]]);
    }

    function editprofile(Request $req)
    {
        $filename = $req->file('pro_pic');

        if(empty($filename)){
            DB::table('user')
            ->where('id', session('user_id'))

                ->update([
                    'first_name' => $req->first_name,
                    'last_name' => $req->last_name,
                    'username' => $req->username,
                    'email' => $req->email,
                    'phone_number' => $req->phone_number,
                    'address' => $req->address,
                    'city' => $req->city,
                    'parish' => $req->parish,
                    'updated_at' => date('Y-m-d h:i:s'),                  
                ]);
        }else{
            $filename = $req->file('pro_pic')->getClientOriginalName();
            DB::table('user')
            ->where('id', session('user_id'))

            ->update([
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'username' => $req->username,
                'email' => $req->email,
                'phone_number' => $req->phone_number,
                'address' => $req->address,
                'city' => $req->city,
                'parish' => $req->parish,
                'pro_pic' => $req->file('pro_pic')->storeAs('public', $filename),
                'updated_at' => date('Y-m-d h:i:s'),
            ]);
            $data = DB::table('user')
                ->where('id', session('user_id'))
                ->get('pro_pic');

                session()->put('pro_pic', $data[0]->pro_pic);
        }         

        return redirect('profile');
    }

    function qual(){
        session()->put('profile', 'qual');
        $qual = DB::table('qualification')
        ->where('user_id', session()->get('user_id'))
        ->get();
        return view('profile',['qual' => $qual]);
    }

    function viewqual(){
        session()->put('profile', 'addqual');
        return view('profile');
    }

    function addqual(Request $req){
        
        $user_id = session()->get('user_id');
        
        DB::table('qualification')        
        ->insert([
            'user_id' => $user_id,
            'subject' => $req->subject,
            'award' => $req->award,
            'certification' => $req->certification,
            'institution' => $req->institution,
            'year' => $req->year,
        ]);

        return redirect('/qual');
    }
}
