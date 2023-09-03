<?php
// include '../config/database.php';
// include_once '../model/user.php';
include '../model/user.php';

// $db = new database();
$user = new user();
?>
<h1>CRUD OOP PHP</h1>
<h2>Data User</h2>

<a href="index.php?page=tambah">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Opsi</th>
	</tr>
	<?php
    $no = 1;
foreach($user->tampil_data() as $data) {
    ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['usia']; ?></td>
		<td>
			<a
				href="index.php?page=edit&id=<?php echo $data['id']; ?>&aksi=edit">
				Edit
			</a>
			<a
				href="../controller/user_controller.php?id=<?php echo $data['id']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
}
?>
</table>