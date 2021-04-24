$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        number1: $("#number-comparison1").val(),
        number2: $("#number-comparison2").val(),
      };
      $.ajax({
        type: "POST",
        url: "./../forms/process-ifelseif.php",
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