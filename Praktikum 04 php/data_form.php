<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<form method="POST" action="data_form.php">
    <h3>Form Nilai Siswa</h3>
    <table style="width: 80%; margin: auto; border: 1px solid none;">
    <hr/>
	<tr>
		<td>Nim</td>
		<td>: <input  type="text" name="nim" value="" size="30"></td>
	</tr>
	<tr>
		<td>Mata kuliah</td>
    	<td>:
		<select name="matkul">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="BDI">Basis Data </option>
        <option value="WEB1">Pemograman Web</option>
		</select></label>	
		</td>	
	</tr>

	<tr>
		<td>Nilai</td>
		<td>: <input type="text" name="nilai" value="" size="30"/></td>
	</tr><br/>
	<tr>
        <td><input type="submit" value="Success" class="btn btn-success"></td>
	</tr>
</table>
<hr/>
</form>

<?php
require_once 'class_mahasiswa.php';
if($_POST){
	$ns = new Nilaimahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
	$keterangan = $ns->hitungnilai();
	$hasil = $ns->grade($keterangan);
	$hasil2 = $ns->predikat($keterangan);
	echo "NIM : ". $ns->nim;
	echo "<br>";
	echo "Matkul : ". $ns->matkul;
	echo "<br>";
	echo "Nilai : ". $ns->nilai;
	echo "<br>";
	echo "Hasil Ujian : ". $hasil;
	echo "<br>";
	echo " Grade : ". $hasil2;
}

echo "<br><hr/>";
echo "<b>Lab Pemrograman Web Lanjutan</b><br/>";
echo "Dosen Sirojul Munir S.SI.M.Kom<br/>";
echo "STT-NF - Kampus B";

?>
</body>
</html>