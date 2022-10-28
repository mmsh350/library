$('#updateModal').on('shown.bs.modal', function(event) {
	$('form').trigger("reset");
	var button = $(event.relatedTarget) // Button that triggered the modal
	var id = button.data('id') // Extract info from data-* attributes
	var roledata = button.data('meta') // Extract info from data-* attributes
	var modalTitle = button.data('meta2')
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(updateModal);
	modal.find('.modal-title').text('Modify Role :: '+modalTitle);
	var modal = $(this);
	$("#userid").val(id);
})

$('#resetModal').on('shown.bs.modal', function(event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var id = button.data('id') // Extract info from data-* attributes
	var data = button.data('meta') // Extract info from data-* attributes
	var modal = $(resetModal);
	modal.find('.modal-title').text('Modify Password :: '+data);
	var modal = $(this);
	$("#resetid").val(id);
	$('form').trigger("reset");
	 
})