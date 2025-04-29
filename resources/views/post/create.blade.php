@extends('template')
@section('header')
@section('footer')

<section class="pt-16 pb-16 bg-white dark:bg-white-900 lg:flex">
    <div class="flex flex-col justify-center w-full p-8 lg:bg-white-100 lg:dark:bg-white-800 lg:px-12 xl:px-32 lg:w-1/2">
        <h1 class="text-2xl font-semibold text-gray-800 capitalize dark:text-white lg:text-3xl">hire us.</h1>

        <p class="mt-4 text-gray-500 dark:text-gray-400">
            Ask us everything and we would love
            to hear from you
        </p>
    </div>

    <div class="flex flex-col justify-center w-full p-8 pt-0 lg:w-1/2 lg:px-12 xl:px-24 ">
            @if (session('success'))
            <div class="alert alert-success text-green-500 pb-5">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ url('posts') }}">
            @csrf
            <!-- Full Name -->
            <div class="-mx-2 md:items-center md:flex">
                <div class="flex-1 px-2">
                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Name</label>
                    <input type="text" name="title" value="{{ old('title') }}" placeholder="Fathan NS" 
                        class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
            </div>

            <!-- Message -->
            <div class="w-full mt-4">
                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Message</label>
                <textarea name="body" placeholder="Isi Pesan Disini"
                    class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-56 dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 ">{{ old('body') }}</textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full px-6 py-3 mt-4 mb-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-500 rounded-md hover:bg-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-50">
                Kirim Pesan Anda
            </button>

            <a href="{{route('login')}}" class=" text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">GO TO POST CONTROL -></a>
        </form>
    </div>

    
</section>

@endsection

