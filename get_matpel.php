<?php
	include 'koneksi.php';
 
	echo "<option value=''>Pilih Mata Pelajaran</option>";
 
	$query = "SELECT * FROM list_matapelajaran";
	$dewan1 = $db1->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_matpel'] . "'>" . $row['nama_matpel'] . "</option>";
	}
