<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kategori</title>
</head>
<body>
	<h1>Daftar barang</h1>
	<a href="{{ route('barang.create') }}">Tambah Barang</a>

	<table border='1' cellpadding='4' cellspacing='0'>
		<tr>
			<td>No</td>
			<td>Nama barang</td>
			<td>jenis barang</td>
			<td>harga satuan</td>
			<td>stock barang</td>
			<td>Action</td>
		</tr>
		{{ $no =1 }}
		@foreach($barang as $br)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $br->nm_barang }}</td>
			<td>{{ $br->jenis }}</td>
			<td>{{ $br->harga }}</td>
			<td>{{ $br->stock }}</td>
			<td>
				<a href="{{ route('kategori.edit', ['id' => $kt->id]) }}">Edit</a>
				<form action="{{ route('kategori.delete')}}" method="POST">
					@csrf
					<input type="hidden" name="id" value="{{ $kt->id }}">
					<button>Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>