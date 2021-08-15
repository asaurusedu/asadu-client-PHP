<?php 
 
    include "../config/db-connection.php";
 
    // GET DATA GURU
    $id_guru = generateRandomString();
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $namalengkap = $_POST['namalengkap'];
    $jabatan = $_POST['jabatan'];
    $matpel = $_POST['matpel'];
    $kelas = $_POST['kelas'];
    //GET DATA SEKOLAH
    $npsn = $_POST['npsn'];
    $namasekolah = $_POST['namasekolah'];
    $jenissekolah = $_POST['jenissekolah'];
    $statussekolah = $_POST['statussekolah'];
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $namakepalasekolah = $_POST['namakepalasekolah'];
    //GET TIMESTAMP
    $date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
    $waktu = $date->format('Y-m-d H:i:s');

    //CHECK DATA
    if($email == 0 || $pass == 0 || $namalengkap == 0 || $jabatan == 0 || $matpel == 0 || $kelas == 0
        || $npsn == 0 || $namasekolah == 0 ||$namakepalasekolah == 0 || $jenissekolah == 0 || $statussekolah == 0 || $kabupaten == 0 || $kecamatan == 0){
        header("location:../register.php");
    }else{
        // INSERT DATA TO akun_guru TABLE IN DB
        mysqli_query($db1,"INSERT INTO akun_guru VALUES('$id_guru','$email','$pass','$namalengkap','$jabatan','$matpel','$kelas','$waktu')");
        // INSERT DATA TO akun_sekolah TABLE IN DB
        mysqli_query($db1,"INSERT INTO akun_sekolah VALUES('$npsn','$namasekolah','$namakepalasekolah','$jenissekolah','$statussekolah','$kabupaten','$kecamatan','$waktu')");
        header("location:../index.php");
    }

    //GENERATE STRING FOR ID GURU
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
 
?>