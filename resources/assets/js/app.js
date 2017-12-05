$(document).ready(function() {
    $('#table').DataTable({
    	"pageLength": 5
    });
    $('.textarea').summernote();
    $('.datetime').datetimepicker({format:'YYYY-MM-DD H:mm:ss'}); 
} );