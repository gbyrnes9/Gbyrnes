/**
 * Created by Gregory on 7/27/15.
 */


/*DataTable Call*/



$('#flash-overlay-modal').modal();

$(document).ready( function () {
    $('#table_id').DataTable({
        paging:false,
        "autoWidth": false,
    } );});
