@extends('template')
@section('header')
@section('footer')

    <!-- Jumbotron -->
    <section class="bg-center bg-no-repeat bg-white bg-blend-multiply">
    <div class="flex px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="lg:w-2/3">
            <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl">
                Hai, <br>Saya Fathan <br> Nashwan Septavianto <br> Dari XI <span class="text-yellow-400">RPL</span>
            </h1>
            <p class="mb-8 text-lg font-normal text-red-300 lg:text-xl sm:px-0 lg:px-0">
                <!-- Optional paragraph content -->
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <a href="{{ url('about') }} " class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 transition-colors duration-300 hover:bg-red-400 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoipx-2 mx-auto max-w-screen-xl pt-20 lg:pt-20 text-left flex flex-col-reverse lg:flex-row items-centern="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="lg:w-1/3 flex justify-center lg:justify-end mb-10 lg:mb-0 order-1 lg:order-2 transform transition-transform duration-300 hover:scale-105">
            <img src="{{ url('images/kucing.png') }}" alt="Avatar" class="w-48 h-48 lg:w-64 lg:h-64">
        </div>
    </div>
</section>

  <!-- card -->
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      
        <span class="relative">Perkenalan</span>
      </span> <br>
      Singkat tentang saya
    </h2>
  </div>
  <div class="grid gap-8 row-gap-5 mb-8 md:row-gap-8 lg:grid-cols-4 sm:grid-cols-2">
    <div class="duration-300 transform bg-white border-l-4 border-yellow-400 hover:-translate-y-2 shadow-lg">
      <div class="h-full p-5 border border-l-0 rounded-r shadow-sm">
        <h6 class="mb-2 text-yellow-400 font-semibold leading-5">Nama Lengkap</h6>
        <p class="text-sm text-gray-900">
            Perkenalkan Nama saya Fathan Nashwan Septavianto. Saya biasa di sekolah dipanggil dengan nama Fathan
        </p>
      </div>
    </div>
    <div class="duration-300 transform bg-white border-l-4 border-yellow-400 hover:-translate-y-2 shadow-lg">
      <div class="h-full p-5 border border-l-0 rounded-r shadow-sm">
        <h6 class="mb-2 text-yellow-400 font-semibold leading-5">Tempat & Tgl Lahir</h6>
        <p class="text-sm text-gray-900">
          Saya Lahir di Sidoarjo, pada tanggal ? 09 2007. Dan saya bukan hasil tahun baru ya temen temen, karna saya prematur :v
        </p>
      </div>
    </div>
    <div class="duration-300 transform bg-white border-l-4 border-yellow-400 hover:-translate-y-2 shadow-lg">
      <div class="h-full p-5 border border-l-0 rounded-r shadow-sm">
        <h6 class="mb-2 text-yellow-400 font-semibold leading-5">Alamat Rumah</h6>
        <p class="text-sm text-gray-900">
          Tempat tinggal saya bertepat di Dusun Jatisari, Desa Purwodadi, Kec Purwodadi, Kab Pasuruan
        </p>
      </div>
    </div>
    <div class="duration-300 transform bg-white border-l-4 border-yellow-400 hover:-translate-y-2 shadow-lg">
      <div class="h-full p-5 border border-l-0 rounded-r shadow-sm">
        <h6 class="mb-2 text-yellow-400 font-semibold leading-5">They urge you</h6>
        <p class="text-sm text-gray-900">
          A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear.
        </p>
      </div>
    </div>
  </div>
</div>

@endsection
