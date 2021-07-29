<!DOCTYPE html>
<html>

<head>
	<title>ASAURUSEDU</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha512-U6K1YLIFUWcvuw5ucmMtT9HH4t0uz3M366qrF5y4vnyH6dgDzndlcGvH/Lz5k8NFh80SN95aJ5rqGZEdaQZ7ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<style>
		input {
			text-align: center;
		}

		::-webkit-input-placeholder {
			text-align: center;
		}

		:-moz-placeholder {
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="container mb-5" style="margin: 10px 10px 10px 10px;">
		<div class="row">
			<div class="form-group" style="margin: 10px 10px 10px 10px;">
				<label>Kelas</label>
				<select class="form-control" name="kelas" id="kelas">
					<option value="">Pilih Kelas</option>
				</select>
			</div>

			<div class="form-group" style="margin: 10px 10px 10px 10px;">
				<label>Mata Pelajaran</label>
				<select class="form-control" name="matpel" id="matpel">
					<option value="">Pilih Mata Pelajaran</option>
				</select>
			</div>

			<div class="form-group" style="margin: 10px 10px 10px 10px;">
				<label>Materi</label>
				<select class="form-control" name="materi" id="materi">
					<option value="">Pilih Materi</option>
				</select>
			</div>

			<input class="form-control" id="tujuan" style="margin: 10px 10px 10px 10px;" placeholder="Isi Tujuan Umum Anda">

			<input class="form-control" id="tujuan" style="margin: 10px 10px 10px 10px;" placeholder="Isi Tujuan Khusus Anda">
		</div>
		<hr>

		<Button text="Lanjut"></Button>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$.ajax({
				type: 'POST',
				url: "get_kelas.php",
				cache: false,
				success: function(msg) {
					$("#kelas").html(msg);
				}
			});

			$.ajax({
				type: 'POST',
				url: "get_matpel.php",
				cache: false,
				success: function(msg) {
					$("#matpel").html(msg);
				}
			});

			$("#matpel").change(function() {
				var matpel = $("#matpel").val();
				var kelas = $("#kelas").val();
				$.ajax({
					type: 'POST',
					url: "get_materi.php",
					data: {
						matpel: matpel,
						kelas: kelas
					},
					cache: false,
					success: function(msg) {
						$("#materi").html(msg);
					}
				});
			});

			$("#kelas").change(function() {
				var matpel = $("#matpel").val();
				var kelas = $("#kelas").val();
				$.ajax({
					type: 'POST',
					url: "get_materi.php",
					data: {
						matpel: matpel,
						kelas: kelas
					},
					cache: false,
					success: function(msg) {
						$("#materi").html(msg);
					}
				});
			});
		});
	</script>
</body>

</html>