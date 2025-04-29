@extends('template')
@section('header')
@section('footer')

<div>
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
          </defs>
          <rect fill="url(#27df4f81-c854-45de-942a-fe90f7a300f9)" width="52" height="24"></rect>
        </svg>
        <span class="relative">Welcome </span>
      </span>
      to My World of <span class="text-">Hobbies</span>
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
    Halo! Saya Fathan N.s , seseorang yang penuh semangat dengan berbagai hobi yang membuat hidup saya lebih berwarna
    </p>
  </div>
  <div class="grid max-w-screen-lg gap-8 row-gap-10 mx-auto lg:grid-cols-2">
    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
      <div class="mr-4">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 12v-1.707c0-4.442-3.479-8.161-7.755-8.29-2.204-.051-4.251.736-5.816 2.256A7.933 7.933 0 0 0 4 10v2c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h2V10a5.95 5.95 0 0 1 1.821-4.306 5.977 5.977 0 0 1 4.363-1.691C15.392 4.099 18 6.921 18 10.293V20h2c1.103 0 2-.897 2-2v-4c0-1.103-.897-2-2-2z"></path><path d="M7 12h2v8H7zm8 0h2v8h-2z"></path></svg>
        </div>
      </div>
      <div>
        <h6 class="mb-3 text-xl font-bold leading-5 text-yellow-500">Mendengarkan Music</h6>
        <p class="mb-3 text-sm text-gray-900">
        Memiliki hobi mendengarkan musik karena musik membantu saya rileks dan menghilangkan stres. Melalui musik, saya bisa mengekspresikan emosi dan mendapatkan inspirasi.
        </p>
      </div>
    </div>
    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
      <div class="mr-4">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M22 8.65A5 5 0 0 0 17 4H7a5 5 0 0 0-5 4.74A2 2 0 0 0 2 9v7.5A3.48 3.48 0 0 0 5.5 20c1.43 0 2.32-1.06 3.19-2.09.32-.37.65-.76 1-1.1a4.81 4.81 0 0 1 1.54-.75 6.61 6.61 0 0 1 1.54 0 4.81 4.81 0 0 1 1.54.75c.35.34.68.73 1 1.1.87 1 1.76 2.09 3.19 2.09a3.48 3.48 0 0 0 3.5-3.5V9a2.09 2.09 0 0 0 0-.26zm-2 7.85a1.5 1.5 0 0 1-1.5 1.5c-.5 0-1-.64-1.66-1.38-.34-.39-.72-.85-1.15-1.26a6.68 6.68 0 0 0-2.46-1.25 6.93 6.93 0 0 0-2.46 0 6.68 6.68 0 0 0-2.46 1.25c-.43.41-.81.87-1.15 1.26C6.54 17.36 6 18 5.5 18A1.5 1.5 0 0 1 4 16.5V9a.77.77 0 0 0 0-.15A3 3 0 0 1 7 6h10a3 3 0 0 1 3 2.72v.12A.86.86 0 0 0 20 9z"></path><circle cx="16" cy="12" r="1"></circle><circle cx="18" cy="10" r="1"></circle><circle cx="16" cy="8" r="1"></circle><circle cx="14" cy="10" r="1"></circle><circle cx="8" cy="10" r="2"></circle></svg>
        </div>
      </div>
      <div>
        <h6 class="mb-3 text-xl font-bold leading-5 text-yellow-500">Bermain Game</h6>
        <p class="mb-3 text-sm text-gray-900">
        game membantu saya menghilangkan stres dan memberikan hiburan di waktu luang. Melalui game, saya bisa mengasah keterampilan berpikir, strategi, dan kerja sama tim.
        </p>
      </div>
    </div>
    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
      <div class="mr-4">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM9 11V5h6v6H9zm6 2v6H9v-6h6zM5 5h2v2H5V5zm0 4h2v2H5V9zm0 4h2v2H5v-2zm0 4h2v2H5v-2zm14.002 2H17v-2h2.002v2zm-.001-4H17v-2h2.001v2zm0-4H17V9h2.001v2zM17 7V5h2v2h-2z"></path></svg>
        </div>
      </div>
      <div>
        <h6 class="mb-3 text-xl font-bold leading-5 text-yellow-500">Menonton Film</h6>
        <p class="mb-3 text-sm text-gray-900">
        Melalui berbagai genre, seperti drama, aksi, atau fiksi ilmiah, saya bisa merasakan berbagai emosi, memahami perspektif yang berbeda, dan terinspirasi oleh cerita yang disajikan.
        </p>
      </div>
    </div>
    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
      <div class="mr-4">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21 10H3a1 1 0 0 0-1 1 10 10 0 0 0 5 8.66V21a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.34A10 10 0 0 0 22 11a1 1 0 0 0-1-1zm-5.45 8.16a1 1 0 0 0-.55.9V20H9v-.94a1 1 0 0 0-.55-.9A8 8 0 0 1 4.06 12h15.88a8 8 0 0 1-4.39 6.16zM9 9V7.93a4.53 4.53 0 0 0-1.28-3.15A2.49 2.49 0 0 1 7 3V2H5v1a4.53 4.53 0 0 0 1.28 3.17A2.49 2.49 0 0 1 7 7.93V9zm4 0V7.93a4.53 4.53 0 0 0-1.28-3.15A2.49 2.49 0 0 1 11 3V2H9v1a4.53 4.53 0 0 0 1.28 3.15A2.49 2.49 0 0 1 11 7.93V9zm4 0V7.93a4.53 4.53 0 0 0-1.28-3.15A2.49 2.49 0 0 1 15 3V2h-2v1a4.53 4.53 0 0 0 1.28 3.15A2.49 2.49 0 0 1 15 7.93V9z"></path></svg>
        </div>
      </div>
      <div>
        <h6 class="mb-3 text-xl font-bold leading-5 text-yellow-500">Eksperimen Di Dapur</h6>
        <p class="mb-3 text-sm text-gray-900">
        Eksperimen di dapur memberikan kesempatan untuk mencoba resep baru dan menyesuaikannya sesuai selera pribadi. Setiap langkah memasak menjadi cara untuk berkreasi dan menambah keunikan pada hidangan yang kita buat.
        </p>
      </div>
    </div>
  </div>
</div>

@endsection
