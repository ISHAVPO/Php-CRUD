
$(document).ready(function() {
    // Custom validation method for name field
    $.validator.addMethod("validatename", function(value, element) {
        // return this.optional(element) || /^[a-zA-Z]{4,16}$/.test(value);
        return /^[a-zA-Z]{4,16}$/.test(value);
    }, "Please enter a valid name (4-16 characters, letters only)");

    var $form = $('#form');
    $form.validate({
        rules: {
            name: {
                required: true,
                validatename:true,
            },
            email:{
                required:true,
                minlength:15,
                email:true
            },
            password:{
                required:true,
                minlength:8,
            },
            confirmpassword:{
                required:true,
                minlength:8,
                equalTo:"#InputPassword"
            },
            check:{
                required:true
            }
        },
        messages:{
            name:{
                required:'Name must be filled',
            },
            email:{
                required:'Email must be filled' ,
                minlength: 'Must be at least 15 characters long' ,
                email:'Must be a valid email id'
            },
            password:{
                required:'Password must be filled' ,
                minlength: 'Must be at least 8 characters long' ,
            },
            confirmpassword:{
                required:'Must be filled' ,
                minlength: 'Must be at least 8 characters long' ,
                equalTo:'Must match the password'
            },
            check:{
                required:'Must be checked'
            }
        }
    });
});
