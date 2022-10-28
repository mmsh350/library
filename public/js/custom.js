$(document).ready(function() {	
    var table = $('#usertable').DataTable({
       processing: true,
       serverSide: true,
       ajax: "users",
       pagingType: "full_numbers",
       columns: [
           {data: 'id', name: 'id'},
           {data: 'fullname', name: 'fullname'},
           {data: 'role', name: 'role'},
           {data: 'email', name: 'email'},
           {data: 'phone_number', name: 'phone_number'}, 
           {data: 'action', name: 'action', orderable: false, searchable: false}
        ],

       dom: 'Blfrtip',
       buttons: [
       {
           extend: 'print',
           exportOptions: {
               columns: [ 0, 1, 2, 3, 4]
           }
       },
       {
           extend: 'excelHtml5',
           exportOptions: {
               columns: [ 0, 1, 2, 3, 4 ]
           }
       },
       {
           extend: 'pdfHtml5',
           exportOptions: {
               columns: [ 0, 1, 2, 3, 4]
           }
       },
       
       'colvis'
   ], stateSave: true,
   });

   
   $('#usertable tbody').on('click', 'button', function() {
   var data = table.row($(this).parents('tr')).data();
 
       if (this.id == 'activateUser') {
           let user_id = data['id'];
           let status = data['is_active'];
           let url='';
          
           
           if (status == '1') {status = "Disable"; url='disable-users'} else{ status = "Enable"; url='enable-users';};
           
           Swal.fire({
           title:'Confirmation',
           text: 'Are you sure you want to '+status+' this User ?',
           showDenyButton: true,
           confirmButtonText: 'Yes',
           denyButtonText: `Abort`,
           icon: 'question',
           iconColor: 'danger',
           confirmButtonColor: '#188ae2',
           cancelButtonColor: '#d33',
           }).then((result) => {

               if (result.isConfirmed) {
                   
                   $.ajax({
                           url: url,
                           type: "post",
                           data:{id:user_id},
                           cache: false,
                           success: function(data){
                              window.location.reload(); 
                           },
                       error: function(data) {
                           Swal.fire({
                           text:'Error Processing your request, Please contact the administrator!',
                           icon:'error'})
                          }
                           
                       });
                           
                } else if (result.isDenied) {
                       Swal.fire({
                       title:'Aborted',
                       text:'Changes are not saved',
                       icon:'info'})
                       }
                })
       } 
   }); 
 

// Modify User role
$('#btnModify').click(function(evt) {
    var roleUpdate = $('#groupModify').val();
    var userid = $('#userid').val();

    if (roleUpdate != "") {
        $.ajax({
            url: "updateUser-role",
            type: "PATCH",
            data: {
                userid: userid,
                roleUpdate: roleUpdate
            },
            cache: false,
            success: function(dataResult) {
                window.location.reload(); 
            },
            error: function(data) {
                  $("#merror").show();
                    $('#merror_msg').fadeIn().html('Error Processing your request, Please contact the administrator!');
                    $('#btnModify').prop("disabled", true);
                    setTimeout(function() {
                        $('#merror').fadeOut("slow");
                        $('#btnModify').prop("disabled", false);
                    }, 2000);
            }
        });
    } else {
        $("#merror").show();
        $('#merror_msg').fadeIn().html('Please Select a Role');
        $('#btnModify').prop("disabled", true);
        setTimeout(function() {
            $("#spinner2").hide(); 
            $('#merror').fadeOut("slow");
            $('#btnModify').prop("disabled", false);
        }, 2000);
    }
});

//Modify User password
$('#btnReset').click(function(evt) {
		 
    var newPass = $('#newPass').val();
    var userid = $('#resetid').val();

    if (newPass !== "") {
        $.ajax({
            url: "resetPassword",
            type: "PATCH",
            data: {
                userid: userid,
                newPass: newPass
            },
            cache: false,
            success: function(dataResult) {
                $('form').trigger("reset");
                window.location.reload(); 
            },
            error: function(data) {
                  $("#rerror").show();
                    $('#rerror_msg').fadeIn().html('Error Processing your request, Please contact the administrator!');
                    $('#btnReset').prop("disabled", true);
                    setTimeout(function() {
                        $('#rerror').fadeOut("slow");
                        $('#btnReset').prop("disabled", false);
                    }, 2000);
            }
        });
    } else {
        $("#rerror").show();
        $('#rerror_msg').fadeIn().html('New Password Field is required');
        $('#btnReset').prop("disabled", true);
        setTimeout(function() {
            $('#rerror').fadeOut("slow");
            $('#btnReset').prop("disabled", false);
        }, 2000);

    }


});


   
});
