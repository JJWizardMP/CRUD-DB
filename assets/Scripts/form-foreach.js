$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        selector: $("#Select").val(),
      };
      $.ajax({
        type: "POST",
        url: "./../forms/process-foreach.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
        if (data.success) {
            $("#Result").html(data.operation);
        }
      });
      event.preventDefault();
    });
  });