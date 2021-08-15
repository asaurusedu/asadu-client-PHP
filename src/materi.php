<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASAURUS EDU</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        include "config/db-connection.php";

        $materi = $_POST['materi'];

        $data = mysqli_query($db1,"select * from list_linkmateri where id_materi='$materi'");
        
        $cek = mysqli_num_rows($data);
        if($cek > 0){
            while($row = $data->fetch_assoc()) {
                echo "link: " . $row["link_media"]. "<br>";
            }
        }else{
            echo "Tidak Ada Data";
        }
    ?>

    <div class="main">
        <h2 class="form-title" href="">PPT</h2>
    </div>

</body>
</html>