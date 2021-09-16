<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function home()
    {
        return view('index');
    }

    function registerview()
    {
        return view('register');
    }

    function register(Request $req)
    {
        date_default_timezone_set('Jamaica');
        $validate = $req->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => 'required|string',
            'dob' => 'required|string',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
            'address' => 'required|string',
            'city' => 'required|string',
            'parish' => 'required|string',
        ]);
        $current_date = now();
        $dob = date_create($req->dob);

        // dd(date_diff($current_date, $dob)->y);



        if (date_diff($current_date, $dob)->y < 18) {
            return "<script>
                alert('You must be 18 years old to become a member.');
                window.location.href = '/';
            </script>
            ";
        }

        $register = DB::table('user')
            ->insert([
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'username' => $req->username,
                'dob' => $req->dob,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'address' => $req->address,
                'city' => $req->city,
                'parish' => $req->parish,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ]);

        return redirect('login');
    }

    function loginview()
    {
        return view('login');
    }

    function login(Request $req)
    {
        $validate = $req->validate([
            'email' => 'required|string',
            'password' => 'required',
        ]);

        $data = DB::table('user')
            ->where('email', $req->email)
            ->get();

        if (Auth::attempt($validate)) {
            $req->session()->regenerate();

            foreach ($data as $data) {
                session()->put('user_id', $data->id);
                session()->put('user_type', $data->user_type);
                session()->put('email', $data->email);
                session()->put('pro_pic', $data->pro_pic);
                session()->put('first_name', $data->first_name);
                session()->put('last_name', $data->last_name);
                session()->put('username', $data->username);
            }
            if (session()->get('user_type') == 'Admin') {
                return redirect()->intended('/admin');
            }
            return redirect()->intended('/profile');
        }

        return back()->withErrors([
            'email' => 'Incorrect login or password',
        ]);
    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }



    function apply()
    {
        $data = DB::table('courses')
            ->get();
        return view('apply', ['data' => $data]);
    }

    function applied($id)
    {

        DB::table('applied')
            ->join('user', 'applied.user_id', 'user.id')
            ->join('courses', 'applied.course_id', 'courses.id')
            ->where('user.id', session('user_id'))
            ->insert([
                'course_id' => $id,
                'user_id' => session('user_id')
            ]);

        return redirect('/');
    }

    function about()
    {
        return view('about');
    }

    function media()
    {
        return view('media');
    }
}
