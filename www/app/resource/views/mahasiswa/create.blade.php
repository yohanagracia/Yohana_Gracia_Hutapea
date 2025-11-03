<h2>Tambah Mahasiswa</h2>

<form action="{{route('mahasiswa.store')}}" method = "POST"
@csrf Nama:<input type="text" name="nama" required></form>