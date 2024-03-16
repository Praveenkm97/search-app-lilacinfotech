$(document).ready(function () {
    $('#search-input').keyup(function () {
        var keyword = $(this).val().trim();

        $.ajax({
            url: $('#input-url').val(),
            method: 'POST',
            data: {
                keyword: keyword
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // Include CSRF token in headers
            },
            success: function (response) {
                $('.search-list').empty();
                $.each(response, function(key, value) {
                    var html = '<div class="col-lg-6 col-xs-12 col-md-6">';
                    html += '<div class="box">';
                    html += '<p>'+ value.name +'</p>';
                    html += '<p>'+ value.designation_name +'</p>'
                    html += '<p>'+ value.department_name +'</p>'
                    html += '</div>'
                    html += '</div>'

                    $('.search-list').append(html);
                });
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
});
