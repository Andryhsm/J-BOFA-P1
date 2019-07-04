function sortProperties(obj, isNumericSort)
{
    isNumericSort=isNumericSort || false; // by default text sort
    var sortable=[];
    for(var key in obj)
        if(obj.hasOwnProperty(key))
            sortable.push([key, obj[key]]);
    if(isNumericSort)
        sortable.sort(function(a, b)
        {
            return a[1]-b[1];
        });
    else
        sortable.sort(function(a, b)
        {
            var x=a[1].toLowerCase(),
                y=b[1].toLowerCase();
            return x<y ? -1 : x>y ? 1 : 0;
        });
    return sortable; 
}
jQuery(document).ready(function () {

    

    var table;

    if (jQuery('#example2').length > 0) {
        table = jQuery('#example2').on('preXhr.dt', function ( e, settings, data ) {
            } )
            .dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {   
                "url": base_url+"admin/get_user",
                "type": "GET"
            },
            "responsive"   : true,
            "bPaginate"    : true,
            "bLengthChange": true,
            "bFilter"      : false,
            "bInfo"        : true,
            "bAutoWidth"   : false,
            //"order"        : [[1, "desc"]],
            "lengthMenu"   : [20, 40, 60, 80, 100],
            "pageLength"   : 20,
            columns        : [
                {data: 'name', name:'name',searchable: true, sortable: true},
                {data: 'email', name:'email',searchable: true, sortable: true},
                {data: 'phone', name:'phone',searchable: true, sortable:true},
                {data: 'status', name:'status',searchable: true, sortable: false},
                {data: 'action', name:'action',searchable: false, sortable: false}
            ],
            fnDrawCallback : function () {
                var $paginate = this.siblings('.dataTables_paginate');

                if (this.api().data().length <= this.fnSettings()._iDisplayLength) {
                    $paginate.hide();
                }
                else {
                    $paginate.show();
                }
             },
             "language": {
                 "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
              },
                initComplete : function() {
                    $.ajax({
                        url: base_url + 'admin/user/get-filter',
                        type: 'GET',
                        dataType: 'json',
                        success: function(success){
                            console.log('success');
                        },
                        error : function(error){
                            console.log(error);
                        }
                    })
                    .done(function(data) {
                        var elements = [];
                        var brand_array = data.brand_array;
                        brand_array = sortProperties(brand_array);
                        for (var i = 0; i < brand_array.length ; i++) {
                            var brand = brand_array[i];
                            $('#brand').append("<option value='"+ brand[0]+ "'>"+ brand[1] + "</option>");
                        }

                        /*$('#brand').append("<option class='brand_all' value='all_'>All</option>");*/

                        $('#example2_length').append('<div class="btn btn-small">'+
                                '<div class="btn-group" data-toggle="modal" data-target="#exampleModal">'+
                                  '<a href="#" class="btn btn-default">Selectionner colonne à afficher</a>'+
                                  '<a href="#" class="btn btn-default"><span class="caret"></span></a>'+
                                '</div>'+
                            '</div>');

                    })
                    .fail(function() {
                    });
                }    
        });
    }
    $('.select-brand, .select-product-status, .select-product-manager').popover({
        trigger: "hover"    
    });
    if (jQuery('.dataTables_filter').length > 0) {
        jQuery('.dataTables_filter').find('input').addClass('form-control')
    }
});