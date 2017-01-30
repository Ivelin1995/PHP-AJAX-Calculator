/**
 * Created by II on 1/29/2017.
 */
$(function () {

    var output = $('#output');

    $(':button').on('click', function () {
        if ($(this).text() == 'C') {
            output.val('');
        } else if ($(this).text() == '=') {
            $.post(
                'solve',
                {'_token': $('#token').val(), 'expression': output.val()},
                function (data) {
                    output.val(data.result);
                },
                'json'
            );
        } else {
            output.val(output.val() + $(this).text());
        }
    });
})