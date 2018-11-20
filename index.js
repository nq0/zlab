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
