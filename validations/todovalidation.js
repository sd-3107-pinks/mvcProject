$(document).ready(function(e) {
    $('#addTask').click(function () {
        var errorMsgs="";
        var duedate = $('#duedate').val();
        if (duedate.length<1) {
            errorMsgs=errorMsgs.concat('Please enter due date');
        }
        var message = $('#message').val();
        if (message.length<1) {
            errorMsgs=errorMsgs.concat('Please enter message');
        }
        if(errorMsgs.length>0) {
            alert(errorMsgs);
        }else{
            document.addTaskForm.submit();
        }
    });
});