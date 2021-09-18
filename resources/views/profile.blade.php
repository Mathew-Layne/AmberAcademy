<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url("css/app.css") }}">
    <title>Profile</title>
</head>
<x-Header />

<body>

    <div class="flex flex-wrap bg-gray-100 w-full h-screen">
        <div class="w-3/12 bg-white rounded p-3 shadow-lg">
            <div class="flex items-center space-x-4 p-2 mb-5">
                <img class="h-12 rounded-full" src="{{ session()->get('pro_pic') }}" alt="Profile Pic">
                <div>
                    <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">
                        {{ session()->get('first_name') }} {{ session()->get('last_name') }}</h4>
                    <span class="text-sm tracking-wide flex items-center space-x-1">
                        <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg><span class="text-gray-600">Verified</span>
                    </span>
                </div>
            </div>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="{{ url('/profile') }}"
                        class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span>My profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/qual') }}"
                        class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                        </span>
                        <span>Qualifications</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/status') }}"
                        class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                        </span>
                        <span>Application Status</span>
                    </a>
                </li>


                <li>
                    <a href="{{ url('/purchases') }}"
                        class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </span>
                        <span>Purchases</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}"
                        class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </span>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-9/12">
            @if(session()->get('profile') == 'myprofile')

            <div class="p-10 text-gray-600 ">
                <h1 class="text-3xl font-bold mb-6">Personal Information</h1>
                <div class="content">
                    <table class=" text-xl">
                        <tr>
                            <td class="font-bold pr-20">First Name:</td>
                            <td>{{ $profile->first_name }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold pr-20">Last Name:</td>
                            <td>{{ $profile->last_name }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold pr-20">Username:</td>
                            <td>{{ $profile->username }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold pr-20">Email:</td>
                            <td>{{ $profile->email }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold pr-20">Date of Birth:</td>
                            <td>{{ $profile->dob }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold pr-20">Phone Number:</td>
                            <td>{{ $profile->phone_number}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold pr-20">Address:</td>
                            <td>{{ $profile->address }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold pr-20">City:</td>
                            <td>{{ $profile->city }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold pr-20">Parish:</td>
                            <td>{{ $profile->parish }}</td>
                        </tr>
                    </table>
                    <button class="mt-5 ">
                        <a class="px-8 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none"
                            href="{{ url('editprofile') }}">Edit</a>
                    </button>
                </div>
            </div>
            @elseif(session()->get('profile') == 'editprofile')

            <div class="leading-loose mt-2">
                <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post" enctype="multipart/form-data">
                    <h1 class="text-3xl font-bold">Edit Information</h1>
                    @csrf
                    <div class="inline-block mt-2 w-1/2 pr-1">
                        <label class="text-sm text-gray-600" for="cus_email">Name</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="first_name" type="text"
                            value="{{ $data->first_name }}">
                        @error('first_name')<span
                            class="alert alert-danger text-red-500 text-sm">{{ 'The First Name field is required.' }}</span>@enderror
                    </div>
                    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                        <label class="hidden block text-sm text-gray-600" for="cus_email">Last Name</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="last_name" type="text"
                            value="{{ $data->last_name }}">
                        @error('last_name')<span
                            class="text-red-500 text-sm">{{ 'The Last Name field is required.' }}</span>@enderror
                    </div>
                    <div class="inline-block mt-2 w-1/2 pr-1">
                        <label class="text-sm text-gray-600" for="cus_email">Username</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="username" type="text"
                            value="{{ $data->username }}">
                        @error('username')<span
                            class="text-red-500 text-sm">{{ 'The Username field is required.' }}</span>@enderror
                    </div>
                    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                        <label class="block text-sm text-gray-600" for="cus_email">Phone Number</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="phone_number"
                            type="text" value="{{ $data->phone_number }}">
                        @error('dob')<span
                            class="text-red-500 text-sm">{{ 'The Date of birth field is required.' }}</span>@enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="email" type="email"
                            value="{{ $data->email }}">
                        @error('email')<span
                            class="text-red-500 text-sm">{{ 'The Email field is required.' }}</span>@enderror
                    </div>
                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="address" type="text"
                            value="{{ $data->address }}">
                        @error('address')<span
                            class="text-red-500 text-sm">{{ 'The Address field is required.' }}</span>@enderror
                    </div>
                    <div class="inline-block mt-2 w-1/2 pr-1">
                        <label class="hidden block text-sm text-gray-600" for="cus_email">City</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="city" type="text"
                            value="{{ $data->city }}">
                        @error('city')<span
                            class="text-red-500 text-sm">{{ 'The City field is required.' }}</span>@enderror
                    </div>
                    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                        <select name="parish" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded">
                            <option value="{{ $data->parish }}">{{ $data->parish }}</option>
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
                        @error('parish')<span
                            class="text-red-500 text-sm">{{ 'The Parish field is required.' }}</span>@enderror
                    </div>

                    <div class="inline-block mt-2 w-1/2 pr-1">
                        <label class="block text-sm text-gray-600">Profile Picture</label>
                        <input class="w-full px-2 py-2 text-gray-700 rounded" name="pro_pic" type="file"
                            value="{{ $data->pro_pic }}">
                        {{-- @error('city')<span class="text-red-500 text-sm">{{ 'The City field is required.' }}</span>@enderror
                        --}}
                    </div>

                    <div class="mt-4">
                        <button class="py-3 bg-green-500 text-white w-full rounded hover:bg-green-600"
                            type="submit">Update</button>
                    </div>
                </form>
            </div>

            @elseif(session()->get('profile') == 'qual')
            <div class="text-gray-900 bg-gray-100 mt-20">
                <div class="p-4 flex">
                    <h1 class="text-3xl">
                        Qualifications
                    </h1>
                </div>
                <div class="px-3 py-3 flex justify-center">
                    <table class="w-full text-md bg-white shadow-md rounded mb-4">
                        <tbody>
                            <tr class="border-b">
                                <th class="text-left p-3 px-3">Subject</th>
                                <th class="text-left p-3 px-3">Award</th>
                                <th class="text-left p-3 px-5">Certification</th>
                                <th class="text-left p-3 px-5">Institution</th>
                                <th class="text-left p-3 px-5">Year</th>
                            </tr>
                            @foreach($qual as $info)

                            <tr class="border-b bg-gray-100 hover:bg-gray-200">
                                <td class="p-3 px-5">{{ $info->subject }}</td>
                                <td class="p-3 px-5">{{ $info->award }}</td>
                                <td class="p-3 px-5">{{ $info->certification }}</td>
                                <td class="p-3 px-5">{{ $info->institution }}</td>
                                <td class="p-3 px-5">{{ $info->year }}</td>

                                {{-- <td class="p-3 px-5">
                   <button type="button"
                    class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Activate</button>
                    <button type="button"
                    class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Deactivate</button>
                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <button class="mt-3 ml-3">
                    <a class="px-8 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none"
                        href="{{ url('addqual') }}">Add Qualification</a>
                </button>
            </div>

            @elseif(session()->get('profile') == 'addqual')

            <div class="leading-loose mt-2">
                <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post">
                    <h1 class="text-3xl font-bold">Add Qualifications</h1>
                    @csrf
                    <div class="mt-2">
                        <label class="text-sm text-gray-600" for="cus_email">Subject</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="subject" type="text"
                            Placeholder="Enter Subject">
                        {{-- @error('first_name')<span class="alert alert-danger text-red-500 text-sm">{{ 'The First Name field is required.' }}</span>@enderror
                        --}}
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="cus_email">Certification</label>
                        <select name="certification" class="w-full px-2 py-3 text-gray-700 bg-gray-200 rounded">
                            <option value="">Select Certification</option>
                            <option value="CSEC">CSEC</option>
                            <option value="Cape">Cape</option>
                            <option value="H.E.A.R.T Certificate">H.E.A.R.T Certificate</option>
                        </select>
                        @error('email')<span
                            class="text-red-500 text-sm">{{ 'The Email field is required.' }}</span>@enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="cus_email">Award</label>
                        <select name="award" class="w-full px-2 py-3 text-gray-700 bg-gray-200 rounded">
                            <option value="">Select Award</option>
                            <option value="Grade I">Grade I</option>
                            <option value="Grade II">Grade II</option>
                            <option value="Grade III">Grade III</option>
                            <option value="Level 1 Certificate">Level 1 Certificate</option>
                            <option value="Level 2 Certificate">Level 2 Certificate</option>
                            <option value="Level 3 Certificate">Level 3 Certificate</option>
                        </select>
                        {{-- @error('last_name')<span class="text-red-500 text-sm">{{ 'The Last Name field is required.' }}</span>@enderror
                        --}}
                    </div>
                    <div class="inline-block mt-2 w-1/2 pr-1">
                        <label class="text-sm text-gray-600" for="cus_email">Institution</label>
                        <select name="institution" class="w-full px-2 py-3 text-gray-700 bg-gray-200 rounded">
                            <option value="">Select Institution</option>
                            <option value="High School">High School</option>
                            <option value="H.E.A.R.T Trust">H.E.A.R.T Trust</option>
                        </select>
                        @error('username')<span
                            class="text-red-500 text-sm">{{ 'The Username field is required.' }}</span>@enderror
                    </div>
                    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                        <label class="block text-sm text-gray-600" for="cus_email">Year</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name="year" type="number"
                            placeholder="Enter Year">
                        @error('dob')<span
                            class="text-red-500 text-sm">{{ 'The Date of birth field is required.' }}</span>@enderror
                    </div>

                    <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">

                        @error('parish')<span
                            class="text-red-500 text-sm">{{ 'The Parish field is required.' }}</span>@enderror
                    </div>

                    <div class="mt-3">
                        <button class="py-3 mb-3 bg-green-500 text-white w-full rounded hover:bg-green-600"
                            type="submit">Add</button>
                        <button class="py-3 bg-red-500 w-full text-white rounded hover:bg-red-600"><a class="py-3 px-20"
                                href="{{ url('/qual') }}">Cancel</a></button>
                    </div>
                </form>
            </div>

            @elseif(session()->get('profile') == 'app_status')
            <div class="text-gray-900 bg-gray-100 mt-20">
                <div class="p-4 flex">
                    <h1 class="text-3xl">
                        Application Status
                    </h1>
                </div>
                <div class="px-3 py-3 flex justify-center">
                    <table class="w-full text-md bg-white shadow-md rounded mb-4">
                        <tbody>
                            <tr class="border-b">
                                <th class="text-left p-3 px-3">Courses</th>
                                <th class="text-left p-3 px-3">Award</th>
                                <th class="text-left p-3 px-5">Format</th>
                                <th class="text-left p-3 px-5">Application Status</th>
                                <th class="text-left p-3 px-5">Start Date</th>
                                <th class="text-left p-3 px-5">Action</th>
                            </tr>
                            @foreach($status as $info)

                            <tr class="border-b bg-gray-100 hover:bg-gray-200">
                                <td class="p-3 px-5">{{ $info->course }}</td>
                                <td class="p-3 px-5">{{ $info->award }}</td>
                                <td class="p-3 px-5">{{ $info->format }}</td>
                                <td class="p-3 px-5">{{ $info->app_status }}</td>
                                <td class="p-3 px-5">{{ $info->start_date }}</td>
                                <td class="p-3 px-5">

                                    
                                    <button type="button"
                                        class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Pay
                                        Now</button>
                                    <button type="button"
                                        class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Cancel</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>                
            </div>

            @elseif(session()->get('profile') == 'purchases')
            <div class="text-gray-900 bg-gray-100 mt-20">
                <div class="p-4 flex">
                    <h1 class="text-3xl">
                        Purchases
                    </h1>
                </div>
                <div class="px-3 py-3 flex justify-center">
                    <table class="w-full text-md bg-white shadow-md rounded mb-4">
                        <tbody>
                            <tr class="border-b">
                                <th class="text-left p-3 px-3">Subject</th>
                                <th class="text-left p-3 px-3">Award</th>
                                <th class="text-left p-3 px-5">Certification</th>
                                <th class="text-left p-3 px-5">Institution</th>
                                <th class="text-left p-3 px-5">Year</th>
                            </tr>
                            @foreach($qual as $info)

                            <tr class="border-b bg-gray-100 hover:bg-gray-200">
                                <td class="p-3 px-5">{{ $info->subject }}</td>
                                <td class="p-3 px-5">{{ $info->award }}</td>
                                <td class="p-3 px-5">{{ $info->certification }}</td>
                                <td class="p-3 px-5">{{ $info->institution }}</td>
                                <td class="p-3 px-5">{{ $info->year }}</td>

                                {{-- <td class="p-3 px-5">
                               <button type="button"
                                class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Activate</button>
                                <button type="button"
                                class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Deactivate</button>
                            </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <button class="mt-3 ml-3">
                    <a class="px-8 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none"
                        href="{{ url('addqual') }}">Add Qualification</a>
                </button>
            </div>

            @endif
        </div>
    </div>
</body>

</html>