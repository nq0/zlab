$(function() {
    $('.ajax').click(
        function () {
            var val = $(this).attr('id');
            $.ajax({
                url: val +'.html',
                dataType: 'html',
                success: function (data) {
                    $('#contents').html(data);
                },
                error: function (data) {
                    alert('error');
                }
            });
        }
    );
});
$(function() {
    $('.ajax-php').click(
        function () {
            var val = $(this).attr('id');
            $.ajax({
                url: val +'.php',
                dataType: 'json',
                success: function (data) {
                    $('#contents').php(data);
                },
                error: function (data) {
                    alert('error');
                }
            });
        }
    );
});
