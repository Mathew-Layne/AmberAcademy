<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="navbar font-bold flex w-full justify-between py-2 px-10 items-center">
        <div class="logo">
            <img class=" h-14" src="{{ url('images/logo2.png') }}">
        </div>
        <nav>
            <ul class="flex text-lg gap-6">
                <li class="hover:text-blue-700"><a href="{{ url('/') }}">Home</a></li>
                <li class="hover:text-blue-700"><a href="{{ url('/apply') }}">Apply</a></li>
                <li class="hover:text-blue-700"><a href="{{ url('/media') }}">Media</a></li>
                <li class="hover:text-blue-700"><a href="{{ url('/profile') }}">Profile</a></li>
                <li class="hover:text-blue-700"><a href="{{ url('/contactus') }}">Contact Us</a></li>
            </ul>
        </nav>
        @if(session()->missing('user_id'))            
        
        <div class="nav_btn">
            <button class="mx-2 font-semibold" type="submit"> <a href="{{ url('register') }}">Register</a></button>
            <button class="font-semibold py-1 px-6 bg-blue-500 rounded-full text-white" type="submit"><a
                    href="{{ url('login') }}">Login</a></button>
        </div>
        @else

        <div class="username flex">
            <div class="pd w-8 m-1">
                <img class="rounded-3xl h-full" src="{{ session()->get('pro_pic') }}" alt="Prifile Pic">
            </div>
            <div class="name m-1">
                <a href="{{ url('/profile') }}">{{ session()->get('username') }}</a>
                
            </div>
        </div>

        @endif
    </div>
    
</body>
</html>