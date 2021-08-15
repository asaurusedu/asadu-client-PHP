<!DOCTYPE html>
<html>

<head>
  <title>ASAURUSEDU</title>
  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
</head>

<body>
  <?php 
		session_start();
		if($_SESSION['status']!="login"){
			header("location:index.php");
		}
	?>

  <div class="main">
    <h4>Selamat datang, <?php echo $_SESSION['email']; ?>! anda telah login.</h4>
		
 		<a href="libs/logout.php">LOGOUT</a>
    
     <div class="container mb-5" style="margin: 10px 10px 10px 10px">
        <div class="row">
        <form action = "materi.php" method="POST" class="register-form" id="login-form">
        <div class="form-group" style="margin: 10px 10px 10px 10px">
          <label>Kelas</label>
          <select class="form-control" name="kelas" id="kelas">
            <option value="">Pilih Kelas</option>
          </select>
        </div>

        <div class="form-group" style="margin: 10px 10px 10px 10px">
          <label>Mata Pelajaran</label>
          <select class="form-control" name="matpel" id="matpel">
            <option value="">Pilih Mata Pelajaran</option>
          </select>
        </div>

        <div class="form-group" style="margin: 10px 10px 10px 10px">
          <label>Materi</label>
          <select class="form-control" name="materi" id="materi">
            <option value="">Pilih Materi</option>
          </select>
        </div>
    </div>

    <div class="form-group form-button">
      <input type="submit" name="generate" id="generate" class="form-submit" value="Selanjutnya"/>
    </div>
        </form>
    </div>
  </div>

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