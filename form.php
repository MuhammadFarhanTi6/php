<!DOCTYPE html>
<html>
<head>

	<title>Data Mahasiswa</title>
	<style>
		
		form {
			background: #cce6ff;
			width: 50%;
			margin-top: 20px;
		}

	</style>
</head>
<body>
	<form method="get" action="array_siswa.php">
	<fieldset>
		<legend>Form Biodata</legend>
				Nama Siswa : <input type="text" name="nama_siswa" value="" size="30"><br/><br/>
		Mata kuliah :
		<select name="jurusan">
			<option value="TI">Teknik Informasi</option>
			<option value="SI">Sistem Informasi</option>
		</select> <br/><br/>
		IPK :
		<input type="text" name="ipk" value="" size="6"><br/><br/>
		<input type="submit" name="proses" value="simpan">
	</fieldset>
	</form>
</body>
</html>
