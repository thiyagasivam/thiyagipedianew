// script.js
$(document).ready(function () {
    $('#search_input').on('input', function () {
        var inputValue = $(this).val();
        if (inputValue.length == 2) {
            inputValue = inputValue.substring(0, 2) + '-' + inputValue.substring(2);
        }
        $(this).val(inputValue);
    }); 
});
