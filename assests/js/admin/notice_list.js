$(document).ready(function() {


    // DataTable initialisation
	//$('#notice-list-table').DataTable();

    $('#notice-list-table').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
           'url':'get_noticelist'
        },
        'columns': [
           { data: 'notice_Id' },
           { data: 'title' },
           { data: 'update_date' },
           { data: 'notice_type' },
           { data: 'action' },
        ]
      });

   });
