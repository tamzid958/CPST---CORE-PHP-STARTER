$(document).ready(function () {
    const js_error = $("#js-error");
    const password = $("#password");
    const confirm_password = $("#confirm_password");
    const password_checker_form = $("#password-checker-form");
    
    confirm_password.keyup(function(){
        if(password.val() != confirm_password.val()){
            password_checker_form.addClass("disabled");
            js_error.html("<span>Password Not Matched</span>");
        }
        else{
            password_checker_form.removeClass("disabled");
            js_error.html(null);
        }
    });
});
