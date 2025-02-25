<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Selamat Datang di Dashboard</h2>
        <p>Halo, {{ auth()->user()->name }} ! Anda berhasil login.</p>
        <a href="{{ route('pegawai.index') }}" class="mt-4 block bg-blue-500 text-white px-4 py-2 rounded text-center">Lihat Pegawai</a>
        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button class="w-full bg-red-500 text-white px-4 py-2 rounded">Logout</button>
        </form>
    </div>
</body>
</html>
