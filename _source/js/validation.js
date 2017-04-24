/*
 *  Form validation
 */

function validateEmail(Email) {
    var pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return $.trim(Email).match(pattern) ? true : false;
}

// Function to validate input values
function validateInput(input){
    var inputType = input.attr('type');

    switch(inputType) {
        case 'text':
            if (input.val().length <= 2) {
                input.parent().addClass('has-error');
            } else if (input.val().length >= 3) {
                input.parent().removeClass('has-error');
            }
            break;
        case 'number':
            if (input.val().length != 10) {
                input.parent().addClass('has-error');
            } else if (input.val().length == 10) {
                input.parent().removeClass('has-error');
            }
            break;
        case 'email':
            if (validateEmail(input.val())) {
                input.parent().removeClass('has-error');
            } else {
                input.parent().addClass('has-error');
            }
    }
}


(function() {
    
    // Immediately disable submit button on page load.
    $('.submit').attr('disabled', 'disabled');

    // Element has lost focus, run validation
    $('form .required').on('blur', function (event) {
        validateInput($(this));
    });

    // Check for empty required fields on every keystroke.
    // When all required fields have correct data present, enable submit button.
    $('form .required').keyup(function() {
        var empty = false;

        $('form .required').each(function() {        
            if ($(this).val() == '' || $(this).parent().hasClass('has-error') || $(':input[type="number"]').val().length <= 9) {
                // Sets flag to true to keep the submit button disabled
                empty = true;
            }
        });

        if (empty) {
            $('.submit').attr('disabled', 'disabled');
        } else {
            $('.submit').removeAttr('disabled');
        }
    });

})()