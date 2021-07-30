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

function getFormData() {
  fetch("./data/query.json")
    .then((response) => response.json())
    .then((data) => {
      for (let current = 0; current < data.length; current++) {
        $.ajax({
          type: data[current].type,
          url: data[current].url,
          success: function (msg) {
            $("#" + data[current].target).html(msg);
          },
        });
      }
    });
}
