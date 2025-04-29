<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Navbar -->
     <header>
        @yield('header')
        <nav class="bg-white border-grazy-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
    <a href="{{url('https://www.instagram.com/cheannsh_?igsh=MW4zOHZvemo4cDJhbA==')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-black text-2xl font-extrabold whitespace-nowrap dark:text-white text-lg md:text-2xl">F-06</span>
    </a>
    
    <!-- Navbar berada di sebelah kanan tulisan F-06 -->
    <div class="w-auto">
      <ul class="font-medium flex flex-row space-x-2 md:space-x-4">
        <li>
          <a href="{{ url('fathan') }}" class="py-1 px-3 md:py-2 md:px-4 text-black bg-blue-700 rounded md:bg-transparent md:text-yellow-700 dark:text-white md:dark:text-blue-500 text-sm md:text-base">Home</a>
        </li>
        <li>
          <a href="{{ url('about') }}" class="py-1 px-3 md:py-2 md:px-4 text-black rounded hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 dark:text-white md:dark:hover:text-yellow-500 text-sm md:text-base">About</a>
        </li>
        <li>
          <a href="{{ url('hobby') }}" class="py-1 px-3 md:py-2 md:px-4 text-black rounded hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 dark:text-white md:dark:hover:text-yellow-500 text-sm md:text-base">Hobby</a>
        </li>
        <li>
          <a href="{{ url('posts/create') }}" class="py-1 px-3 md:py-2 md:px-4 text-black rounded hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 dark:text-white md:dark:hover:text-yellow-500 text-sm md:text-base">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

     </header>
    <!-- footer -->
    <footer class="bg-white mt-8 dark:bg-gray-900">
        @yield('footer')
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
              <div class="mb-6 md:mb-0">
                  <a href="{{url('https://www.instagram.com/cheannsh_?igsh=MW4zOHZvemo4cDJhbA==')}}" class="flex items-center">
                      <img src="{{ url('images/pfp2.jpeg') }}" class="rounded-full h-11 me-3" alt="" />
                      <span class="pl-2 self-center text-red-500 text-2xl font-semibold whitespace-nowrap dark:text-red-500">FNs-06</span>
                  </a>
              </div>
              <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-yellow-500 uppercase dark:text-black">Resources</h2>
                      <ul class="text-black dark:text-black font-medium">
                          <li class="mb-4">
                              <a href="{{url('https://flowbite.com/')}}" class="transition-colors duration-300 hover:text-red-400">Flowbite</a>
                          </li>
                          <li>
                              <a href="{{url('https://tailwindcss.com/')}}" class="transition-colors duration-300 hover:text-red-400">Tailwind CSS</a>
                          </li>
                          <li class="mt-4">
                              <a href="{{url('https://kitwind.io/products/kometa/components/blog')}}" class="transition-colors duration-300 hover:text-red-400">Kitwind</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-yellow-500 uppercase dark:text-black">Follow us</h2>
                      <ul class="text-black dark:text-black font-medium">
                          <li class="mb-4">
                              <a href="{{url('https://www.instagram.com/cheannsh_?igsh=MW4zOHZvemo4cDJhbA==')}}" class="transition-colors duration-300 hover:text-red-400 ">Instagram</a>
                          </li>
                          <li>
                              <a href="{{url('https://www.facebook.com/chean.cuy?locale=id_ID')}}" class="transition-colors duration-300 hover:text-red-400">Facebook</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-yellow-500 uppercase dark:text-black">Legal</h2>
                      <ul class="text-black dark:text-black font-medium">
                          <li class="mb-4">
                              <a href="#" class="transition-colors duration-300 hover:text-red-400">Privacy Policy</a>
                          </li>
                          <li>
                              <a href="#" class="transition-colors duration-300 hover:text-red-400">Terms &amp; Conditions</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>

          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <div class="sm:flex sm:items-center sm:justify-between">
              <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="transition-colors duration-300 hover:text-red-400">Portofolio</a>. All Rights Reserved.
              </span>
          </div>
        </div>
    </footer>
</body>
</html>
