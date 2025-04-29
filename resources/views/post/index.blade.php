@extends('template')

@section('header')
@section('footer')

<div>
    <div class="relative overflow-x-auto">
        <div class="mt-6 max-w-3xl mx-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 flex items-center justify-between">
            <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900">Post <mark class="px-2 text-white bg-blue-600 rounded-lg dark:bg-blue-500">control</mark></h1>
            <a href="{{route('posts.create')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Tambah Post</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-6 max-w-3xl mx-auto w-full text-sm text-left rtl:text-right text-green-500">
                {{ session('success') }}
            </div>
        @endif

        <table class="mt-6 max-w-3xl mx-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg shadow-lg">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Body
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $post->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post->body }}
                        </td>
                        <td class="px-6 py-4 flex justify-center">
                            <a href="{{route('posts.edit', $post->id)}}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>

                            <button onclick="confirmDelete({{ $post->id }})" class="focus:outline-none ml-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div id="deleteModal" class="fixed inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-6 shadow-lg max-w-sm mx-auto">
        <h3 class="text-lg font-semibold text-gray-800">Apakah Anda yakin ingin menghapus post ini?</h3>
        <div class="mt-4 flex justify-between">
            <button id="cancelDelete" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md">
            <a href="{{route('posts.index')}}">Batal</a>
            </button>
            <form id="deleteForm" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button onclick="confirmDelete({{ $post->id }})" type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Hapus</button>
            </form>
        </div>
    </div>
</div>

@endsection

<script>
    // Fungsi untuk membuka modal konfirmasi
    function confirmDelete(postId) {
        // Menampilkan modal
        document.getElementById('deleteModal').classList.remove('hidden');
        // Menyusun URL form delete berdasarkan postId
        let deleteForm = document.getElementById('deleteForm');
        deleteForm.action = '/posts/' + postId;
    };
</script>
