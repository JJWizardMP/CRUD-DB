$(document).ready(function () {
    $("#add-form").submit(function (event) {
      var formData = {
        name: $("#add-name").val(),
        email: $("#add-email").val(),
        address: $("#add-address").val(),
        phone: $("#add-phone").val(),
      };
      $.ajax({
        type: "POST",
        url: "./forms/process-insert.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        //console.log(data);
        if (data.success) {
            $("#DC").html(data.operation);
        }
      });
      event.preventDefault();
    });
  });