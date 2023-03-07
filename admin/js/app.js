$(document).ready(function() {
    window.APP = {};

    $.ajaxSetup({
        data: {
            csrf_token: config.token
        }
    });

    // Date time picker
    $('.datetime-picker').each(function() {
        $(this).datetimepicker({
            minDate: config.today
        });
    });

    // Global ajax error handling
    $(document).ajaxError(function(event, jqxhr, settings, thrownError) {

    });

    APP.initSelect2 = function() {
        if ($('.select2').length > 0) {
            $('.select2').select2();
        }
    }

    APP.initDatatable = function() {
        if ($('.datatable').length > 0) {
            $('.datatable').DataTable({
                responsive: true,
                lengthMenu: [25, 50, 75, 100],
                fnDrawCallback: function() {},
            });
        }
    }

    APP.closeModalWindow = function() {
        $('.modal').modal('hide');
    }

    APP.initTooltip = function() {
        $('[data-toggle="tooltip"]').tooltip();
    }

    APP.showFlashMessage = function(status, messsage) {
        var m = '<div class="alert alert-success" role="alert"><button class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Well done!</strong> ' + messsage + '</div>';
        $('#flash-message-wrapper').html(m).show();
    }


    // Initialization
    APP.initSelect2();
    APP.initDatatable();
    APP.initTooltip();

    // Autoclose the flash message
    $("#flash-message-wrapper").delay(10000).slideUp(500, function() {
        $('#flash-message-wrapper').empty();
    });

    $(document).on('click', '.btn-loading', function() {
        var $btn = $(this);
        $btn.button('loading');
        setTimeout(function() {
            $btn.button('reset');
        }, 1000);
    })


    // Row deletion
    $(document).on('click', '.btn-delete', function(event) {

        event.preventDefault();
        var self = $(this);
        var url = config.admin_url + self.data('href')
        var url_segment = (self.data('href')).split('/');

        call_confirm_dialog(function(result) {
            if (!result) {
                return false;
            }
            $.ajax({
                type: "POST",
                url: url,
                dataType: 'json',
                success: function(result) {
                    if (result.status) {
                        var row = self.closest('tr');
                        if (url_segment[0] == 'menu' || self.data('reload') == 'attribute' || self.data('reload') == 'attribute_value') {
                            if (self.data('reload') == 'attribute_value') {
                                self.parent().remove();
                            }
                            if (self.data('reload') == 'attribute') {
                                self.closest("tr").remove();
                            }
                            if (url_segment[0] == 'menu') {
                                window.location.reload();
                            }

                            APP.showFlashMessage(result.status, result.message);

                        } else {
                            $('.datatable').dataTable().fnDeleteRow(row);
                            APP.showFlashMessage(result.status, result.message);
                        }

                    }
                }
            })
        });
    })

    // Delete confirm dialog box
    function call_confirm_dialog(callback) {
        BootstrapDialog.show({
            title: 'Warning',
            message: 'Action is irreversible, do you want to proceed?',
            type: BootstrapDialog.TYPE_DANGER,
            size: BootstrapDialog.SIZE_SMALL,
            buttons: [{
                label: 'No',
                cssClass: 'btn-danger',
                action: function(dialog) {
                    dialog.close();
                    callback(0);
                }
            }, {
                label: 'Yes, Proceed',
                cssClass: 'btn-primary btn-loading',
                action: function(dialog) {
                    dialog.close();
                    callback(1);
                }
            }]
        });
    }

    // File Upload (New)
    if ($('#fileupload').length > 0) {
        var self = $(this);

        $('#fileupload').fileupload({
            dataType: 'json',
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            formData: {
                csrf_token: config.token
            },
            url: self.attr('url'),
            done: function(e, data) {
                $('#progress .bar').hide();
                $('.btn-submit').removeAttr('disabled');

                var result = data.result;

                $(this).closest('.upload-holder').find('#thumbnail-preview').attr('src', result.location);
                $(this).closest('.upload-holder').find('#image-id').val(result.name);
            },
            progress: function(e, data) {
                $('#progress .bar').show();
                var progress = parseInt((data.loaded / (data.total * 2)) * 100, 20);
                $('#progress .bar').css('width', progress + '%');
            },
            change: function(e, data) {
                $('.btn-submit').attr('disabled', 'disabled');
            }
        });
    }

    if ($('#fileupload_icon').length > 0) {
        var url = $('#owner').val();
        $('#fileupload_icon').fileupload({
            dataType: 'json',
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            formData: {
                csrf_token: config.token,
                folder: $('#fileupload_icon').data('folder'),
                type: $('#icon-type').val()
            },
            url: self.attr('url'),
            done: function(e, data) {
                $('#progress .bar').hide();
                $('.btn-submit').removeAttr('disabled');

                var result = data.result;

                $(this).closest('.upload-holder-icon').find('#thumbnail-icon-preview').attr('src', result.location);
                $(this).closest('.upload-holder-icon').find('#image-icon-id').val(result.name);
            },
            progress: function(e, data) {
                $('#progress .bar').show();
                var progress = parseInt((data.loaded / (data.total * 2)) * 100, 20);
                $('#progress .bar').css('width', progress + '%');
            },
            change: function(e, data) {
                $('.btn-submit').attr('disabled', 'disabled');
            }
        });
    }

    if ($('#fileupload_banner').length > 0) {
        $('#fileupload_banner').fileupload({
            dataType: 'json',
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            formData: {
                csrf_token: config.token
            },
            url: self.attr('url'),
            done: function(e, data) {
                $('#progress .bar').hide();
                $('.btn-submit').removeAttr('disabled');

                var result = data.result;

                $(this).closest('.upload-holder-banner').find('#thumbnail-banner-preview').attr('src', result.location);
                $(this).closest('.upload-holder-banner').find('#image-banner-id').val(result.name);
            },
            progress: function(e, data) {
                $('#progress .bar').show();
                var progress = parseInt((data.loaded / (data.total * 2)) * 100, 20);
                $('#progress .bar').css('width', progress + '%');
            },
            change: function(e, data) {
                $('.btn-submit').attr('disabled', 'disabled');
            }
        });
    }

    // Clock picker
    if ($('.clockpicker').length > 0) {
        $('.clockpicker').clockpicker({
            autoclose: true
        });
    }

    /*
     * http://stackoverflow.com/questions/12286332/twitter-bootstrap-remote-modal-shows-same-content-everytime
     * Solved the twitter bootstrap ajax modal problem
     */
    $('body').on('hidden.bs.modal', '.modal', function() {
        $(this).removeData('bs.modal');
    });

    // Called when modal loaded via ajax
    $('#modal-zipcode').on('shown.bs.modal', function() {
        APP.initSelect2();
    })

    $(document).on('submit', '#form-attribute', function(event) {
        event.preventDefault();
        var self = $(this);
        $.ajax({
            type: "POST",
            data: self.serialize(),
            url: self.attr('action'),
            dataType: "json",
            success: function(response) {
                if (response.status == 'error') {
                    $('#modal-attribute .modal-content').html(response.html);
                    return false;
                }
                if (response.status == 1) {
                    window.location.reload();
                    APP.closeModalWindow();
                    APP.showFlashMessage(response.status, response.message);
                }
            }
        });
    });
});

/*
 * Delivery locations management
 * ===============================
 */

// Add
$(document).on('submit', '#form-city-mt', function(e) {
    e.preventDefault();
    var self = $(this);
    $.ajax({
        type: "POST",
        data: self.serialize(),
        url: self.attr('action'),
        dataType: "json",
        success: function(response) {
            if (response.status == 'error') {
                $('#modal-city .modal-content').html(response.html);
                return false;
            }

            if (response.status == 1) {
                if (response.action == 'update') {
                    var row = $('.datatable').find('a[data-id="' + response.zipcode_id + '"]').closest('tr');
                    $('.datatable').dataTable().fnDeleteRow(row);
                }
                if (response.action == 'email') {
                    $('.email_table').find('a[data-id="' + response.zipcode_id + '"]').closest('tr').remove();
                    $('.email_table tbody').append('<tr><td>' + response.data.name + '</td><td>' + response.data.template_id + '</td><td>' + response.data.edit_link + '</td></tr>')
                }

                $('.datatable').dataTable().fnAddData(response.data)
                APP.closeModalWindow();
                APP.initTooltip();
                APP.showFlashMessage(response.status, response.message);
            }
        }
    });
})

if ($('.ckeditor').length > 0) {
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: config.admin_url + 'ck_uploader?folder=extras&_token=' + config.token
    });
}

$(document).on('click', '#map_address', function(event) {
    event.preventDefault();
    var geocoder = new google.maps.Geocoder();
    var address = $(this).data('address');

    geocoder.geocode({
        'address': address
    }, function(results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
            window.open('https://www.google.com/maps?z=12&t=m&q=loc:' + latitude + '+' + longitude, '_blank');
        }
    });
});

if ($('.rating').length > 0) {
    $('#rating').rating();
}

if ($('#elfinder').length > 0) {
    $('#elfinder').elfinder({
        url: config.admin_url + 'file_browser'
    }).elfinder('instance');

    function filebrowser() {
        if ($.fn.button.noConflict) {
            $.fn.btn = $.fn.button.noConflict();
        }
    }
    filebrowser();
}

// Get modules
$(document).on('change', '#group-permission', function(event) {
    var group_id = $(this).val();
    if (!isNaN(group_id) && group_id != 0)
        window.location = config.admin_url + 'permissions/index/' + group_id;
})

// Filtering orders
$(document).on('change', '#order_status_id', function(event) {
    var order_status = $(this).val();
    var restaurant_id = ($('#restaurant_id').val()) ? $('#restaurant_id').val() : '';
    var get_parameters = (order_status != 0) ? '?status=' + order_status : '';
    var url_param = (restaurant_id) ? config.admin_url + 'restaurants/orders/' + restaurant_id + get_parameters : config.admin_url + 'orders/index' + restaurant_id + get_parameters;

    if (!isNaN(order_status))
        window.location = url_param;
})

if ($('.datatable_orders').length > 0) {
    $('.datatable_orders').DataTable({
        "ordering": false
    });
}

$(document).on('change', '#order_restaurant_status', function(event) {
    var order_status = $(this).val();
    var restaurant_id = $('#restaurant_id').val();
    var url_param = (order_status != 0) ? '?status=' + order_status : '';

    if (!isNaN(order_status))
        window.location = config.admin_url + 'restaurants/orders/' + restaurant_id + url_param;
})

function cb(start, end) {
    $('#report_date span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'));
}

if ($('#report_date').length > 0) {
    $('#report_date').daterangepicker({
            startDate: ($("#js_start_date").length > 0) ? $("#js_start_date").val() : moment().subtract(30, 'days'),
            endDate: ($("#js_end_date").length > 0) ? $("#js_end_date").val() : moment(),
            showDropdowns: true,
            locale: {
                format: 'DD/MM/YYYY'
            },
        },
        function(start, end, label) {
            $('#start_date').val(start.format('YYYY-MM-DD'));
            $('#end_date').val(end.format('YYYY-MM-DD'));

        }, cb);
}

$('#report_date').on('apply.daterangepicker', function(ev, picker) {
    $('#report_date span').html(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'))
    $('#start_date').val(picker.startDate.format('YYYY-MM-DD'));
    $('#end_date').val(picker.endDate.format('YYYY-MM-DD'));

});

// Orders
var orderTable
if ($('#datatable_orders').length > 0) {
    orderTable = $('#datatable_orders').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "pageLength": 25,
        "ordering": false,
        "ajax": {
            "url": config.admin_url + "orders/ajax_orders",
            "type": "POST",
            "data": {
                status: $('#status').val(),
                restaurant_id: $('#restaurant_id').val(),
                csrf_token: config.token
            }
        },
        "columns": [{
            "data": "order_reference"
        }, {
            "data": "restaurant_name"
        }, {
            "data": "customer"
        }, {
            "data": "address_line_1",
            "render": function(data, type, full) {
                return full.address_line_1 + '<br />' + full.address_line_2 + '<br />' + full.zipcode + '<br />' + full.city;
            }
        }, {
            "data": "created_at"
        }, {
            "data": "phone_number"
        }, {
            "data": "total_amount_payed",
            "render": function(data, type, full) {
                return $('#currency').html() + ' ' + full.total_amount_payed;
            }
        }, {
            "data": "order_status",
            "render": function(data, type, full) {
                switch (data * 1) {
                    case 1:
                        return '<span class="label label-warning">Pending</span>';
                    case 2:
                        return '<span class="label label-info">Accepted</span>';
                    case 3:
                        return '<span class="label label-primary">Deliverd</span>';
                    case 4:
                        return '<span class="label label-danger">Rejected</span>';
                    case 5:
                        return '<span class="label label-default">Incomplete</span>';
                }
            }
        }, {
            "data": "order_id",
            "render": function(data, type, full) {
                var restaurant_id = $('#restaurant_id').val();

                if (restaurant_id) {
                    btn = '&nbsp;<a href="' + config.admin_url + "orders/details/" + full.order_reference + '/' + '"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>';
                } else {
                    btn = '&nbsp;<a href="' + config.admin_url + "orders/details/" + full.order_reference + $('#url_segment').val() + '"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>';
                }

                btn += '&nbsp;<a target="_blank" href="' + config.admin_url + "orders/download_receipt/" + full.order_reference + '/' + '"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></a>';

                return btn;
            }
        }]
    });
}

// Make sound
var playSound = function() {
    var p = $('#order-beep').get(0);
    p.play();
}

var fetchPendingOrdersCount = function() {
    $.ajax({
        type: "POST",
        url: config.admin_url + 'dashboard/get_pending_orders_count',
        data: {
            csrf_token: config.token
        },
        dataType: "json",
        success: function(response) {
            $('#counter-admin-pending-order').attr('title', response.count + ' pending orders')
            $('#counter-admin-pending-order').html(response.count)
        }
    });
}

// Pusher 
var pusher = new Pusher(config.pusher_key, {
    authEndpoint: config.base_url + 'pusher/auth'
});

var channel = pusher.subscribe('private-' + config.pusher_channel);

channel.bind('order_received', function(data) {
    playSound();

    fetchPendingOrdersCount();

    orderTable.draw(false);
});

fetchPendingOrdersCount();

// Dish sizes
$('.has_different_sizes').on('change', function(e) {
    if ($(this).val() == 1) {
        $('#section-dish-sizes').show();
        $('#form-group-price').hide();
    } else {
        $('#section-dish-sizes').hide();
        $('#form-group-price').show();
    }
});

// Restaurant location picker - Google map
if ($('#location').length) {
    var input = document.getElementById('location');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();

        $('#location_latitude').val(place.geometry.location.lat());
        $('#location_longitude').val(place.geometry.location.lng());
    });
}