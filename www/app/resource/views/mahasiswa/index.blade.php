<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Data Mahasiswa</h2>
    <a href : "{{route('mahasiswa.create')}}" + Tambah mahasiswa </a>
        <br><br>
        @if (session('succes'))
        <p>{{session('succes') }}</p>
        @endif

       <table border ="1" cellpading ="5">
        <tr>
            <th>Nama Maahasiswa</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>

        @foreach ($data as $m)
        <tr>
            <td></td>
        </tr>
</body>
</html>