$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        number: $("#number-divide").val(),
      };
      $.ajax({
        type: "POST",
        url: "./../forms/process-dowhile.php",
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