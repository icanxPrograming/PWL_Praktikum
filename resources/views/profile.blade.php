<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - {{ $user->fullName }}</title>
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white w-full max-w-md rounded-3xl shadow-2xl overflow-hidden">

        <div class="bg-indigo-600 h-28 relative">
            <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2">
                <div
                    class="w-20 h-20 bg-white text-indigo-600 rounded-full flex items-center justify-center text-2xl font-bold shadow-lg border-4 border-indigo-600">
                    {{ strtoupper(substr($user->first_name, 0, 1)) }}
                </div>
            </div>
        </div>

        <div class="pt-14 pb-8 px-6 text-center">

            <h2 class="text-xl font-bold text-gray-800">
                {{ $user->fullName }}
            </h2>

            <p class="text-sm text-gray-500 mt-1">{{ $user->email }}</p>

            <div class="mt-3">
                <span class="bg-indigo-100 text-indigo-700 text-xs px-3 py-1 rounded-full font-semibold">
                    NPM: {{ $user->npm }}
                </span>
            </div>

            <div class="grid grid-cols-2 gap-3 mt-6 text-sm">

                <div class="bg-gray-50 rounded-xl p-3">
                    <p class="text-gray-400 text-xs">Username</p>
                    <p class="font-semibold text-gray-700">{{ $user->username }}</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-3">
                    <p class="text-gray-400 text-xs">Email</p>
                    <p class="font-semibold text-gray-700 truncate">{{ $user->email }}</p>
                </div>

            </div>

            <div class="flex justify-between mt-6 bg-indigo-50 rounded-xl p-4">

                <div>
                    <p class="text-xs text-gray-500">Peminjaman</p>
                    <p class="text-lg font-bold text-indigo-600">0</p>
                </div>

                <div>
                    <p class="text-xs text-gray-500">Aktif</p>
                    <p class="text-lg font-bold text-green-500">0</p>
                </div>

                <div>
                    <p class="text-xs text-gray-500">Denda</p>
                    <p class="text-lg font-bold text-red-500">0</p>
                </div>

            </div>

            <div class="mt-6 flex flex-col gap-3">

                <x-button class="bg-indigo-600 hover:bg-indigo-700 text-white py-2.5 rounded-xl shadow-md transition">
                    Edit Profil
                </x-button>

                <form method="POST" action="/logout">
                    @csrf
                    <x-button type="submit"
                        class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 py-2.5 rounded-xl transition">
                        Keluar
                    </x-button>
                </form>

            </div>

        </div>
    </div>

</body>

</html>