<?php
	include 'koneksi.php';
	$matpel = $_POST['matpel'];
	$kelas = $_POST['kelas'];
 
	echo "<option value=''>Pilih Materi</option>";
 
	$query = "SELECT * FROM list_materi WHERE id_matpel='$matpel' AND id_kelas='$kelas'";
	$dewan1 = $db1->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_materi'] . "'>" . $row['nama_materi']."</option>";
	}
?>