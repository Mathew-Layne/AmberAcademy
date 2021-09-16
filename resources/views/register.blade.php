<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
  <title>Registration</title>
</head>

<body>

  <!-- url('/img/hero-pattern.svg') -->
  <div class="flex min-h-screen bg-white">

    <div class="w-1/2 bg-cover bg-center md:block hidden" style="background-image:  url('images/university.jpg')"></div>
    <!-- <div class="bg-no-repeat bg-right bg-cover max-w-max max-h-8 h-12 overflow-hidden">
            <img src="log_in.webp" alt="hey">
        </div> -->

    <div class="md:w-1/2 max-w-xl mx-auto my-18 px-4 py-5 shadow-none">

      <div class="text-left p-0 font-sans">

        <h1 class=" text-gray-800 text-3xl font-medium">Create Your Account</h1>
        <h3 class="p-1 text-gray-700">Free forever. No payment needed.</h3>
      </div>
      <form class="mt-4 p-0" method="post" action="{{ url('/register') }}">
        @csrf
        <div class="inline-block mt-2 w-1/2 pr-1">
          <label class="text-sm text-gray-600" for="cus_email">Name</label>
          <input class="w-full px-2 py-2 text-gray-700 border-2 rounded" name="first_name" type="text"
            placeholder="First Name">
            @error('first_name')<span class="alert alert-danger text-red-500 text-sm">{{ 'The First Name field is required.' }}</span>@enderror
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
          <label class="hidden block text-sm text-gray-600" for="cus_email">Last Name</label>
          <input class="w-full px-2 py-2 text-gray-700 border-2 rounded" name="last_name" type="text"
             placeholder="Last Name">
             @error('last_name')<span class="text-red-500 text-sm">{{ 'The Last Name field is required.' }}</span>@enderror
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
          <label class="text-sm text-gray-600" for="cus_email">Username</label>
          <input class="w-full px-2 py-2 text-gray-700 border-2 rounded" name="username" type="text"
             placeholder="Username">
             @error('username')<span class="text-red-500 text-sm">{{ 'The Username field is required.' }}</span>@enderror
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
          <label class="block text-sm text-gray-600" for="cus_email">Date of Birth</label>
          <input class="w-full px-2 py-2 text-gray-700 border-2 rounded" name="dob" type="date">
          @error('dob')<span class="text-red-500 text-sm">{{ 'The Date of birth field is required.' }}</span>@enderror
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="cus_email">Email</label>
          <input class="w-full px-2 py-2 text-gray-700 border-2 rounded" name="email" type="email"
             placeholder="Your Email">
             @error('email')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
          <label class="text-sm text-gray-600" for="cus_email">Password</label>
          <input class="w-full px-2 py-2 text-gray-700 border-2 rounded" name="password" type="password"
             placeholder="Create Password">
             @error('password')<span class="text-red-500 text-sm">{{ 'The Password field is required.' }}</span>@enderror
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
          <label class="hidden block text-sm text-gray-600" for="cus_email">Verify Password</label>
          <input class="w-full px-2 py-2 text-gray-700 border-2 rounded" name="password_confirmation" type="password"
             placeholder="Verify Password">
             @error('vpassword')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>
        <div class="mt-2">
          <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
          <input class="w-full px-2 py-2 text-gray-700 border-2 rounded" name="address" type="text"
             placeholder="Street" aria-label="Email">
             @error('address')<span class="text-red-500 text-sm">{{ 'The Address field is required.' }}</span>@enderror
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
          <label class="hidden block text-sm text-gray-600" for="cus_email">City</label>
          <input class="w-full px-2 py-2 text-gray-700 border-2 rounded" name="city" type="text"
             placeholder="City">
             @error('city')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">          
          <select name="parish" class="w-full px-2 py-2 text-gray-700 border-2 rounded">
            <option value="">Select Parish</option>
            <option value="Clarendon">Clarendon</option>
            <option value="Hanover">Hanover</option>
            <option value="Kingston & St Andrew">Kingston & St Andrew</option>
            <option value="Manchester">Manchester</option>
            <option value="St. Ann">St. Ann</option>
            <option value="St. Catherine">St. Catherine</option>
            <option value="St. Elizabeth">St. Elizabeth</option>
            <option value="St. James">St. James</option>
            <option value="St. Mary">St. Mary</option>
            <option value="St. Thomas">St. Thomas</option>
            <option value="Trelawny">Trelawny</option>
            <option value="Westmoreland">Westmoreland</option>
          </select>
          @error('parish')<span class="text-red-500 text-sm">{{ 'The Parish field is required.' }}</span>@enderror
        </div>

        <div class="mt-4">
          <button class="py-3 bg-green-500 text-white w-full rounded hover:bg-green-600" type="submit">Register
            Now</button>
        </div>
      </form>      
      <a class="" href="{{ url('login') }}" data-test="Link"><span
          class="block  p-5 text-center text-gray-800  text-xs ">Already have an account?</span></a>
    </div>
  </div>
</body>

</html>