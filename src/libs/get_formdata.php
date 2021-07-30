<?php

include "../config/db-connection.php";

$formdata = [];
$list_kelas = [];
$list_matpel = [];

$query = "SELECT * FROM list_kelas";
$dewan1 = $db1->prepare($query);
$dewan1->execute();
$res1 = $dewan1->get_result();
while ($row = $res1->fetch_assoc()) {
    $list_kelas[] = $row;
}

$query = "SELECT * FROM list_matapelajaran";
$dewan1 = $db1->prepare($query);
$dewan1->execute();
$res1 = $dewan1->get_result();
while ($row = $res1->fetch_assoc()) {
    $list_matpel[] = $row;
}

$formdata = [$list_kelas, $list_matpel];
echo json_encode($formdata);
