<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			background: #d9d9d9;
			width: 50%;
		}
	</style>
</head>
<body>
<?php
$nama_siswa="";
$jurusan="";
$ipk="";
if (isset($_GET['proses'])){
$nama_siswa = $_GET['nama_siswa'];
$jurusan = $_GET['jurusan'];
$ipk = $_GET['ipk'];
// echo '<br/>Nama : '.$nama_siswa . '<br/>Mata Kuliah : '.$jurusan .'<br/>Nilai UTS : '.$ipk;
}
?>
<table border="1">
	<tr><td>Nama</td><td>Jurusan</td><td>IPK</td></tr>
	<tr>
		<td><?= $nama_siswa ?></td>
		<td><?= $jurusan ?></td>
		<td><?= $ipk ?></td>
	</tr>
</table>
</body>
</html>
