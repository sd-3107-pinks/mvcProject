$(document).ready(function(e) {
    $('#addTask').click(function () {
        var errorMsgs="";
        var duedate = $('#duedate').val();
        if (duedate.length<1) {
            errorMsgs=errorMsgs.concat('\t •Please enter due date \n');
        }
        var message = $('#message').val();
        if (message.length<1) {
            errorMsgs=errorMsgs.concat('\t •Please enter message \n');
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
            errorMsgs=errorMsgs.concat('\t •Please enter due date \n');
        }
        var message = $('#message').val();
        if (message.length<1) {
            errorMsgs=errorMsgs.concat('\t •Please enter message \n');
        }
        var isdone = $('#isdone').val();
        if (isdone.length<1) {
            errorMsgs=errorMsgs.concat('\t •Please enter isdone \n');
        }
        if(!(isdone==0 || isdone==1)){
            errorMsgs=errorMsgs.concat('\t •Please enter either 0 or 1 \n');
        }
        if(errorMsgs.length>0) {
            alert(errorMsgs);
        }else{
            document.editTaskForm.submit();
        }
    });
});