$(document).ready(function () {

    $('form').submit(function () {
        return false;
    });

    $('form input').on("invalid.zf.abide", function (ev, elem) {
        elem.parent().addClass('is-error');
    })

    $('form input').on("valid.zf.abide", function (ev, elem) {
        elem.parent().removeClass('is-error');
    })

    $('form[name="callback"]').on("formvalid.zf.abide", function (ev, form) {
        $.ajax({
            url: "/dev/ajax/send.php",
            type: "POST",
            data: {data: form.serializeArray()},
            dataType: 'json',
            success: function (data) {
                if (data.response) {
                    form[0].reset();
                    $('#modal-success').foundation('open');
                }
            }
        });
    });

    $('.dev_order_btn').on('click', function () {
        var product_name = $(this).data('name'),
            img = $(this).data('img'),
            modal = $('.dev_order'),
            preview = modal.find('#dev_order_preview');

        if (product_name && product_name !== 'undefined' && img && img !== 'undefined') {
            modal.foundation('open');
            preview.html('');
            preview.append('<label class="form-label">Вы выбрали кухню:</label>' +
                '<div class="form-preview">' +
                '<img src="' + img + '" alt="' + product_name + '"/>' +
                '<span>' + product_name + '</span>' +
                '<input type="hidden" name="product_name" value="' + product_name + '" required/>' +
                '</div>');
        }
        else {
            return false;
        }
    });
    $('form[name="order_modal"]').on("formvalid.zf.abide", function (ev, form) {
        $.ajax({
            url: "/dev/ajax/send.php",
            type: "POST",
            data: {data: form.serializeArray()},
            dataType: 'json',
            success: function (data) {
                if (data.response) {
                    form[0].reset();
                    $('#modal-order').foundation('close');
                    $('#modal-success').foundation('open');
                }
            }
        });
    });

    $('form[name="order"]').on("formvalid.zf.abide", function (ev, form) {
        $.ajax({
            url: "/dev/ajax/send.php",
            type: "POST",
            data: {data: form.serializeArray()},
            dataType: 'json',
            success: function (data) {
                if (data.response) {
                    form[0].reset();
                    $('#modal-success').foundation('open');
                }
            }
        });
    });


});

