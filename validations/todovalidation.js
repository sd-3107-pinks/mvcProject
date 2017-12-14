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
    $('#editTask').click(function () {
        var errorMsgs="";
        var duedate = $('#duedate').val();
        if (duedate.length<1) {
            errorMsgs=errorMsgs.concat('Please enter due date');
        }
        var message = $('#message').val();
        if (message.length<1) {
            errorMsgs=errorMsgs.concat('Please enter message');
        }
        var isdone = $('#isdone').val();
        alert(isdone);
        if (isdone.length<1) {
            errorMsgs=errorMsgs.concat('Please enter isdone');
        }
        if(!(isdone==0 || isdone==1)){
            errorMsgs=errorMsgs.concat('Please enter either 0 or 1');
        }
        if(errorMsgs.length>0) {
            alert(errorMsgs);
        }else{
            document.editTaskForm.submit();
        }
    });
});