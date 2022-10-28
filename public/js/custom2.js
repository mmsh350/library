///add books
$(document).ready(function(){  
$('#btnadd').click(function(evt){  
    var title = $('#title').val();
    var isbn = $('#isbn').val();
    var revno = $('#revision_number').val();
    var publisher = $('#publisher').val();
    var pub_date = $('#pub_date').val();
    var author = $('#author').val();
    var genre = $('#genre').val();

    $('#btnadd').prop("disabled", true);
      
if(title !="" && isbn!="" && revno!="" && publisher !="" && author!=""){
// Stop the button from submitting the form:
evt.preventDefault();

// Serialize the entire form:
var data = new FormData(this.form);
        $.ajax({
            url: "add-book",
            type: "post",
            data,
               processData: false,
            contentType: false,
            cache: false,
        success: function(data) { 
            $('#btnadd').html('adding...');
            $('form').trigger("reset");
            window.location.reload();        
        },
        error: function(data) {
            window.scrollTo(0, 0);

            $("#rerror").show(); $("#rerror").html('');
                $.each(data.responseJSON.errors, function (key, value) {
                    $('#rerror').append('<div class="alert alert-danger alert-dismissible" role="alert"><strong>'+value+'</strong></div');
                    });

             
            setTimeout(function(){  
                $('#rerror').fadeOut("slow");  
                $('#btnadd').prop("disabled", false); 
            }, 5000); 
        }
});
}else
{
       window.scrollTo(0, 0)
       $("#rerror").show(); $("#rerror").html('');
       $('#rerror').append('<div class="alert alert-danger alert-dismissible" role="alert"><strong>Fill up all the required Field</strong></div');
      
       setTimeout(function(){  
           $('#rerror').fadeOut("slow");  
           $('#btnadd').prop("disabled", false);
            
       }, 2000); 
}

}); 


$('#updateModal').on('shown.bs.modal', function(event) {
    $('form').trigger("reset");
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    
    var modalTitle = button.data('meta')
    var isbn = button.data('isbn')
    var rev = button.data('rev')
    var pub = button.data('pub')
    var author = button.data('author')
    var pubd = button.data('publishd')
    var genre = button.data('genre')  
    var oldpic = button.data('oldpic') 
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(updateModal);
    modal.find('.modal-title').text('Modify Book :: '+modalTitle);
    var modal = $(this);
    $("#bookid").val(id);
    $("#title2").val(modalTitle);
    $("#isbn2").val(isbn);
    $("#revision_number2").val(rev);
    $("#publisher2").val(pub);
    $("#pub_date2").val(pubd);
    $("#author2").val(author);
    $("#genre").val(genre);
    $("#oldpic").val(oldpic);


})

var table = $('#bookstable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "books",
    pagingType: "full_numbers",
    columns: [
        {data: 'id', name: 'id'},
        {data: 'coverpage_image', name: 'coverpage_image'},
        {data: 'title', name: 'title'},
        {data: 'ISBN', name: 'ISBN'},
        {data: 'revision_number', name: 'revision_number'},
        {data: 'publisher', name: 'publisher'}, 
        {data: 'author', name: 'author'}, 
        {data: 'genre', name: 'genre'}, 
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

$('#bookupdate').click(function(evt){  
    var title = $('#title2').val();
    var isbn = $('#isbn2').val();
    var revno = $('#revision_number2').val();
    var publisher = $('#publisher2').val();
    var pub_date = $('#pub_date2').val();
    var author = $('#author2').val();
    var genre = $('#genre2').val();

    $('#bookupdate').prop("disabled", true);
      
if(title !="" && isbn!="" && revno!="" && publisher !="" && author!=""){
// Stop the button from submitting the form:
evt.preventDefault();

// Serialize the entire form:
var data = new FormData(this.form);
        $.ajax({
            url: "update-book",
            type: "post",
            data,
               processData: false,
            contentType: false,
            cache: false,
        success: function(data) { 
            $('#bookupdate').html('Updating...');
            $('form').trigger("reset");
            window.location.reload();        
        },
        error: function(data) {
            window.scrollTo(0, 0);

            $("#merror").show(); $("#merror").html('');
                $.each(data.responseJSON.errors, function (key, value) {
                    $('#merror').append('<div class="alert alert-danger alert-dismissible" role="alert"><strong>'+value+'</strong></div');
                    });

             
            setTimeout(function(){  
                $('#merror').fadeOut("slow");  
                $('#bookupdate').prop("disabled", false); 
            }, 5000); 
        }
});
}else
{
       window.scrollTo(0, 0)
       $("#merror").show(); $("#merror").html('');
       $('#merror').append('<div class="alert alert-danger alert-dismissible" role="alert"><strong>Fill up all the required Field</strong></div');
      
       setTimeout(function(){  
           $('#merror').fadeOut("slow");  
           $('#bookupdate').prop("disabled", false);
            
       }, 2000); 
}

}); 

}); 
 