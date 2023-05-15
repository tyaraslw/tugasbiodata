<!DOCTYPE html>
<html>
<head>
	<title>DATA SISWA</title>
</head>
<body>
 
	<h2>Data Siswa</h2>
	<br/>
	<a href="tambah.php">+ Tambah siswa</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Nis</th>
			<th>Nama</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['nama']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>