<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>Course Details</title>
</head>
<body>
    <x-header />
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex justify-center">
                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">COURSE NAME</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $course_detail->course }}</h1>
                    <div class="flex mb-4">
                        <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">
                            Description</a>              
                    </div>
                    <p class="leading-relaxed mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sed porro labore, ducimus deserunt similique rem officiis obcaecati harum blanditiis maxime nulla saepe quibusdam fuga pariatur illum, dicta corrupti possimus voluptatum. Minima eos, cumque culpa commodi animi doloribus tempora error, explicabo tempore odit, enim eveniet! Eius mollitia.</p>
                    <div class="flex border-t border-gray-200 py-2">
                        <span class="text-gray-500">Award</span>
                        <span class="ml-auto text-gray-900">{{ $course_detail->award }}</span>
                    </div>
                    <div class="flex border-t border-gray-200 py-2">
                        <span class="text-gray-500">Format</span>
                        <span class="ml-auto text-gray-900">{{ $course_detail->format }}</span>
                    </div>
                    <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                        <span class="text-gray-500">Start Date</span>
                        <span class="ml-auto text-gray-900">{{ $course_detail->start_date }}</span>
                    </div>
                    <div class="flex">
                        <span class="title-font font-medium text-2xl text-gray-900">Cost: ${{ $course_detail->cost }}</span>
                        <button
                            class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Pay Now</button>                        
                    </div>
                </div>                
            </div>
        </div>
    </section>
</body>

</html>