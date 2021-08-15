<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASAURUS EDU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action = "libs/daftar.php" method="POST" class="register-form" id="register-form">
                        <div class="form-text">
                            <a href="#" class="add-info-link"><i class="zmdi zmdi-chevron-right"></i>Informasi Dasar</a>
                            <div class="add_info">
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Your Email"/>
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pass" id="pass" placeholder="Password"/>
                                </div>
                            </div>

                            <a href="#" class="add-info-link2"><i class="zmdi zmdi-chevron-right"></i>Informasi Pribadi</a>
                            <div class="add_info2">
                                <div class="form-group">
                                    <label for="namalengkap"><i class="zmdi zmdi-email"></i></label>
                                    <input type="text" name="namalengkap" id="namalengkap" placeholder="Nama Lengkap"/>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="jabatan" id="jabatan">
                                    <option value="">Jabatan</option>
                                    <?php
                                        include 'config/db-connection.php';
                                        $query = "SELECT * FROM list_jabatan ORDER BY nama_jabatan ASC";
                                        $data = $db1->prepare($query);
                                        $data->execute();
                                        $res1 = $data->get_result();
                                        while ($row = $res1->fetch_assoc()) {
                                            echo "<option value='" . $row['nama_jabatan'] . "'>" . $row['nama_jabatan'] . "</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="kelas" id="kelas">
                                        <option value="">Tingkatan Ajar</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="matpel" id="matpel">
                                        <option value="">Mata Pelajaran Utama</option>
                                    </select>
                                </div>
                            </div>

                            <a href="#" class="add-info-link3"><i class="zmdi zmdi-chevron-right"></i>Informasi Institusi</a>
                            <div class="add_info3">
                                <div class="form-group">
                                    <label for="npsn"><i class="zmdi zmdi-email"></i></label>
                                    <input type="number" name="npsn" id="npsn" placeholder="Nomor Pokok Sekolah Nasional"/>
                                </div>
                                <div class="form-group">
                                    <label for="namasekolah"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="text" name="namasekolah" id="namasekolah" placeholder="Nama Sekolah"/>
                                </div>
                                <div class="form-group">
                                    <label for="namakepalasekolah"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="text" name="namakepalasekolah" id="namakepalasekolah" placeholder="Nama Kepala Sekolah"/>
                                </div>
                                <div class="form-group">
                                    <label for="jenissekolah"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="text" name="jenissekolah" id="jenissekolah" placeholder="Jenis Sekolah"/>
                                </div>
                                <div class="form-group">
                                    <label for="statussekolah"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="text" name="statussekolah" id="statussekolah" placeholder="Status Sekolah"/>
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="text" name="kabupaten" id="kabupaten" placeholder="Kabupaten"/>
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="text" name="kecamatan" id="kecamatan" placeholder="Kecamatan"/>
                                </div>
                            </div>

                        </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
    <script src="libs/utils.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      getFormData()
      const pilihKelasMatpel = document.querySelectorAll('#kelas, #matpel')
      pilihKelasMatpel.forEach(element => element.addEventListener('change', function() {
        getMateri()
      }))
    });
  </script>
</body>
</html>