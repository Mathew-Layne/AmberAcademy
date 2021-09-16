<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" (content="ie=edge">
  <link rel="stylesheet" href="{{ url('css/app.css') }}">
  <title>Media</title>
</head>
<x-Header />

<body>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Amber Academy Gallery</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quam quasi, autem cum corrupti dolorum, provident vero illum nihil voluptatem illo, molestias placeat natus non repellendus earum! Dolores, doloremque omnis.</p>
      </div>
      <div class="lg:w-5/6 mx-auto">
        <div class="flex flex-wrap w-full h-96 bg-gray-100 py-32 px-10 relative mb-4">
          <img alt="gallery" class="w-full bg-top object-cover h-full object-center block absolute inset-0"
            src="{{ url('images/university01.jpeg') }}">
          
        </div>
        <div class="flex flex-wrap -mx-2">
          <div class="px-2 w-1/2">
            <div class="flex flex-wrap w-full h-80 bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
              <img alt="gallery" class="w-full object-cover h-full object-center block  absolute inset-0"
                src="{{ url('images/university02.jpeg') }}">
              
            </div>
          </div>
          <div class="px-2 w-1/2">
            <div class="flex flex-wrap w-full h-80 bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
              <img alt="gallery" class="w-full object-cover h-full object-center block  absolute inset-0"
                src="{{ url('images/university03.jpeg') }}">
              
            </div>
          </div>
        </div>
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Amber Academy Academic Events</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quam
              quasi, autem cum corrupti dolorum, provident vero illum nihil voluptatem illo, molestias placeat natus non
              repellendus earum! Dolores, doloremque omnis.</p>
          </div>
          <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block"
                  src="{{ url('images/university.jpeg') }}">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block"
                  src="{{ url('images/university1.jpeg') }}">
              </div>
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block"
                  src="{{ url('images/university2.jpeg') }}">
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block"
                  src="{{ url('images/university3.jpeg') }}">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block"
                  src="{{ url('images/university5.jpeg') }}">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block"
                  src="{{ url('images/university4.jpeg') }}">
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col text-center w-full mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Amber Academy Sports Events</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quam
            quasi, autem cum corrupti dolorum, provident vero illum nihil voluptatem illo, molestias placeat natus non
            repellendus earum! Dolores, doloremque omnis.</p>
        </div>
        <div class="flex flex-wrap md:-m-2 -m-1">
          <div class="flex flex-wrap w-1/2">
            <div class="md:p-2 p-1 w-1/2">
              <img alt="gallery" class="w-full object-cover h-full object-center block"
                src="{{ url('images/university7.jpeg') }}">
            </div>
            <div class="md:p-2 p-1 w-1/2">
              <img alt="gallery" class="w-full object-cover h-full object-center block"
                src="{{ url('images/university6.jpeg') }}">
            </div>
            <div class="md:p-2 p-1 w-full">
              <img alt="gallery" class="w-full h-full object-cover object-center block"
                src="{{ url('images/university8.jpeg') }}">
            </div>
          </div>
          <div class="flex flex-wrap w-1/2">
            <div class="md:p-2 p-1 w-full">
              <img alt="gallery" class="w-full h-full object-cover object-center block"
                src="{{ url('images/university12.jpeg') }}">
            </div>
            <div class="md:p-2 p-1 w-1/2">
              <img alt="gallery" class="w-full object-cover h-full object-center block"
                src="{{ url('images/university11.jpeg') }}">
            </div>
            <div class="md:p-2 p-1 w-1/2">
              <img alt="gallery" class="w-full object-cover h-full object-center block"
                src="{{ url('images/university10.jpeg') }}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




</body>
<x-Footer />

</html>