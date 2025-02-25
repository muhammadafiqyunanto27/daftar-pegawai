<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Daftar Pegawai</h2>

        @if(session('success'))
            <div class="bg-green-500 text-white p-2 mb-4 rounded">{{ session('success') }}</div>
        @endif

        <a href="/pegawai/create" class="bg-blue-500 text-white px-4 py-2 rounded mb-3 inline-block">Tambah Pegawai</a>

        <table class="w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Nama</th>
                    <th class="border p-2">Alamat</th>
                    <th class="border p-2">No Telepon</th>
                    <th class="border p-2">Tanggal Lahir</th>
                    <th class="border p-2">Tempat Lahir</th>
                    <th class="border p-2">Jabatan</th>
                    <th class="border p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawais as $pegawai)
                <tr class="text-center bg-gray-50">
                    <td class="border p-2">{{ $pegawai->nama }}</td>
                    <td class="border p-2">{{ $pegawai->alamat }}</td>
                    <td class="border p-2">{{ $pegawai->nomor_telepon }}</td>
                    <td class="border p-2">{{ $pegawai->tanggal_lahir }}</td>
                    <td class="border p-2">{{ $pegawai->tempat_lahir }}</td>
                    <td class="border p-2">{{ $pegawai->jabatan }}</td>
                    <td class="border p-2">
                        <a href="/pegawai/{{ $pegawai->id }}/edit" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                        <form action="/pegawai/{{ $pegawai->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-3 py-1 rounded" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
