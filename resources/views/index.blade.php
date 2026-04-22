<!DOCTYPE html>
<html>
<head>
    <title>Daftar Rak Buku</title>
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 p-10">

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-6">

        <h1 class="text-2xl font-bold mb-6 text-indigo-600">
            Daftar Rak Buku
        </h1>

        @if ($bookshelves->isEmpty())
            <p class="text-gray-500">Tidak ada rak buku.</p>
        @else
            <ul class="space-y-3">
                @foreach ($bookshelves as $bookshelf)
                    <li class="p-4 bg-gray-50 rounded-lg hover:bg-indigo-50 transition">

                        <a href="{{ route('show', $bookshelf->id) }}"
                           class="flex justify-between items-center">

                            <span class="font-semibold text-gray-700">
                                {{ $bookshelf->name }}
                            </span>

                            <span class="text-sm bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full">
                                {{ $bookshelf->books_count }} buku
                            </span>

                        </a>

                    </li>
                @endforeach
            </ul>
        @endif

    </div>

</body>
</html>