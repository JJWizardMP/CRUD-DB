$(document).ready(function () {
  // Add to database
  $('#addnew').click(function(){
	  $('#addEmployeeModal').modal('show');
	});
  $("#add-form").submit(function (event) {
    // prepare data from form
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
          // show success message
          $('#alert').show();
          $('#alert_message').html(response.message);
          // update content
          $('#Dinamic-table').html(response.table);
          // clear all fields of form
          $('#add-form input[type="text"]').val(""); 
          $('#add-form input[type="email"]').val(""); 
          $('#add-form textarea').val("");        
       
        }
    });
    event.preventDefault();
  });

  // Edit record
	$(document).on('click', '.edit', function(){
		var id = $(this).data('id');
		getDetails(id);
		$('#editEmployeeModal').modal('show');
  });
  $("#edit-form").submit(function (event) {
    // prepare data from form
    var addform = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "./controllers/update.php",
      data: addform,
      dataType: "json",
      encode: true,
    }).done(function (response) {
        $('#editEmployeeModal').modal('hide');
        if(response.success){
          // show success message
          $('#alert').show();
          $('#alert_message').html(response.message);
          // update content
          $('#Dinamic-table').html(response.table);
          // clear all fields of form     
        }
    });
    event.preventDefault();
  });

  // Delete record
	$(document).on('click', '.delete', function(){
		$('#id-delete').val( $(this).data('id') );
		$('#deleteEmployeeModal').modal('show');
  });
  
  $("#delete-form").submit(function (event) {
    // prepare data from form
    var addform = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "./controllers/delete.php",
      data: addform,
      dataType: "json",
      encode: true,
    }).done(function (response) {
        $('#deleteEmployeeModal').modal('hide');
        if(response.success){
          // show success message
          $('#alert').show();
          $('#alert_message').html(response.message);
          // update content
          $('#Dinamic-table').html(response.table);
        }
    });
    event.preventDefault();
  }); 

  // Search records
	$('#search-addon').on('click', function(event){
    event.preventDefault();
    var formData = {
      term: $("#search-term").val(),
    };
    console.log(formData.term);
    $.ajax({
      type: "POST",
      url: "./controllers/search.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (response) {
        if(response.success){
          // update content
          $('#Dinamic-table').html(response.table);
        }
    });
  });

});

function getDetails(id){
	$.ajax({
		method: 'POST',
		url: './controllers/fetch_row.php',
		data: {id:id},
		dataType: 'json',
		success: function(response){
			if(response.success){
				$('.id').val(response.data.ID);
				$('.name').val(response.data.Name);
				$('.email').val(response.data.Email);
				$('.address').val(response.data.Address);
				$('.phone').val(response.data.Phone);
			}
		}
	});
}