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


  //User logs
   $('#userlogs').DataTable({
    processing: true,
    serverSide: true,
    ajax: "userlogs",
    pagingType: "full_numbers",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'description', name: 'description'},
        {data: 'created_by', name: 'created_by'},
        {data: 'created_at', name: 'created_at'},
        ],

        dom: 'Blfrtip',
        buttons: [
        {
            extend: 'print',
            exportOptions: {
                columns: [ 0, 1, 2, 3 ]
            }
        },
        {
            extend: 'excelHtml5',
            exportOptions: {
                columns: [ 0, 1, 2, 3 ]
            }
        },
        {
            extend: 'pdfHtml5',
            exportOptions: {
                columns: [ 0, 1, 2, 3 ]
            }
        },
        
        'colvis'
    ],
    stateSave: true,
    "order": [[ 0, "desc" ]],
    });

//Load section table
var table3 = $('#sectionTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "settings",
    pagingType: "full_numbers",
    lengthMenu: [
        [5,10, 25, 50, -1],
        [5,10, 25, 50, 'All'],
    ],
    columns: [
        {data: 'id', name: 'id'},
        {data: 'tbl_name', name: 'Section'},
        {data: 'display_name', name: 'Section Label'},
        {data: 'created_by', name: 'Created by'},
        {data: 'action', name: 'action', orderable: false, searchable: false}
     ],
     
    dom: 'Blfrtip',
    buttons: [
    {
        extend: 'print',
        exportOptions: {
            columns: [ 0, 1, 2, 3 ]
        }
    },
    // {
    //     extend: 'excelHtml5',
    //     exportOptions: {
    //         columns: [ 0, 1, 2, 3 ]
    //     }
    // },
    {
        extend: 'pdfHtml5',
        exportOptions: {
            columns: [ 0, 1, 2, 3]
        }
    },
    {
        text: 'Reload',
        action: function ( e, dt, node, config ) {
            table3.ajax.reload(null, false);
        }
    },
    
    'colvis'
], stateSave: true,
});

$(".reload" ).click(function() {
   
}); 

//Load Field table
var table2 = $('#fieldTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "settings/getFields",
    pagingType: "full_numbers",
    lengthMenu: [
        [5,10, 25, 50, -1],
        [5,10, 25, 50, 'All'],
    ],
    columns: [
        {data: 'id', name: 'id'},
        {data: 'tbl_name', name: 'Section'},
        {data: 'field_name', name: 'field_name'},
        {data: 'display_name', name: 'Display Name'},
        {data: 'type', name: 'type'},
        {data: 'created_by', name: 'Created by'},
        {data: 'updated_at', name: 'Created by'},
        {data: 'action', name: 'action', orderable: false, searchable: false}
     ],
     
    dom: 'Blfrtip',
    buttons: [
    {
        extend: 'print',
        exportOptions: {
            columns: [ 0, 1, 2, 3,4,5,6]
        }
    },
    // {
    //     extend: 'excelHtml5',
    //     exportOptions: {
    //         columns: [ 0, 1, 2, 3,4,5,6]
    //     }
    // },
    {
        extend: 'pdfHtml5',
        exportOptions: {
            columns: [ 0, 1, 2, 3,4,5,6]
        }
    },
    
    {
        text: 'Reload',
        action: function ( e, dt, node, config ) {
            table2.ajax.reload(null, false);
        }
    },
    
    'colvis'
], stateSave: true,
});


//Load Field table
var table4 = $('#corrctionlogs').DataTable({
    processing: true,
    serverSide: true,
    ajax: "correctionlogs",
    pagingType: "full_numbers",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'application_id', name: 'application_id'},
        {data: 'table_name', name: 'Section'},
        {data: 'description', name: 'description'},
        {data: 'fullname', name: 'Created by'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        {data: 'updated_at', name: 'Updated At'},
        
     ],
     "order": [[ 0, "desc" ]],
    dom: 'Blfrtip',
    buttons: [
    {
        extend: 'print',
        exportOptions: {
            columns: [ 0, 1, 2, 3,4,5,6]
        }
    },
    // {
    //     extend: 'excelHtml5',
    //     exportOptions: {
    //         columns: [ 0, 1, 2, 3,4,5,6]
    //     }
    // },
    {
        extend: 'pdfHtml5',
        exportOptions: {
            columns: [ 0, 1, 2, 3,4,5,6]
        }
    },
    
    {
        text: 'Reload',
        action: function ( e, dt, node, config ) {
            table4.ajax.reload(null, false);
        }
    },
    
    'colvis'
] 
});
//Track button 4
$('#corrctionlogs tbody').on('click', 'button', function() {
    var data = table4.row($(this).parents('tr')).data();
  
    if (this.id) {
        let cid = data['id'];
         
        Swal.fire({
        title:'Confirmation',
        text: 'Are you sure you want to Reverse this Correction ?',
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
                        url: "reverse",
                        type: "post",
                        data:{id:cid},
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

})

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
