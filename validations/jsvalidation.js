$(document).ready(function(e) {
    $('#emailnotok').hide();
    $('#emailok').hide();
    $('#passSmall').hide();
    $('#passStrong').hide();
    $('#passWeak').hide();
    $('#passMatched').hide();
    $('#passNotMatched').hide();

    $('#email').keyup(function () {
        var sEmail = $('#email').val();
        if (validateEmail(sEmail)) {
            $('#emailok').show();
            $('#emailnotok').hide();
        }
        else {
            $('#emailnotok').show();
            $('#emailok').hide();
            e.preventDefault();
        }
    });
    $('#password').keyup(function () {
        var sPass = $('#password').val();
        if (sPass.length<6) {
            $('#passSmall').show();
            $('#passWeak').hide();
            $('#passStrong').hide();
        }
        else if(sPass.length>=6 && sPass.length<9){
            $('#passSmall').hide();
            $('#passWeak').show();
            $('#passStrong').hide();
            e.preventDefault();
        }else if(sPass.length>9){
            $('#passSmall').hide();
            $('#passWeak').hide();
            $('#passStrong').show();
        }
    });
    $('#password2').keyup(function () {
        var sPass1 = $('#password').val();
        var sPass2 = $('#password2').val();
        if (sPass1==sPass2) {
            $('#passMatched').show();
            $('#passNotMatched').hide();
        }
        else {
            $('#passNotMatched').show();
            $('#passMatched').hide();
            e.preventDefault();
        }
    });
    $('#register').click(function () {
        var errorMsgs="";
        var sEmail = $('#email').val();
        if (sEmail.length==0) {
            errorMsgs=errorMsgs.concat('Please enter your email address');
        }
        if (!validateEmail(sEmail)) {
            errorMsgs=errorMsgs.concat('Please enter valid email address');
        }
        var fname = $('#fname').val();
        if (fname.length==0) {
            errorMsgs=errorMsgs.concat('Please enter First Name');
        }
        var lname = $('#lname').val();
        if (lname.length==0) {
            errorMsgs=errorMsgs.concat('Please enter Last Name');
        }
        var pass1 = $('#password').val();
        if (pass1.length<6) {
            errorMsgs=errorMsgs.concat('Please enter Password');
        }
        var pass2 = $('#password2').val();
        if (pass2.length<6) {
            errorMsgs=errorMsgs.concat('Please reenter Password');
        }
        if(pass1!=pass2){
            errorMsgs=errorMsgs.concat('Passwords do not match');
        }
        alert(errorMsgs);
    });
});
function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}