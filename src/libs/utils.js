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
    },
  });
}

// function getFormData() {
//   fetch("./data/query.json")
//     .then((response) => response.json())
//     .then((data) => {
//       for (let current = 0; current < data.length; current++) {
//         $.ajax({
//           type: data[current].type,
//           url: data[current].url,
//           success: function (msg) {
//             $("#" + data[current].target).html(msg);
//             console.log(msg);
//           },
//         });
//       }
//     });
// }

function getFormData() {
  $.ajax({
    type: "POST",
    url: "get_formdata.php",
    cache: false,
    success: function (msg) {
      let data = JSON.parse(msg);

      // Add kelas data to form
      for (let current = 0; current < data[0].length; current++) {
        $("#kelas").append(
          '<option value="' +
            data[0][current].id_kelas +
            '">' +
            data[0][current].nama_kelas +
            "</option>"
        );
      }

      // Add matpel data to form
      for (let current = 0; current < data[1].length; current++) {
        $("#matpel").append(
          '<option value="' +
            data[1][current].id_matpel +
            '">' +
            data[1][current].nama_matpel +
            "</option>"
        );
      }
    },
  });
}
