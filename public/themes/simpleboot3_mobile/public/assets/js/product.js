$(document).ready(function () {
    $('#product_category').change(function () {
        var url = $('#product_category').find('option:selected').data('url');
        location.href = url;
    });

    $(document).on('click', '#inquiry', function (e) {
        e.preventDefault();
        $('#feedback_type').val(2);
        $('#product-id').val('');
        $('.popover_wrap').show();
    });
});
