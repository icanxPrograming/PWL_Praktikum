<!DOCTYPE html>
<html>
<head>
    <title>Detail Rak Buku</title>
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 p-10">

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-6">

        <h2 class="text-2xl font-bold text-indigo-600 mb-6">
            {{ $bookshelf->name }}
        </h2>

        @forelse ($bookshelf->books as $book)
            <div class="border p-4 rounded-lg mb-3 hover:shadow transition bg-gray-50">

                <p class="text-sm text-gray-500">ID: {{ $book->id }}</p>

                <h3 class="text-lg font-semibold text-gray-800">
                    {{ $book->title }}
                </h3>

                <p class="text-gray-600">
                    Pengarang: {{ $book->author }}
                </p>

            </div>
        @empty
            <div class="text-gray-500">
                Buku Kosong!
            </div>
        @endforelse

        <a href="{{ route('index') }}"
           class="inline-block mt-6 text-indigo-600 hover:underline">
            ← Kembali
        </a>

    </div>

</body>
</html>