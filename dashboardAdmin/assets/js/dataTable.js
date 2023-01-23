$(document).ready(function () {
    // table admin
    $('#table-admin').DataTable({
    "preDrawCallback": function(settings) {
        $('input[type="search"]').addClass('border-2 w-50 me-3 m-2 border-secondary rounded-pill ');
        $('#table-admin_info').css('color','blue');
        $('#table-admin_paginate').addClass('text-info');  
    }
});

    // table songs
    $('#table-song').DataTable({
        "preDrawCallback": function(settings) {
            $('input[type="search"]').addClass('border-2 w-50 me-3 m-2 border-secondary rounded-pill ');
            $('#table-admin_info').css('color','blue');
            $('#table-admin_paginate').addClass('text-info');  
        }
    });
    });
  