<?php
	include 'koneksi.php';
 
	echo "<option value=''>Pilih Mata Pelajaran</option>";
 
	$query = "SELECT * FROM matpel";
	$dewan1 = $db1->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_matpel'] . "'>" . $row['nama_matpel'] . "</option>";
	}
?>