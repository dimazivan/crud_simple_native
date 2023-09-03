<?php
// include '../config/database.php';
include '../model/user.php';
// include '../model/user.php';

// $db = new database();
$user = new user();
?>

<h1>CRUD OOP PHP</h1>
<h2>Edit Data User</h2>

<form action="../controller/user_controller.php?aksi=update" method="post">
	<?php
foreach($user->edit($_GET['id']) as $d) {
    ?>
	<table>
		<tr>
			<td>Nama</td>
			<td>
				<input type="hidden" name="id"
					value="<?php echo $d['id'] ?>">
				<input type="text" name="nama"
					value="<?php echo $d['nama'] ?>">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"
					value="<?php echo $d['alamat'] ?>">
			</td>
		</tr>
		<tr>
			<td>Usia</td>
			<td><input type="text" name="usia"
					value="<?php echo $d['usia'] ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
	<?php } ?>
</form>