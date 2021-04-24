$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        number: $("#number-parity").val(),
      };
      $.ajax({
        type: "POST",
        url: "./../forms/process-ifelse.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        //console.log(data);
        if (data.success) {
            $("#Result").html(data.operation);
        }
      });
      event.preventDefault();
    });
  });