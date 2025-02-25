<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Edit Pegawai</h2>

        <form action="/pegawai/{{ $pegawai->id }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block">Nama</label>
                <input type="text" name="nama" value="{{ $pegawai->nama }}" class="w-full p-2 border rounded" required>
            </div>

            <div>
                <label class="block">Alamat</label>
                <input type="text" name="alamat" value="{{ $pegawai->alamat }}" class="w-full p-2 border rounded" required>
            </div>

            <div>
                <label class="block">Nomor Telepon</label>
                <input type="text" name="nomor_telepon" value="{{ $pegawai->nomor_telepon }}" class="w-full p-2 border rounded" required>
            </div>

            <div>
                <label class="block">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ $pegawai->tanggal_lahir }}" class="w-full p-2 border rounded" required>
            </div>

            <div>
                <label class="block">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" value="{{ $pegawai->tempat_lahir }}" class="w-full p-2 border rounded" required>
            </div>

            <div>
                <label class="block">Jabatan</label>
                <input type="text" name="jabatan" value="{{ $pegawai->jabatan }}" class="w-full p-2 border rounded" required>
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            <a href="/" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
        </form>
    </div>
</body>
</html>
