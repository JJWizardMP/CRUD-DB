$(document).ready(function () {
  // Add to database
  $('#addnew').click(function(){
	  $('#addEmployeeModal').modal('show');
	});
  $("#add-form").submit(function (event) {
    var addform = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "./controllers/add.php",
      data: addform,
      dataType: "json",
      encode: true,
    }).done(function (response) {
        $('#addEmployeeModal').modal('hide');
        if(response.success){
          $('#Dinamic-table').html(response.table);
        }
    });
    event.preventDefault();
  });
});