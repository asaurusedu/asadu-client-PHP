<!DOCTYPE html>
<html>
  <head>
    <title>ASAURUSEDU</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css"
      integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"
      integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      referrerpolicy="no-referrer"
    ></script>
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
    <div class="container mb-5" style="margin: 10px 10px 10px 10px">
      <div class="row">
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

        <input
          class="form-control"
          id="tujuan"
          style="margin: 10px 10px 10px 10px"
          placeholder="Isi Tujuan Umum Anda"
        />

        <input
          class="form-control"
          id="tujuan"
          style="margin: 10px 10px 10px 10px"
          placeholder="Isi Tujuan Khusus Anda"
        />
      </div>

      <button class="btn-warning" type="button">Click Me!</button>
    </div>

    <script type="text/javascript">
      let current = 0;

      // Get Materi Function
      function getMateri() {
        var matpel = $("#matpel").val();
        var kelas = $("#kelas").val();
        $.ajax({
          type: "POST",
          url: "get_materi.php",
          data: {
            matpel: matpel,
            kelas: kelas,
          },
          cache: false,
          success: function (msg) {
            $("#materi").html(msg);
            console.log(msg);
          },
        });
      }

      // Ajax Query
      var queries = [
        {
          type: "POST",
          url: "get_kelas.php",
          target: "kelas",
        },
        {
          type: "POST",
          url: "get_matpel.php",
          target: "matpel",
        },
      ];

      function getFormData() {
        if (current < queries.length) {
          $.ajax({
            type: queries[current].type,
            url: queries[current].url,
            success: function (msg) {
              $("#" + queries[current].target).html(msg);
            },
            complete: function () {
              current++;
              getFormData();
            },
          });
        }
      }

      // Display Pilihan Materi
      $(document).ready(function () {
        getFormData();
        $("#matpel").change(getMateri);
        $("#kelas").change(getMateri);
      });
    </script>
  </body>
</html>
