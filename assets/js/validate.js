
// validate contact form
$(function () {

    $('#contact').validate({
        rules: {
            name: {
                required: true,
                myfileld: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10
            },
            message: {
                required: true
            }
        },

        messages: {
            name: {
                required: "Please enter your name"

            },
            email: {
                required: "You have entered an invalid email address!"
            },
            phone: {
                required: "This field is required",
                digits: "This field can only contain numbers",
                minlength: "This field must contain at least 10 characters"
            },
            message: {
                required: "You have to write something to send this form."
            }
        },

        submitHandler: function (form) {
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
              //  url: "https://script.google.com/macros/s/AKfycbylyQjIl1gu5rgDBlO02nwQyG5kkdxev1qJx2E4LNBQFsVSO--R/exec",
                url: "assets/js/contactus.php",
                success: function () {
                  //  window.location.href = 'ThankYou.html'; 
                  //  $('#success').fadeIn();
                  //  setTimeout(function () { $('#success').fadeOut('slow'); }, 3000);
                    $('#success-modal').modal('show');
                    $('#contact').trigger('reset');
                },
                error: function () {
                    $('#error').fadeIn();
                   // setTimeout(function () { $('#error').fadeOut('slow'); }, 3000);
                }
            });
           
        }
    });

    
    jQuery.validator.addMethod("myfileld", function (value, element) {
        return this.optional(element) || /^[a-z," "]+$/i.test(value);
    }, "Accept Only Alphabets");
});