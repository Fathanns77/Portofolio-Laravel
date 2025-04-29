@extends('template')
@section('header')
@section('footer')

<!-- about -->
 <div class="container px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="card-wrapper ">
        <div class="card__left transform transition-transform duration-300 hover:scale-105">
            <img src="{{ url('images/RuanMei.jpeg') }}" alt="image" class="card__img border-b-4 border-yellow-500">
            <div class="card__data">
                <span class="card__description">Siswa SMK Negeri 1 Purwosari</span>
                <h2 class="card__title">Fathan .N.S</h2>
                <a href="{{url('https://www.instagram.com/cheannsh_?igsh=MW4zOHZvemo4cDJhbA==')}}" class="card__button">@cheannsh_</a>
            </div>
        </div>
        <div class="card__right transform transition-transform duration-300 hover:scale-105 border-l-4 border-yellow-500">
            <h1 class="font-bold">About Me</h1>
            <li>Perkenalan</li>
            <p>Halo, perkenalkan nama saya <span class="text-yellow-500">Fathan Nashwan Septavianto</span>. Saya adalah siswa kelas XI di SMKN 1 Purwosari, jurusan Rekayasa Perangkat Lunak (RPL). Alasan saya memilih bersekolah di SMKN 1 Purwosari karna SMKN 1 Purwosari adalah salah satu SMK terfavorit di Pasuruan. </p>

            <li>Riwayat Pendidikan</li>
            <p class="font-medium text-black">- SMP Negeri 1 Purwodadi</p>
            <p>Tahun Masuk - Tahun Keluar (2020 - 2023)</p>
            <p>Di Sekolah Menengah Pertama, saya meminati beberapa mata perlajaran diantaranya seperti IPS, PPKN dan Bahasa Indonesia.</p>
            <p class="font-medium text-black">- SDN Purwodadi 2</p>
            <p>Tahun Masuk - Tahun Keluar (2014 - 2020)</p>
            <p class="font-medium text-black">- TK Darul Ulum Purwodadi</p>
            <p>Tahun Masuk - Tahun Keluar (2012 - 2014)</p>
        </div>
    </div>
</div> 

<!-- card -->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">
    3 FunFact tentang diri saya
  </h2>

  <div class="p-5 grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
    <div class="p-5 overflow-hidden transition-shadow duration-300 bg-white rounded transform transition-transform duration-300 hover:-translate-y-2 shadow-lg border-b-4 border-yellow-500">
      <a href="/" aria-label="Article"><img src="{{ url('images/indomie.jpeg') }}" class="object-cover w-full h-64 rounded border-b-4 border-yellow-500" alt="Writing" /></a>
      <div class="py-5">
        <a href="/" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
          <p class="text-2xl font-bold transition-colors duration-300 hover:text-red-600">Saya Bisa Makan 2 Bungkus Mie masih ditambah nasi</p>
        </a>
        <p class="mb-4 text-gray-700">
          Saya Pernah Makan 2 Bungkus Indomie Jumbo dan masih ditambah nasi
        </p>
      </div>
    </div>
    
    <div class="p-5 overflow-hidden transition-shadow duration-300 bg-white rounded transform transition-transform duration-300 hover:-translate-y-2 shadow-lg border-b-4 border-yellow-500">
      <a href="/" aria-label="Article"><img src="{{ url('images/cat.jpeg') }}" class="object-cover w-full h-64 rounded border-b-4 border-yellow-500" alt="Music" /></a>
      <div class="py-5">
        <a href="/" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
          <p class="text-2xl font-bold transition-colors duration-300 hover:text-red-600">Saya Gabisa Tidur Kalau Tidak Mendengarkan Lagu</p>
        </a>
        <p class="mb-4 text-gray-700">
          Saya pernah tidur tanpa mendengarkan lagu, namun pasti terbangun di jam 2
        </p>
      </div>
    </div>

    <div class="p-5 overflow-hidden transition-shadow duration-300 bg-white rounded transform transition-transform duration-300 hover:-translate-y-2 shadow-lg border-b-4 border-yellow-500">
      <a href="/" aria-label="Article"><img src="{{ url('images/Nulis.jpeg') }}" class="object-cover w-full h-64 rounded border-b-4 border-yellow-500" alt="Writing" /></a>
      <div class="py-5">
        <a href="/" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
          <p class="text-2xl font-bold transition-colors duration-300 hover:text-red-600">Tulisan Saya Hanya Bagus DiPapan Tulis</p>
        </a>
        <p class="mb-4 text-gray-700">
          Saya gatau kenapa tulisan saya kok bisa bagus di papan tulisa saja
        </p>
      </div>
    </div>
  </div>
</div>

@endsection
</body>
</html>
