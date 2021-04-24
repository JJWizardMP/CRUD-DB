$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        number1: $("#number-binary1").val(),
        number2: $("#number-binary2").val(),
        selector: $("#Select").val(),
      };
      $.ajax({
        type: "POST",
        url: "./../forms/process-switch.php",
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