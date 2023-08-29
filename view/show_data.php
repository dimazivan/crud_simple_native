<?php
include '../config/database.php';
$db = new database();
?>
<h1>CRUD OOP PHP</h1>
<h2>Data User</h2>

<a href="create_data.php">Input Data</a>
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
foreach($db->tampil_data() as $data) {
    ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['usia']; ?></td>
		<td>
			<a
				href="edit_data.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a>
			<a
				href="../controller/user_controller.php?id=<?php echo $data['id']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
}
?>
</table>