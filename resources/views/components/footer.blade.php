<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/animate.css') }}">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/tailwind.css') }}">
    <title>Document</title>
</head>
<body>

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

<script src="{{ url('js/wow.js') }}"></script>
<script>
  new WOW().init();
</script>
    
</body>
</html>