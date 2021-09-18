<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">

    <title>Amber University</title>

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/LineIcons.2.0.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/animate.css') }}">
    <!-- Tiny Slider  -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/tiny-slider.css') }}">
    <!-- Tailwind css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/tailwind.css') }}">
</head>

<body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap" class="relative">
        <!-- Navbar Start -->
        <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
            <div class="container">
                <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                    <a class="navbar-brand" href="index.html">
                        <img class="img-responsive w-48" src="images/logo2.png" alt="Logo">
                    </a>
                    <button class="navbar-toggler focus:outline-none block lg:hidden" type="button"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav text-lg font-extrabold mr-auto justify-center gap-6 items-center lg:flex">
                            <li class="nav-item">
                                <a class="active" href="#hero-area">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="{{ url('/apply') }}">Apply</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="{{ url('/media') }}">Media</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="" href="#feature">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>  
                    @if(session()->get('user_type') == "User")
                    <div class="username flex">
                        <div class="pd w-8 m-1">
                            <img class="rounded-3xl h-full" src="{{ session()->get('pro_pic') }}" alt="Prifile Pic">
                        </div>
                        <div class="name m-1 font-extrabold">
                            <a href="{{ url('/profile') }}">{{ session()->get('username') }}</a>
                    
                        </div>
                    </div>
                    
                    @elseif(session()->get('user_type') == "Admin")
                    
                    <div class="username flex">
                        <div class="pd w-8 m-1">
                            <img class="rounded-3xl h-full" src="{{ session()->get('pro_pic') }}" alt="Prifile Pic">
                        </div>
                        <div class="name m-1 font-extrabold">
                            <a href="{{ url('/admin') }}">{{ session()->get('username') }}</a>
                    
                        </div>
                    </div>
                    
                    @else
                    
                    <div class="nav_btn">
                        <button class="font-semibold py-1 px-6 bg-blue-500 rounded-full text-white" type="submit"><a
                                href="{{ url('login') }}">Login</a></button>
                    </div>
                    @endif                  
                    
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- Hero Area Start -->
    <section id="hero-area" class="bg-blue-100 pt-48 pb-10">
        <div class="container">
            <div class="flex justify-between">
                <div class="w-full text-center">
                    <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-2 wow fadeInUp" data-wow-delay="1s">
                        Amber Academy</h2>
                        <h2 class="text-xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">                            
                            Developing the mind of the youths of tomorrow.</h2>
                    <div class="text-center mb-10 wow fadeInUp" data-wow-delay="1.2s">
                        <a href="{{ url('/register') }}" rel="nofollow" class="btn">Register Now</a>
                    </div>
                    <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
                        <img class="img-fluid mx-auto w-5/6" src="{{ url('images/amber1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End -->

    <!-- Services Section Start -->
    <section id="services" class="py-24">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Courses</h2>
            </div>
            <div class="flex flex-wrap">
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="icon text-5xl">
                            <i class="fas fa-code"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Web Development</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
                                perspiciatis dicta labore nulla beatae quaerat quia
                                incidunt laborum aspernatur...</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon text-5xl">
                            <i class="fal fa-image-polaroid"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Graphic Design</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
                                perspiciatis dicta labore nulla beatae quaerat quia
                                incidunt laborum aspernatur...</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
                        <div class="icon text-5xl">
                            <i class="fal fa-phone-office"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Customer Service</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
                                perspiciatis dicta labore nulla beatae quaerat quia
                                incidunt laborum aspernatur...</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
                        <div class="icon text-5xl">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Business Management</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
                                perspiciatis dicta labore nulla beatae quaerat quia
                                incidunt laborum aspernatur...</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="1.5s">
                        <div class="icon text-5xl">
                            <i class="fas fa-heart-rate"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Fitness</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
                                perspiciatis dicta labore nulla beatae quaerat quia
                                incidunt laborum aspernatur...</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="icon text-5xl">
                            <i class="far fa-search-dollar"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Digital Marketing</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
                                perspiciatis dicta labore nulla beatae quaerat quia
                                incidunt laborum aspernatur...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Feature Section Start -->
        <div id="feature" class="bg-blue-100 py-24">
            <div class="container">
                <div class="flex flex-wrap items-center">
                    <div class="w-full lg:w-1/2">
                        <div class="mb-5 lg:mb-0">
                            <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Learn More About Us</h2>
        
                            <div class="">
                                <p class="leading-relaxed">The Amber HEART Academy is a collaboration between the Government of Jamaica (HEART/NSTA
                                    Trust and HOPE) and the Amber
                                    Group. The initiative is the first of its kind in the Caribbean and will engage unattached youth across Jamaica with
                                    skills training in Software Programming Operations at the Stony Hill Heart Academy. The training is a one-year
                                    residential program where students are fully sponsored and provided accommodations, meals, equipment's and
                                    education.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
                            <img src="{{ url('images/amber5.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    
    <!-- Feature Section End -->

    <!-- Team Section Start -->
    <section id="team" class="py-24 text-center">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Our Team</h2>
            </div>
            <div class="flex flex-wrap justify-center">
                <!-- Team Item Starts -->
                <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="team-item">
                        <div class="team-img relative">
                            <img class="img-fluid" src="{{ url('images/Mathew.jpg') }}" alt="">
                            <div class="team-overlay">
                                <ul class="flex justify-center">
                                    <li class="mx-1">
                                        <a href="https://www.facebook.com/" class="social-link hover:bg-indigo-500">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="mx-1">
                                        <a href="https://www.twitter.com/" class="social-link hover:bg-blue-400">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="mx-1">
                                        <a href="https://www.instagram.com/" class="social-link hover:bg-red-500">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center px-5 py-3">
                            <h3 class="team-name">Mathew Layne</h3>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <!-- Team Item Ends -->
                <!-- Team Item Starts -->
                <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="team-item">
                        <div class="team-img relative">
                            <img class="img-fluid" src="{{ url('images/Dush.jpg') }}" alt="">
                            <div class="team-overlay">
                                <ul class="flex justify-center">
                                    <li class="mx-1">
                                        <a href="https://www.facebook.com/" class="social-link hover:bg-indigo-500">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="mx-1">
                                        <a href="https://www.twitter.com/" class="social-link hover:bg-blue-400">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="mx-1">
                                        <a href="https://www.instagram.com/" class="social-link hover:bg-red-500">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center px-5 py-3">
                            <h3 class="team-name">Dushyant Savadia</h3>
                            <p>CEO Amber Group</p>
                        </div>
                    </div>
                </div>
                <!-- Team Item Ends -->
                <!-- Team Item Starts -->
                <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="team-item">
                        <div class="team-img relative">
                            <img class="img-fluid" src="{{ url('images/Ruch.jpg') }}" alt="">
                            <div class="team-overlay">
                                <ul class="flex justify-center">
                                    <li class="mx-1">
                                        <a href="https://www.facebook.com/" class="social-link hover:bg-indigo-500">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="mx-1">
                                        <a href="https://www.twitter.com/" class="social-link hover:bg-blue-400">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="mx-1">
                                        <a href="https://www.instagram.com/" class="social-link hover:bg-red-500">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center px-5 py-3">
                            <h3 class="team-name">Ruchita Tripathi</h3>
                            <p>Operations Manager</p>
                        </div>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Clients Section Start -->
    <div id="clients" class="py-16 bg-blue-100">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Partner Companies</h2>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="0.3s">
                        <img class="client-logo w-52" src="images/logo3.png" alt="">
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="0.6s">
                        <img class="client-logo w-52" src="images/logo4.png" alt="">
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="0.9s">
                        <img class="client-logo w-52" src="images/logo5.png" alt="">
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="1.2s">
                        <img class="client-logo w-52" src="images/logo6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients Section End -->

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="py-24 bg-gray-800">
        <div class="container">
            <div class="flex justify-center mx-3">
                <div class="w-full lg:w-7/12">
                    <div id="testimonials" class="testimonials">
                        <!-- testimonial item start -->
                        <div class="item focus:outline-none">
                            <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                                <div class="text-center">
                                    <div class="text-white text-4xl p-5"><i class="fas fa-quote-left"></i></div>
                                    <p class="text-gray-600 leading-loose">Amber Academy has been recognised as one of the top 12 non-profit technology projects by industry publication,
                                    Nearshore America. We are proud of the progress that our students have made and are incredibly thankful to our generous partners who made
                                    this all possible. We are proud to be listed among other public-private partnerships which have implemented social initiatives to drive
                                    employment opportunities and upskill regional talent. </p>
                                </div>
                                <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                                    <img class="rounded-full p-2 w-full" src="images/Avatar.jpg" alt="">
                                </div>
                                <div class="mb-2">
                                    <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Jerome Williams</h2>
                                    <h3 class="font-medium text-white text-sm">Customer Service</h3>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->   

    <!-- Contact Section Start -->
    <section id="contact" class="py-24">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">
                    Contact</h2>
            </div>

            <div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">
                <div class="w-full md:w-1/2">
                    <div class="contact">
                        <h2 class="uppercase font-bold text-xl text-gray-700 mb-5 ml-3">Contact Form</h2>
                        <form id="contactForm" action="{{ url('contactus') }}" method="post">
                            @csrf
                            <div class="flex flex-wrap">
                                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                    <div class="mx-3">
                                        <input type="text" class="form-input rounded-full" id="name" name="name"
                                            placeholder="Name" required data-error="Please enter your name">
                                    </div>
                                </div>
                                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                    <div class="mx-3">
                                        <input type="text" placeholder="Email" id="email"
                                            class="form-input rounded-full" name="email" required
                                            data-error="Please enter your email">
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="mx-3">
                                        <input type="text" placeholder="Subject" id="subject" name="subject"
                                            class="form-input rounded-full" required
                                            data-error="Please enter your subject">
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="mx-3">
                                        <textarea class="form-input rounded-lg" id="message" name="msg"
                                            placeholder="Your Message" rows="5" data-error="Write your message"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="submit-button mx-3">
                                        <button class="btn" id="form-submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="ml-3 md:ml-12 wow fadeIn">
                        <h2 class="uppercase font-bold text-xl text-gray-700 mb-5">Get In Touch</h2>
                        <div>
                            <div class="flex flex-wrap mb-6 items-center">
                                <div class="contact-icon">
                                    <i class="fad fa-map-marker-alt"></i>
                                </div>
                                <p class="pl-3">9 Trafalgar Rd, Kingston</p>
                            </div>
                            <div class="flex flex-wrap mb-6 items-center">
                                <div class="contact-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <p class="pl-3">
                                    <a href="#" class="block">amberacadem@gmail.com</a>                                    
                                </p>
                            </div>
                            <div class="flex flex-wrap mb-6 items-center">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <p class="pl-3">                                    
                                    <a href="#" class="block">+1 (876) 392-7600</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
        <div class="mx-6 mb-6">
            <div class="flex">
                <div class="w-full">
                    <object style="border:0; height: 450px; width: 100%;"
                        data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Section End -->

    <!-- Footer Section Start -->
    <footer id="footer" class="bg-gray-800 py-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="mx-3 mb-8">
                        <div class="footer-logo mb-3 w-44">
                            <img src="images/logo2.png" alt="">
                        </div>
                        <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam
                            excepturi quasi, ipsam
                            voluptatem.</p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="mx-3 mb-8">
                        <h3 class="font-bold text-xl text-white mb-5">Company</h3>
                        <ul>
                            <li><a href="#" class="footer-links">Press Releases</a></li>
                            <li><a href="#" class="footer-links">Mission</a></li>
                            <li><a href="#" class="footer-links">Strategy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="mx-3 mb-8">
                        <h3 class="font-bold text-xl text-white mb-5">About</h3>
                        <ul>
                            <li><a href="#" class="footer-links">Career</a></li>
                            <li><a href="#" class="footer-links">Team</a></li>
                            <li><a href="#" class="footer-links">Clients</a></li>
                        </ul>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="mx-3 mb-8">
                        <h3 class="font-bold text-xl text-white mb-5">Find us on</h3>

                        <ul class="social-icons flex justify-start">
                            <li class="mx-2">
                                <a href="#" class="footer-icon hover:bg-indigo-500">
                                    <i class="fab fa-facebook-f"></i>                                    
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#" class="footer-icon hover:bg-blue-400">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>                                    
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#" class="footer-icon hover:bg-red-500">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>                                    
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#" class="footer-icon hover:bg-indigo-600">
                                    <i class="fab fa-linkedin-in" aria-hidden="true"></i>                                    
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full text-center">
                    <p class="text-white">© 2021 Mathew Layne — <a
                            class="text-white duration-300 hover:text-blue-600" href="https://tailwindtemplates.co"
                            rel="nofollow">@unrxlyman</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Go to Top Link -->
    <a href="#"
        class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
        <i class="far fa-long-arrow-up"></i>
    </a>

    <!-- Preloader -->
    <!--     <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div> -->
    <!-- End Preloader -->

    <!-- All js Here -->
    <script src="{{ url('js/wow.js') }}"></script>
    <script src="{{ url('js/tiny-slider.js') }}"></script>
    <script src="{{ url('js/contact-form.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>