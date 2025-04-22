<!DOCTYPE html>
<html>
<head>
    <title>Daftar Praktikan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-10 bg-gray-50">
    <h1 class="text-2xl font-bold mb-4">Daftar Praktikan</h1>
    <table class="table-auto border-collapse w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">NIM</th>
                <th class="px-4 py-2 border">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse($praktikans as $p)
                <tr class="bg-white">
                    <td class="px-4 py-2 border">{{ $p->nama }}</td>
                    <td class="px-4 py-2 border">{{ $p->nim }}</td>
                    <td class="px-4 py-2 border">{{ $p->kelas }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center py-4">Belum ada data praktikan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
