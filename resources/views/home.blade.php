<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

    <title>Home</title>
</head>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    var cont = 0;

    function loopSlider() {
        var xx = setInterval(function() {
            switch (cont) {
                case 0: {
                    $("#slider-1").fadeOut(400);
                    $("#slider-2").delay(400).fadeIn(400);
                    $("#sButton1").removeClass("bg-purple-800");
                    $("#sButton2").addClass("bg-purple-800");
                    cont = 1;

                    break;
                }
                case 1: {

                    $("#slider-2").fadeOut(400);
                    $("#slider-1").delay(400).fadeIn(400);
                    $("#sButton2").removeClass("bg-purple-800");
                    $("#sButton1").addClass("bg-purple-800");

                    cont = 0;

                    break;
                }


            }
        }, 8000);

    }

    function reinitLoop(time) {
        clearInterval(xx);
        setTimeout(loopSlider(), time);
    }

    function sliderButton1() {

        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-purple-800");
        $("#sButton1").addClass("bg-purple-800");
        reinitLoop(4000);
        cont = 0

    }

    function sliderButton2() {
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-purple-800");
        $("#sButton2").addClass("bg-purple-800");
        reinitLoop(4000);
        cont = 1

    }

    $(window).ready(function() {
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");


        loopSlider();

    });

</script>

<body>

    <div class="navbar flex w-full justify-between py-2 px-10 items-center font-semibold">
        <div class="logo">
            <img class=" h-14" src="{{ url('images/logo.png') }}"><span
                class="text-sm relative -top-3 left-12 text-blue-700 font-extrabold">University</span>
        </div>
        <nav>
            <ul class="flex gap-6"> 
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/apply') }}">Apply</a></li>
                <li><a href="{{ url('/media') }}">Media</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
            </ul>
        </nav>
        @if(session()->missing('user_id'))
        
        <div class="nav_btn">            
            <button class="font-semibold py-1 px-6 bg-blue-500 rounded-full text-white" type="submit"><a
                    href="{{ url('login') }}">Login</a></button>
        </div>
        @else
        
        <div class="username flex">
            <div class="pd w-7 m-1">
                <img src="{{ session()->get('pro_pic') }}" alt="Prifile Pic">
            </div>
            <div class="name m-1">
                <a href="{{ url('/profile') }}">{{ session()->get('username') }}</a>
            </div>
        </div>
        
        @endif
    </div>

    <div class="slider">
        <div class="sliderAx h-auto">
            <div id="slider-1" class="container mx-auto">
                <div class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill"
                    style="background-image: url('{{ url('images/students1.jpg') }}')">
                    <div class="md:w-1/2 mt-52">
                        <p class="font-bold text-sm uppercase">Course</p>
                        <p class="text-3xl font-bold">Web Developer</p>
                        <p class="text-2xl mb-10 leading-none">Being first in the search result organically <br> in
                            Google is the dream of all website owners.</p>
                        <a href="{{ url('/apply') }}"
                            class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Learn
                            More</a>
                    </div>
                </div> <!-- container -->
                <br>
            </div>

            <div id="slider-2" class="container mx-auto">
                <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill"
                    style="background-image: url('{{ url('images/college1.jpg') }}')">
                <div class="md:w-1/2 mt-52">
                        <p class="font-bold text-sm uppercase">Course</p>
                        <p class="text-3xl font-bold">Web Developer</p>
                        <p class="text-2xl mb-10 leading-none">Being first in the search result organically <br> in
                            Google is the dream of all website owners.</p>
                        <a href="{{ url('/apply') }}"
                            class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Learn
                            More</a>
                    </div>
                </div> <!-- container -->
                <br>
            </div>
        </div>
        <div class="flex justify-between w-12 mx-auto pb-2">
            <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 "></button>
            <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
        </div>
    </div>





    <!-- Main -->

    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Your First Step to Becoming a Professional</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Develop and strengthen your technical skills, apply new competencies in the workplace to increase job satisfaction and confidence, as well as improve your overall employability and entrepreneurial skills..</p>
    </div>
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M8 17l4 4 4-4m-4-5v9"></path>
            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
          <p class="leading-relaxed">Downloads</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
          <p class="leading-relaxed">Users</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
            <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
          <p class="leading-relaxed">Files</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
          <p class="leading-relaxed">Places</p>
        </div>
      </div>
    </div>
  </div>
</section>


    {{-- <div class="mt-6 p-4 px-6 bg-blue-50">
        <div class="pb-6">
            <h1 class="mt-2 mb-6 text-center font-bold text-3xl">Fisrt Step in Becoming a Professional </h1>
            <div class="md:grid grid-cols-2 gap-6">
                <div>
                    <img class="md:h-full object-cover"
                        src="{{ url('images/professional.jpeg') }}" alt="" />
                </div>
                <div>
                    <h1 class="my-6 text-2xl font-bold text-gray-700">Become Certified</h1>
                    {{-- <span class="text-lg mr-4 py-1 px-4 rounded-full bg-gray-800 text-white">2020</span>
                    <spnan class="text-lg">Dashboard</spnan> 
                    <p class="mt-6 text-lg text-gray-700">Develop and strengthen your technical skills, apply new competencies in the workplace to increase job satisfaction and confidence, as well as improve your overall employability and entrepreneurial skills..</p>
                </div>
            </div>
        </div>
    </div> --}}
    

    {{-- Cards go here --}}

    <div class="cards_container mt-6">
        <div class="ads mt-4 mb-8 text-center text-2xl font-bold w-full">
            <h1>Couse Advertisment</h1>
        </div><br>
        <div class="container flex mb-12 flex-wrap m-auto w-full gap-10 justify-center">
            <div class="max-w-sm">
                <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                    <img class="rounded-t-lg" src="{{ url('images/programming1.jpg') }}" alt="" />
                    <div class="py-6 px-8 rounded-lg bg-white">
                        <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">
                            Web Developer.</h1>
                        <p class="text-gray-700 tracking-wide">A fitness instructor, also known as a personal trainer,
                            provides training and instruction of fitness programs to individuals and groups.</p>
                        <button
                            class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300"><a
                                href="{{ url('/apply') }}">Apply
                                Now</a>
                        </button>
                    </div>
                    <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                        <span class="text-md">Top 5</span>
                    </div>
                </div>
            </div>

            <div class="max-w-sm">
                <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                    <img class="rounded-t-lg" src="{{ url('images/customer.jpg') }}" alt="" />
                    <div class="py-6 px-8 rounded-lg bg-white">
                        <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">
                            Customer Service.</h1>
                        <p class="text-gray-700 tracking-wide">Welding is a fabrication process whereby two or more
                            parts
                            are fused together by means of heat, pressure or both forming a join as the parts cool. </p>
                        <button
                            class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300"><a
                                href="{{ url('/apply') }}">Apply
                                Now</a></button>
                    </div>
                    <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                        <span class="text-md">Top 5</span>
                    </div>
                </div>
            </div>

            <div class="max-w-sm">
                <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                    <img class="rounded-t-lg" src="{{ url('images/electrical.jpg') }}" alt="" />
                    <div class="py-6 px-8 rounded-lg bg-white">
                        <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">
                            Electrical Installation.</h1>
                        <p class="text-gray-700 tracking-wide">Electrical installation Is installing of whole new
                            electrical
                            wires and electrical outlets in the residential, commercial or any institutional buildings.
                        </p>
                        <button
                            class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300"><a
                                href="{{ url('/apply') }}"></a> Apply
                            Now</button>
                    </div>
                    <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                        <span class="text-md">Top 5</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="md:gap-4 p-6 bg-blue-50 md:grid">
        <div class="grid grid-cols-2 justify-between lg:px-40 md:mb-4">
            <h1 class="justify-start md:text-left text-2xl font-bold">Students Review</h1>
        </div> --}}

        <div class="container px-5 py-24 mx-auto">
    <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Students Review</h1>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/2 w-full">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">The department is really helpful, and we study what the tutors specialize in, so you know that they know their stuff. My personal tutor is amazing!</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Kimone Scott</span>
              <span class="text-gray-500 text-sm">Customer Service</span>
            </span>
          </a>
        </div>
      </div>
      <div class="p-4 md:w-1/2 w-full">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Tutors are helpful in aiding and encouraging learning and the support available for academic and mental health issues are amazing.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Jerome Todller</span>
              <span class="text-gray-500 text-sm">Web Developer</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>


       {{--  <div class="md:grid grid-cols-2 gap-6 lg:px-40">
            <div>
                <div class="bg-white p-4">
                    <div>
                        <div class="mb-4">
                            <h1 class="text-2xl font-bold text-gray-700">Shelly-Ann C. Burnard</h1>
                        </div>

                        <div class="">
                            <span class="block mb-4 text-xl">20 Feb 2020 | Customer Service</span>
                            <p class="text-lg text-gray-700">"Tutors are helpful in aiding and encouraging learning and the support available for academic and mental health issues are amazing."</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-4 md:mt-0 mt-6">
                <div>
                    <div class="mb-4">
                        <h1 class="text-2xl font-bold text-gray-700">Mathew A. Layne</h1>
                        <p class="hidden">View all</p>
                    </div>

                    <div class="">
                        <span class="block mb-4 text-xl">12 July 2019 | Web Developer</span>
                        <p class="text-lg text-gray-700">"The department is really helpful, and we study what the tutors specialize in, so you know that they know their stuff. My personal tutor is amazing!"</p>
                    </div>
                </div>
            </div>
        </div> --}}
{{-- </div> --}}
</body>
<x-Footer />

</html>