<h1>CRUD OOP PHP</h1>
<h2>Tambah Data User</h2>

<form action="../controller/user_controller.php?aksi=tambah" method="post">

	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Usia</td>
			<td><input type="number" name="usia"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>